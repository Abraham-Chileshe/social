<?php 
  include "../database/session.php"; 
  include "inc/getting_data.php";
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
        <h1 class="storm mb-4">My Photo Albums</h1>
        <p class="mb-sm-5 mb-4 max-width"> 
          <a href="my_profile.php" class="btn btn-style btn-dark w3-hover-blue"><span class="fa fa-user"></span> Profile</a>
          <button data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-style  btn-dark w3-hover-green">Create</button>
          <button data-toggle="modal" data-target="#remove_all" style="border-radius: 10 10% 10 10%" class="btn btn-style  btn-dark w3-hover-red"><span style="font-size:18px" class="fa fa-trash"></span> Wipe</button> 
        </p>

          <div class="row mt-4">
            <?php 

              //Getting albums from photo_albums relation where userid = current user
              $get_albums = mysqli_query($con,"SELECT * from photo_albums WHERE userId='$userid' order by albumId desc ");
              $rows_num = mysqli_num_rows($get_albums);

              if($rows_num != NULL){
                while($row=mysqli_fetch_array($get_albums)){
                  $без_userid = '-'.$userid;
                  $album_id = $row['albumId']; 

                  //getting number of pictures for each album
                  $get_pictures_in_album = mysqli_query($con,"SELECT * from pictures WHERE albumID='$album_id'");
                  $num_picx = mysqli_num_rows($get_pictures_in_album);
                  //getting number of pictures for each album

                  if($get_albums==true){ 
                    extract($row);

                    echo '
                    <div class="mt-4 col-lg-4 col-md-6 item">
                      <div class="w3-card-4 card">
                          <div class="card-header p-0 position-relative">
                              <a href="my_pictures.php?album='.str_replace($без_userid, '', $album_name).'">
                                  <img class="cropped1 card-img-bottom d-block radius-image-full" src="usr_images/'.$email.'/photo_albums/'.$album_name.'/'.$album_name.'.jpg" alt="Card image cap">
                              </a>
                          </div>
                          <div class="card-body blog-details">
                              <a href="my_pictures.php?album='.str_replace($без_userid, '', $album_name).'" class="blog-desc"><span class="bing ">'.ucwords(str_replace($без_userid, '', $album_name)).'</span>'; 
                              
                              if($num_picx == NULL)
                                echo '<span style="font-size:18px;" class="w3-text-red">  : Empty </span><a/><br />';

                              if($num_picx == 1)
                               echo '<span style="font-size:18px;" class="w3-text-green">  : '.$num_picx.' item</span><a/><br />';

                              if($num_picx > 1)
                              echo '<span style="font-size:18px;" class="w3-text-green">  : '.$num_picx.' items</span><a/><br />';

                              echo'
                              <button data-toggle="modal" data-target="#'.str_replace(' ', '', str_replace($без_userid, '', $album_name)).'" class="btn btn-danger">Delete</button> 
                          </div>
                      </div>
                    </div>

                    <div style="width:100%" class="modal fade" id="'.str_replace(' ', '', str_replace($без_userid, '', $album_name)).'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="storm h4 w3-text-black modal-title" id="exampleModalLongTitle">Remove Album</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form class="mt-4" method="post" enctype="multipart/form-data">
                          <div class="modal-body">
                            <p class="w3-text-black">Are you sure you want to delete "'.str_replace($без_userid, '', $album_name).'" Album</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a href="actions/delete_album.php?album_name='.str_replace($без_userid, '', $album_name).'" class="mt-2 btn btn-danger w3-hover-black">Delete</a>
                          </div>
                        </form>
                      </div>
                    </div>
                    </div>';
                  }
                } ?>
          </div>  

          <div style="width:100%" class="modal fade" id="remove_all" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="storm h4 w3-text-black modal-title w3-text-red" id="exampleModalLongTitle">Remove Albums</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="mt-4" method="post" enctype="multipart/form-data">
                  <div class="modal-body">
                    <p class="w3-text-black">Are you sure you want to delete all the albums</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="actions/delete_all_album.php" class="mt-2 btn btn-danger w3-hover-black">Delete all</a>
                    </div>
                  </form>
              </div>
            </div>
          </div>

          <?php }else{
                //display this if no album exits for user
                echo '
                <div style="margin-top:2em" class="mt-4 col-lg-12 col-md-12 item">
                  <div class="mt-4 card">
                    <div class="card-body blog-details">
                      <center><h2 class="regular">Not Albums Available</h2></center>
                    </div>
                  </div>
                </div>';
                //display this if no album exits for user
              }
               //Getting albums from photo_albums relation where userid = current user
            ?>   
          
      </div>
    </div>

    <!-- Modal for creating new album -->
    <div style="width:100%" class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="storm h4 w3-text-black modal-title" id="exampleModalLongTitle">Create New Album</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form class="mt-4" method="post" enctype="multipart/form-data">
            <div class="modal-body">
              <input  type="file" name="album_photo" accept=".jpg,.png,.gif" size="50" required />
              <input type="text" name="album_name" class="mt-4 form-control shadow-success" placeholder="Album Name" required>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <input type="submit"  name="add_album" class="mt-2 btn btn-success w3-hover-black" value="Create">
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Modal for creating new album -->

    <?php include "inc/footer.php"; ?>

</body>
</html>

<script>
 $(document).ready(function(){
    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').trigger('focus')
    })
 });
</script>

<?php

  if(isset($_POST['add_album'])){
    
    $file_name= $_FILES['album_photo']['name'];
    $file_type= $_FILES['album_photo']['type'];
    $file_size= $_FILES['album_photo']['size'];
    $file_tem_Loc= $_FILES['album_photo']['tmp_name'];
    $file_store= "usr_images/".$cover_img.".jpg";
    $album_name = strtolower(mysqli_real_escape_string($con,$_POST['album_name']));
    $dbalbum_name = $album_name."-".$userid;
    $dir = "usr_images/".$email."/photo_albums";
    $dir2 = "usr_images/".$email."/photo_albums/".$dbalbum_name;
    $destination = "usr_images/".$email."/photo_albums/".$dbalbum_name."/".$dbalbum_name.".jpg"; 

    if(!is_dir($dir))
      mkdir("usr_images/".$email."/photo_albums");
    
    if(!is_dir($dir2))
       mkdir("usr_images/".$email."/photo_albums/".$dbalbum_name);
    
    if( !copy($file_tem_Loc, $destination) ){
      echo "File can't be copied! \n"; 
    }else{    
        $stmt_user = $con->prepare("INSERT INTO photo_albums (userId, album_name) VALUES (?, ?)");
        $stmt_user->bind_param("is", $userid, $dbalbum_name);
        $stmt_user->execute();
        $stmt_user->close();
        echo '<meta http-equiv="refresh" content="0;url=my_photo_albums.php" />';
    }
  }
?>