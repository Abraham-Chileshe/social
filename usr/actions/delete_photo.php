<?php
      include "../../database/session.php";
      include "../inc/getting_data.php";

      $ide = $_GET['album_name'];
      $album_name = $ide.'-'.$userid;
      
      $del_album = mysqli_query($con,"DELETE FROM photo_albums WHERE album_name='$album_name'");
  
      if($del_album == true){
        
        $folder = "../usr_images/".$email."/photo_albums/".$album_name;
        $files = glob($folder. "/*");

        foreach($files as $file){
            if(is_file($file)){
              unlink($file);
            }
        }
        rmdir("../usr_images/".$email."/photo_albums/".$album_name);  
        echo '<meta http-equiv="refresh" content="0;url=../my_photo_albums.php" />';
      }
     
?>