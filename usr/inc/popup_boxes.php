<!--First Gallery Picture-->
<div id="myModal_first_picture" class="xmodal">
  <div class="xmodal-content">
    <span class="xclose">&times;</span>
    <p class="w3-text-black">Click the Image to download</p>
    <a href="assets/images/fashion5.jpg" download="myimage">
        <center><img src="assets/images/fashion5.jpg" class="shadow-in mt-4 img-fluid radius-image-full " alt="picture number one"></center>
    </a>                   
  </div>
</div>
<!--First Gallery Picture-->

<!--First Gallery Picture-->
<div id="myModal_skill" class="xmodal">
  <div style=" max-width:90%; margin-top:5em; border-radius:5px" class="xmodal-content">
    <span style="cursor:pointer" class="xclose14">&times;</span><br />
    <form class="mt-4" method="post" enctype="multipart/form-data">
      <div class="modal-body">
        <input  type="file" name="hobby_photo" accept=".jpg,.png,.gif" size="50" required />
        <input type="text" name="hobby_name" maxlength="50" class="mt-4 form-control shadow-success" placeholder="Album Name" required><br/>
      </div>
      <div class="modal-footer">
        <input type="submit"  name="hobby_submit" class="mt-2 btn btn-success w3-hover-black" value="Create">
      </div>
    </form>                   
  </div>
</div>
<!--First Gallery Picture-->

<!--Second Gallery Picture-->
<div id="myModal_second_picture" class="xmodal">
  <div class="xmodal-content">
    <span class="xclose2">&times;</span>
    <p class="w3-text-black">Click the Image to download</p>
    <a href="assets/images/fashion.jpg" download="myimage">
        <center><img src="assets/images/fashion.jpg" class="shadow-in mt-4 img-fluid radius-image-full " alt="picture number one"></center>
    </a>                   
  </div>
</div>
<!--Second Gallery Picture-->

<!--Second Gallery Picture-->
<div id="myModal_third_picture" class="xmodal">
  <div class="xmodal-content">
    <span class="xclose3">&times;</span>
    <p class="w3-text-black">Click the Image to download</p>
    <a href="assets/images/trending2.jpg" download="myimage">
        <center><img src="assets/images/trending2.jpg" class="shadow-in mt-4 img-fluid radius-image-full " alt="picture number one"></center>
    </a>                   
  </div>
</div>
<!--Second Gallery Picture-->


<!--Second Gallery Picture-->
<div id="myModal_fourth_picture" class="xmodal">
  <div class="xmodal-content">
    <span class="xclose4">&times;</span>
    <p class="w3-text-black">Click the Image to download</p>
    <a href="assets/images/pic1.jpg" download="myimage">
        <center><img src="assets/images/pic1.jpg" class="shadow-in mt-4 img-fluid radius-image-full " alt="picture number one"></center>
    </a>                   
  </div>
</div>
<!--Second Gallery Picture-->


<!--Changing Profile Picture and Cover Image-->
<div id="myModal_change" class="xmodal">
  <div class="xmodal-content" style="margin-top:3em; border-radius:10px; width:700px; max-width:100%">
    <span class="xclose6">&times;</span>
    <p class="w3-text-black">Update Profile and Cover Images</p>
    
    <div class="row">
      <div class="col-lg-6">
        <a href="usr_images/<?php echo$email;?>/<?php echo$Pimg;?>.jpg" download="profile_image">
            <center><img src="usr_images/<?php echo$email;?>/<?php echo$Pimg;?>.jpg" class="img-in-change-cover-and-profile shadow-in mt-4 img-fluid radius-image-full " alt="picture number one"></center>
        </a> 
        <form class="mt-2" method="post" enctype="multipart/form-data">
            <input  type="file" name="file" accept=".jpg" size="50" required  />
            <button name="change_prof" style="width:100%" class="mt-2 btn btn-dark">Change</button>
        </form>

      </div>

      <div class="col-lg-6 mb-4">
        <a href="usr_images/<?php echo$email;?>/<?php echo$Cimg;?>.jpg" download="cover_image">
              <center><img src="usr_images/<?php echo$email;?>/<?php echo$Cimg;?>.jpg" class="img-in-change-cover-and-profile shadow-in mt-4 img-fluid radius-image-full " alt="picture number one"></center>
        </a>
        <form class="mt-2" method="post" enctype="multipart/form-data">
            <input  type="file" name="cover" accept=".jpg" size="50" required />
            <button name="change_cover" style="width:100%" class="mt-2 btn btn-dark">Change</button>
        </form>
      </div>


    </div>
  </div>
</div>
<!--Changing Profile Picture and Cover Image-->


<!--Changing Profile Picture and Cover Image-->
<div id="myModal_change_cover" class="xmodal">
  <div class="xmodal-content" style="width:700px">
    <span class="xclose10">&times;</span>
    <p class="w3-text-black">Update Profile and Cover Images</p>
    
    <div class="row">
      <div class="col-lg-6">
        <a href="usr_images/<?php echo$email;?>/<?php echo$Pimg;?>.jpg" download="profile_image">
            <center><img src="usr_images/<?php echo$email;?>/<?php echo$Pimg;?>.jpg" class="shadow-in mt-4 img-fluid radius-image-full " alt="picture number one"></center>
        </a> 
        <form class="mt-2" method="post" enctype="multipart/form-data">
            <input  type="file" name="file" accept=".jpg" size="50" required  />
            <button name="change_prof" class="mt-2 btn btn-dark">Change</button>
        </form>

      </div>

      <div class="col-lg-6">
        <a href="usr_images/<?php echo$email;?>/<?php echo$Cimg;?>.jpg" download="cover_image">
              <center><img src="usr_images/<?php echo$email;?>/<?php echo$Cimg;?>.jpg" class="shadow-in mt-4 img-fluid radius-image-full " alt="picture number one"></center>
        </a>
        <form class="mt-2" method="post" enctype="multipart/form-data">
            <input  type="file" name="cover" accept=".jpg" size="50" required />
            <button name="change_cover" class="mt-2 btn btn-dark">Change</button>
        </form>
      </div>


    </div>
  </div>
</div>
<!--Changing Profile Picture and Cover Image-->

<!--Edit biography and Gender-->
<div id="myModal_edit" class="xmodal">
  <div style="width:1000px; max-width:90%; border-radius:20px"  class="xmodal-content">
    <span class="xclose5">&times;</span>
    <p class="w3-text-black">Edit Profile</p>
    <br>
    <div class="row">
      <div class="col-lg-6">
        <?php
        if($gender == NULL){
          echo '
          <div class="mt-4">
            <center>
              <form method="POST">
                <button style="width:45%" name="male" class="btn w3-red w3-hover-black">Male</button>
                <button style="width:45%" name="female" class="btn w3-red w3-hover-black">Female</button>
              </form>
            </center>
          </div>';
        }else{
          echo'<span class="btn "><u>'.$gender.'</u></span>';
        }
        ?>

      <div class="mt-4">
          <form method="POST">
            <textarea id="mytextarea" style="width:100%; height:105px" maxlength="1" placeholder="Edit your Biography" name="new_bio" class="form-control shadow-success" ><?php echo $bio; ?></textarea>
            <button style="" name="bbio" class="mt-2 btn btn-dark w3-hover-black">update</button>
          </form>
      </div>
    </div>

    <div class="col-lg-6">
      <?php
    if($DoB == NULL){
      echo '
      <div class="mt-4">
          <form method="POST">
            <p class="mt-2 w3-text-black">Date of Birth</p>
            <input type="date" name="dateofbirth" class="form-control shadow-success" required>
            <input type="submit"  name="dobadd" class="w-15 mt-2 btn btn-dark w3-hover-black" value="add">
          </form>
      </div>';
    }
    ?>

      <div class="mt-4">
          <form method="POST">
            <input type="text" name="living" class="form-control shadow-success" placeholder="Residence... Country, City" value="<?php echo $residence; ?>">
            <input type="submit"  name="livingadd" class="w-15 mt-2 btn btn-dark w3-hover-black" value="update">
          </form>
      </div>


      <div class="mt-4">
          <form method="POST">
            <input type="text" name="profession" class="form-control shadow-success" placeholder="Proffession...Student, doctor, Engineer" value="<?php echo $profession; ?>">
            <input type="submit"  name="professionadd" class="w-15 mt-2 btn btn-dark w3-hover-black" value="update">
          </form>
      </div>
  </div>
  </div>


  </div>
</div>
<!--Edit biography and Gender-->

<?php

if(isset($_POST['male'])){
  mysqli_query($con,"UPDATE users SET gender = 'Male' WHERE userid = '$userid'");
  echo '<meta http-equiv="refresh" content="0;url=my_profile.php" />';
}

if(isset($_POST['female'])){
  mysqli_query($con,"UPDATE users SET gender = 'Female' WHERE userid = '$userid'");
  echo '<meta http-equiv="refresh" content="0;url=my_profile.php" />';
}

if(isset($_POST['bbio'])){
  $biograph = mysqli_real_escape_string($con,$_POST['new_bio']);
  mysqli_query($con,"UPDATE users SET biography = '$biograph' WHERE userid = '$userid'");
  echo '<meta http-equiv="refresh" content="0;url=my_profile.php" />';
}

if(isset($_POST['dobadd'])){
  $date = mysqli_real_escape_string($con,$_POST['dateofbirth']);
  mysqli_query($con,"UPDATE users SET DoB = '$date' WHERE userid = '$userid'");
  echo '<meta http-equiv="refresh" content="0;url=my_profile.php" />';
}

if(isset($_POST['livingadd'])){
  $residence = mysqli_real_escape_string($con,$_POST['living']);
  mysqli_query($con,"UPDATE users SET residence = '$residence' WHERE userid = '$userid'");
  echo '<meta http-equiv="refresh" content="0;url=my_profile.php" />';
}

if(isset($_POST['professionadd'])){
  $prof = mysqli_real_escape_string($con,$_POST['profession']);
  mysqli_query($con,"UPDATE users SET profession = '$prof' WHERE userid = '$userid'");
  echo '<meta http-equiv="refresh" content="0;url=my_profile.php" />';
}


if(isset($_POST['change_prof'])){

  $file_name= $_FILES['file']['name'];
  $file_type= $_FILES['file']['type'];
  $file_size= $_FILES['file']['size'];
  $file_tem_Loc= $_FILES['file']['tmp_name'];
  $file_store= "usr_images/".$profile_img.".jpg";

  if( !copy($file_tem_Loc,$file_store) ) { 
    echo "File can't be copied! \n"; 
  }else{
    echo '<meta http-equiv="refresh" content="0;url=my_profile.php" />';
  }
}

  if(isset($_POST['change_cover'])){

    $file_name= $_FILES['cover']['name'];
    $file_type= $_FILES['cover']['type'];
    $file_size= $_FILES['cover']['size'];
    $file_tem_Loc= $_FILES['cover']['tmp_name'];
    $file_store= "usr_images/".$cover_img.".jpg";
  
    if( !copy($file_tem_Loc,$file_store) ) { 
      echo "File can't be copied! \n"; 
    }else{
      echo '<meta http-equiv="refresh" content="0;url=my_profile.php" />';
    }
  }

  if(isset($_POST['hobby_submit'])){

    $file_name= $_FILES['hobby_photo']['name'];
    $file_type= $_FILES['hobby_photo']['type'];
    $file_size= $_FILES['hobby_photo']['size'];
    $file_tem_Loc= $_FILES['hobby_photo']['tmp_name'];
    $hobby_title = strtolower(mysqli_real_escape_string($con,$_POST['hobby_name']));
    $dir = "usr_images/".$email."/hobbies";
    $destination = "usr_images/".$email."/hobbies/".$file_name; 
    $datetime=date("d M Y, l ");

    if(!is_dir($dir))
      mkdir($dir);
    
    if( !copy($file_tem_Loc,$destination) ) { 
      echo "File can't be copied! \n"; 
    }else{
      $hobby_stmt = $con ->prepare("INSERT INTO user_hobbies(userId, hobby, img, dtime) VALUES (?,?,?,?) ");
      $hobby_stmt ->bind_param("isss", $userid, $hobby_title, $file_name, $datetime);
      $hobby_stmt ->execute();
      $result_stmt = $hobby_stmt->get_result();
      $hobby_stmt->close();
      echo '<meta http-equiv="refresh" content="0;url=my_profile.php" />';
    }
  }

  
  ?>
