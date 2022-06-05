<?php
      include "../../database/session.php";
      include "../inc/getting_data.php";

      
      $del_album = mysqli_query($con,"DELETE FROM photo_albums WHERE userID='$userid'");
  
      if($del_album == true){
        
        $main_folder = "../usr_images/".$email."/photo_albums";
        $subfolders = glob($main_folder. "/*");

        foreach($subfolders as $subfolder){
            if(is_dir($subfolder)){
              
              $files = glob($subfolder. "/*");

              foreach($files as $file){
                  if(is_file($file)){
                    unlink($file);
                  }
              }
              rmdir($subfolder);  
            }
        }
        
        if(rmdir("../usr_images/".$email."/photo_albums") == true)
          echo '<meta http-equiv="refresh" content="0;url=../my_photo_albums.php" />';
      }
     
?>