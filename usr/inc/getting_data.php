<?php

    $my_data = mysqli_query($con,"SELECT * FROM users WHERE userId='$userid'");
    $my = mysqli_fetch_array($my_data);
    $uname = $my['Username'];    
    $profile = $my['profile_img']; 
    $fname = $my['Firstname'];
    $lname = $my['Lastname'];
    $cover = $my['cover_img']; 
    $bio = mysqli_real_escape_string($con,$my['biography']);
    $gender = $my['gender'];
    $DoB = $my['DoB'];
    $residence = $my['Residence'];
    $profession = $my['profession'];

    $acc_relation = mysqli_query($con,"SELECT * FROM accounts WHERE AccountId='$userid'");
    $data_acc = mysqli_fetch_array($acc_relation);
    $email = $data_acc['email']; 

    $get_albums = mysqli_query($con,"SELECT * from photo_albums WHERE userId='$userid' order by albumId desc ");
    $get_alb = mysqli_fetch_array($get_albums);
    $album_name = $get_alb['album_name'];

    $Pimg = "profile".$userid;
    $Cimg = "cover".$userid;
    $profile_img = $email."/".$Pimg;
    $cover_img = $email."/".$Cimg;

    $get_hobbies = mysqli_query($con,"SELECT * from user_hobbies WHERE userId='$userid'");
    $num_of_hobbies = mysqli_num_rows($get_hobbies);


?>