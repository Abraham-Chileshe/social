<?php
    session_start();
    include "database/db.php";
    if (isset($_SESSION['username'])&&$_SESSION['username']!=""){
    header("Location:usr/index.php");
}
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Login</title>
    <?php include "inc/meta_data.php"; ?>
</head>

<body>
    <div class="signinform">        
        <div class="container">
            <div class="w3l-form-info">
                <div class="w3_info">
                    <h2 id="top" >Login</h2>
                    <form action="#" method="post">
                        <div class="input-group">
                            <span><i class="fas fa-user" aria-hidden="true"></i></span>
                        <input type="email" placeholder="Username or Email" name="Email" required="">
                        </div>
                        <div class="input-group">
                            <span><i class="fas fa-key" aria-hidden="true"></i></span>
                            <input type="Password" placeholder="Password" name="Password" id="pwd" required="">
                        </div>
                        <div class="form-row bottom">
                            <div class="form-check">
                                <input type="checkbox" id="remenber" onclick="password()" name="remenber" value="remenber">
                                <label for="remenber"> Show Password</label>
                            </div>
                                <a href="#url" class="forgot">Forgot password?</a>                           
                        </div>
                        <br/>
                        <button class="btn btn-primary btn-block w3-edge" name="login"  type="submit">Login</button>
                    </form>
                    <p class="continue"><span>Let's talk</span></p>
                   
                    <p class="account">Don't have an account? <a href="signup.php">Sign up</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="js/fontawesome.js"></script>
</body>
</html>

<?php

include 'database/db.php';
if(isset($_POST['login'])){

//Input from User [Username];
$emails = $_POST['Email']; 
$email = mysqli_real_escape_string($con,$emails);
$email =  strtolower($email);
//Input from User [Username];

//Input from User [Password];
$passwords = $_POST['Password'];
$password = mysqli_real_escape_string($con,$passwords);
$password =  strtolower($password);
$password = hash("sha1",$password);
//Input from User [Password];

$login_stmt = $con ->prepare("SELECT * FROM accounts WHERE email = ? and Passwords = ? ");
$login_stmt ->bind_param("ss", $email, $password);
$login_stmt ->execute();
$result_stmt = $login_stmt->get_result();
$login_stmt->close();

    while($row = $result_stmt->fetch_assoc()){
        $dbpwd = $row['Passwords'];
        $ID = $row["AccountId"];
        
        if ($row['email'] == $email){

            $stmt = $con ->prepare("SELECT * FROM users WHERE userId=?");
            $stmt ->bind_param("i", $ID);
            $stmt ->execute();
            $result_stmt_user = $stmt->get_result();
            $stmt->close();

            while($row = $result_stmt_user->fetch_assoc()){
                $uname= $row["Username"];
                session_start();
                $_SESSION['username'] = $uname;
                $_SESSION['user_Id'] = $ID;

                ?>
                <script>
                    $(document).ready(function(){
                        $("#top").text("Logged in");
                        $("#top").show();
                        $("#top").addClass("w3-text-green");
                    });
                </script>
                <?php
                echo '<meta http-equiv="refresh" content="0;url=usr/my_profile.php" />';
            }
        }else{ echo "asdasdasdasdasd";
            ?>
             <script>
                    $(document).ready(function(){
                        $("#top").text("Logged in");
                        $("#top").show();
                        $("#top").addClass("w3-text-green");
                    });
                </script>
            <?php
        }
    }
}
?>