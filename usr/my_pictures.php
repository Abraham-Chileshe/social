<?php
  include "../database/session.php";
  include "inc/getting_data.php";

  //Getting the albumid from photo_albums relation using album_name passed in as a $_GET[];
  $ide = $_GET['album'];
  $album_name_get = $ide.'-'.$userid; //making the plain album_name (UNIQUE) by adding missing data.
  //Getting the albumid from photo_albums relation using album_name passed in as a $_GET[];
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <title>Website | Home</title>
    <?php include "inc/meta_data.php"; ?>
</head>

<body>

  <!--preloader-->
  <div class="se-pre-con"></div>
  <!--//preloader-->

  <!-- Top navigation bar -->
  <?php include "inc/topnav.php"; ?>
  <!-- //Top navigation bar -->

  <div class="w3l-homeblock2 py-5">
    <div class="container pt-md-4 pb-md-5">
      <h1 class="storm mb-4">Album: <?php echo$ide; ?></h1>
      <p class="mb-sm-5 mb-4 max-width">
      <a href="my_photo_albums.php" class="btn btn-style btn-info">Go back</a>
      <button data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-style btn-success">Add New Photo</button></p>
      
      <div class="row">     
        <?php 

          //Getting the albumid from photo_albums relation using album_name passed in as a $_GET[];
          $get_album_Id = mysqli_query($con,"SELECT * from photo_albums WHERE album_name='$album_name_get'");
          $rows=mysqli_fetch_array($get_album_Id);
          $albumid = $rows['albumId']; //album_Id
          //Getting the albumid from photo_albums relation using album_name passed in as a $_GET[];

          //Getting photos from the pictures_relation using the album_id generated above
          $get_photos = mysqli_query($con,"SELECT * from pictures WHERE userID='$userid' AND albumId='$albumid' order by pictureId desc");
          while($row=mysqli_fetch_array($get_photos)){
            $photo_name = $row['photo_name'];
            $unique_id = substr($photo_name, 0, strpos($photo_name, "."));
            $caption = $row['caption'];
            extract($row);
            
            echo '
              <div class="mt-4 col-lg-3 col-md-4 col-xs-6 col-sm-6 item">
                <div class="card">
                    <div class="card-header p-0 position-relative">
                        <a data-toggle="modal" data-target="#'.$unique_id.'">
                            <img style="height:300px" class="cropped1 card-img-bottom d-block radius-image-full" src="usr_images/'.$email.'/photo_albums/'.$album_name_get.'/'.$photo_name.'" alt="'.$photo_name.'">
                        </a>
                    </div>
                    <div class="card-body blog-details">
                        <p>'.ucwords($caption).'<p>
                    </div>
                </div>
              </div>

              <div style="width:100%" class="modal fade" id="'.$unique_id.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="storm h4 w3-text-black modal-title" id="exampleModalLongTitle">viewing photo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form class="mt-4" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                    <img class="card-img-bottom d-block radius-image-full" src="usr_images/'.$email.'/photo_albums/'.$album_name_get.'/'.$photo_name.'" alt="'.$photo_name.'">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <a href="actions/delete_photo.php?photo_name='.str_replace($userid, '', $album_name).'" class="mt-2 btn btn-danger w3-hover-black">Delete</a>
                    </div>
                  </form>
                </div>
              </div>
              </div>';
          }
          //Getting photos from the pictures_relation using the album_id generated above
        ?>
      </div>
    
    </div>
  </div>

  <!-- Popoup Modal for Adding New Picture to the Album-->
  <div style="width:100%" class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="storm h4 w3-text-black modal-title" id="exampleModalLongTitle">Add New Photo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="mt-4" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <input  type="file" name="album_photo" accept=".jpg,.png,.gif" size="50" required />
            <textarea id="mytextarea" style="width:100%; height:70px" maxlength="190" placeholder="Caption the Image" name="captions_this" class="mt-4 form-control shadow-success"></textarea>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit"  name="add_album" class="mt-2 btn btn-success w3-hover-black" value="Upload Picture">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--// Popoup Modal for Adding New Picture to the Album-->

  <?php include "inc/footer.php"; ?>
  <script>
  $(document).ready(function(){
      $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
      })
  });
  </script>

</body>
</html>


<?php

  //PHP Code for uploading a new image
   if(isset($_POST['add_album'])){

    $photo = $_FILES['album_photo']['name'];
    $file_tem_Loc= $_FILES['album_photo']['tmp_name'];
    $pix_name = $_POST['captions_this'];
    $pix_name = mysqli_real_escape_string($con,$pix_name);
    
    echo $pix_name; 
    $destination = "usr_images/".$email."/photo_albums/".$album_name_get."/".$photo; 
      
    if( !copy($file_tem_Loc, $destination) ){
      echo "File can't be copied! \n"; 
    }else{
      $stmt_user = $con->prepare("INSERT INTO pictures (albumId, userID, photo_name, caption) VALUES (?, ?, ?, ?)");
      $stmt_user->bind_param("iiss", $albumid, $userid,$photo,$pix_name);
      $stmt_user->execute();
      $stmt_user->close();
      echo $albumid.'/'.$userid.'/'.$photo.'/'.$pix_name;
      //echo '<meta http-equiv="refresh" content="0;url=my_pictures.php?album='.$ide.'" />';
    }
  }
  //PHP Code for uploading a new image
?>






