<?php
// If necessary then set these
/*ini_set('post_max_size', '1000M');
ini_set('upload_max_filesize', '1000M');
ini_set('memory_limit','1000M');*/

require ('../../../../database/session.php');
require ('../../../inc/getting_data.php');

require('../az.multi.upload.class.php');
$rename	=	rand(1000,5000).time();
$upload	=	new ImageUploadAndResize();
$albumname = mysqli_real_escape_string($con,$_POST['param_1']);
$location = '../../../usr_images/'.$email.'/photo_albums/'.$albumname;

if($albumname==""){
    
}else{
    
    
    $ext = pathinfo($_FILES['files']['name'][0], PATHINFO_EXTENSION);
    $uploaded = $rename.'.'.$ext;


    $stmt_user = $con->prepare("INSERT INTO photo_albums (userId, album_name, album_picture) VALUES (?, ?, ?)");
    $stmt_user->bind_param("iss", $userid, $albumname, $uploaded);
    $stmt_user->execute();
    $stmt_user->close();

    if ($stmt_user == True) {
        $upload->uploadFiles('files', $location, true, 250, '../mini-logo.png', 20, 20, $rename, 0777, 100, '850', '250');  
    } else {
        // Didn't work...
    }
}

