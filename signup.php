<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>New Account</title>
    <?php include "inc/meta_data.php"; ?>
</head>

<body>
    <div class="signinform ">        
        <div class="container">
            <div class="w3l-form-info ">
                <div class="w3_info mt-4 mb-4 rounded w3-card-2">
                    <h2 id="top">New Account</h2>
                    <form action="#" method="post">

                        <div class="input-group">
                            <span><i class="fas fa-user" aria-hidden="true"></i></span>
                            <input type="text" placeholder="Firstname" name="fname" required="">
                        </div>

                        <div class="input-group">
                            <span><i class="fas fa-user" aria-hidden="true"></i></span>
                            <input type="text" placeholder="Lastname" name="lname" required="">
                        </div>

                        <div class="input-group">
                            <span><i class="fas fa-envelope" aria-hidden="true"></i></span>
                            <input type="email" placeholder="Email" name="email" required="">
                        </div>

                        <div class="input-group">
                            <span><i class="fas fa-user" aria-hidden="true"></i></span>
                            <input type="text" placeholder="username" name="uname" required="">
                        </div>

                        <div class="input-group">
                            <span><i class="fas fa-key" id="failed" aria-hidden="true"></i></span>
                            <input type="password" placeholder="Password" name="Password" id="pwd" required="">
                        </div>

                        <div class="input-group">
                            <span><i id="failed1" class="fa fa-check-circle" aria-hidden="true"></i></span>
                            <input type="password" placeholder="confirm Password" id="pwd2" oninput="checkfunc();" name="cPassword" required="">
                        </div>

                        <div class="form-row bottom">
                            <div class="form-check">
                                <center>
                                    <input type="checkbox" id="remenber" name="remenber"  onclick="password()" value="remenber">
                                    <label for="remenber"> Show Password</label>
                                </center>
                            </div>
                                                         
                        </div><br/>
                        <button class="btn btn-primary btn-block w3-edge" name="signup"  type="submit">Signup</button>
                    </form>
                    <p class="continue" id = "info"><span>Let's talk</span></p>
                   
                    <p class="account">Already a Member? <a href="index.php">Login</a></p>
                </div>
            </div>
        </div>
    </div>

    <?php
        include "database/db.php";
        include "inc/function_statements.php";

        if(isset($_POST['signup'])){
            
            //get_signup_info
            $fname = mysqli_real_escape_string($con,$_POST["fname"]); 
            $lname = mysqli_real_escape_string($con,$_POST["lname"]); 
            $email = mysqli_real_escape_string($con,$_POST["email"]); 
            $email = strtolower($email);
            $uname = mysqli_real_escape_string($con,$_POST["uname"]); 
            $pwd_unfiltered = mysqli_real_escape_string($con, $_POST["Password"]);
            $pwd =  hash('sha1', $pwd_unfiltered ); 
            $cpwd_unfiltered = mysqli_real_escape_string($con, $_POST["cPassword"]);
            $cpwd = hash('sha1', $cpwd_unfiltered);

            if($pwd == $cpwd){

                //prepared statement insertion into accounts table;
                $stmt = $con->prepare("INSERT INTO accounts (email, Passwords) VALUES (?, ?)");
                $stmt->bind_param("ss", $dbemail, $dbpwd);
                $dbemail = strval($email);
                $dbpwd =  strval($pwd);
                $stmt->execute();
                $stmt->close();
            
                    if($stmt == true){      
                        
                        $start = $con ->prepare("SELECT * FROM accounts WHERE email = ? and Passwords = ? ");
                        $start ->bind_param("ss", $email, $pwd);
                        $start ->execute();
                        $result = $start->get_result();
                        $start->close();


                            while($row = $result->fetch_assoc()){
                                $ID = $row["AccountId"];
                                $Pimg = "profile".$ID;
                                $Cimg = "cover".$ID;

                                $stmt_user = $con->prepare("INSERT INTO users (userId, Firstname, Lastname, Username, profile_img, cover_img) VALUES (?, ?, ?, ?, ?, ?)");
                                $stmt_user->bind_param("isssss", $ID, $fname, $lname, $uname, $Pimg, $Cimg);
                                $stmt_user->execute();
                                $stmt_user->close();

                                if($stmt_user == true){
                                   
                                    session_start();

                                    $_SESSION['username'] = $uname;
                                    $_SESSION['user_Id'] = $ID;
                                    
                                    $file_dir = "usr/usr_images/".$dbemail;

                                    if (!file_exists($file_dir))
                                        mkdir($file_dir);                                    
                                    
                                    $source = 'usr/assets/images/template_profile.jpg'; 
                                    $destination = 'usr/usr_images/'.$dbemail.'/'.$Pimg.'.jpg'; 
                                    
                                    if( !copy($source, $destination) ) { 
                                        echo "File can't be copied! \n"; 
                                    }else { 
                                        $source = 'usr/assets/images/template_cover.jpg'; 
                                        $destination = 'usr/usr_images/'.$dbemail.'/'.$Cimg.'.jpg'; 
                                        
                                        if( !copy($source, $destination) ) 
                                            echo "File can't be copied! \n"; 
                                        else 
                                           echo '<meta http-equiv="refresh" content="0;url=usr/my_profile.php" />';
                                    }
                                ?>
                                    <script>
                                        $(document).ready(function(){
                                            $("#top").text("Logged in Successfully");
                                            $("#top").show();
                                            $("#top").addClass("w3-text-green");
                                            
                                        });
                                    </script>
                                <?php
                                    
                                }
                            }
                    }else{
                        //deleting user
                        $delete_user = $con ->prepare("DELETE FROM users WHERE userId=?");
                        $delete_user -> bind_param('i',$ID);
                        $delete_user -> execute();
                        $delete_user -> close();
                        //deleting user

                        //deleting account
                        $delete_account = $con ->prepare("DELETE FROM accounts WHERE email=? and Passwords=?");
                        $delete_account -> bind_param('ss',$email,$pwd);
                        $delete_account -> execute();
                        $delete_account -> close();
                        //deleting account


                        ?>
                            <script>
                                $(document).ready(function(){
                                    $("#top").text("Process Failed");
                                    $("#top").addClass("w3-text-red");
                                    $("$top").fadeIn(4000);
                                })
                            </script>
                        <?php
                    }

            }else{
                ?>
                    <script>
                        $(document).ready(function(){
                            $("#info").text("Umatched Passwords");
                            $("#info").addClass("w3-text-red");
                            $("#failed").addClass("w3-text-red");
                            $("#failed1").addClass("w3-text-red");
                            $("$info").fadeIn(4000);
                        })
                    </script>
                <?php
            }       
        }

    ?>

    

    <script src="js/fontawesome.js"></script>
</body>
</html>