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

<!-- Page loader -->
<div class="se-pre-con"></div>
<!-- //Page loader -->

<!-- top_nav -->
<?php include "inc/topnav.php"; ?>
<?php include "inc/cover.php"; ?>
<!-- //top_nav -->

<section class="w3l-testimonials" id="testimonials">
    <!-- main-slider -->
    <div class="testimonials overlay-cover pb-5">
        <div class="cover-profile container pb-lg-5">
            <div class="owl-testimonial owl-carousel owl-theme mb-md-0 mb-sm-5 mb-4 ">
                 <!--Profile Picutures + Biography -->
                <div style="margin-top:4em" class="item">
                    <div class=" row slider-info">

                         <!--Display profile for Phones-->
                         <div class="pictures-container-phone col-lg-4 col-md-12 img-circle mt-lg-0 mt-4 d-xl-none d-md-none">
                            <center><img id="change_photos_phone" src="usr_images/<?php echo $profile_img; ?>.jpg" style="border-radius:100%" class="pictures-image w3-card-3 img-fluid radius-image-full img-profile" alt="profile image"></center>
                        </div>
                        <!--Display profile for Phones-->
                        
                        <div class="pt-4 overlay-cover-faded rounded mt-3 mb-4 col-lg-8 message-info align-self">
                            <div class=" border-lefts pt-4 pb-4 pl-4 pr-4">
                                <h3 class="title-big mb-4" style="font-family:headerfont"><?php echo $uname; ?></h3>
                                <span class="label-blue mb-sm-4 mb-3"><?php echo $fname." ".$lname; ?></span>
                                <p class="message"><?php echo $bio; ?></p>
                                <div class="mt-4">
                                    <button  id="edit_bio_gender"  style="border-radius: 5.25rem;" class="btn btn-style btn-primary">Edit</button>
                                </div>
                            </div>
                        </div>
                        
                        <!--Display profile for Laptops-->
                        <div class="col-lg-4 col-md-4 pictures-container img-circle mt-lg-0 mt-4 d-none d-lg-block  ">
                            <img  id="change_photos" src="usr_images/<?php echo $profile_img; ?>.jpg" class="pictures-image mt-4 img-fluid radius-image-full img-profile-laptop" alt="client image">
                        </div>
                        <!--Display profile for Laptops-->
                    </div>
                </div>     
                 <!--Profile Picutures + Biography -->
                 
                 <!--Four buttoned section -->
                 <div class=" item">
                    <div class=" row slider-info">                  
                        <div class="rounded mt-2 mb-4 col-lg-12 message-info align-self">
                            <div class="pb-4 pl-4 pr-4">
                            <section class="w3l-homeblock1 py-sm-5 py-4">
                                <div class="container py-md-4">
                                <h1 class="w3-text-white storm mb-4">Discover My World</h1>
                                    <div class="grids-area-hny main-cont-wthree-fea row">
                                        <div class="pt-4 col-lg-6 col-6 col-mg-4 col-sm-6 grids-feature">
                                            <a href="my_photo_albums.php">
                                                <div class="buttons-options area-box">
                                                    <span class="fa fa-picture-o"></span>
                                                    <h4 class="title-head">Pictures</h4>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="pt-4 col-lg-6 col-6 col-mg-4 col-sm-6 grids-feature">
                                            <a href="fashion.html">
                                                <div class="w3-card-4 buttons-options area-box">
                                                    <span class="fa fa-female"></span>
                                                    <h4 class="title-head">Fashion and style</h4>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="pt-4 col-lg-6 col-6 col-mg-4 col-sm-6 grids-feature mt-lg-0 mt-md-4 mt-3">
                                            <a href="#food">
                                                <div class="buttons-options area-box">
                                                    <span class="fa fa-cutlery"></span>
                                                    <h4 class="title-head">Food and wellness</h4>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="pt-4 col-lg-6 col-6  col-mg-4 col-sm-6 grids-feature mt-lg-0 mt-md-4 mt-3">
                                            <a href="#lifsetyle">
                                                <div class="buttons-options area-box">
                                                    <span class="fa fa-pie-chart"></span>
                                                    <h4 class="title-head">Lifestyle</h4>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            </div>
                        </div>
                    </div>
                </div>     
                 <!--Four buttoned section -->
                
                 <div class=" item">
                    <h1 class="w3-text-white storm mb-2 mt-4">My Pictures</h1> 
                    <div class="mt-4 row slider-info">
                       
                        <div class="pictures-container col-lg-2 col-md-12 col-sm-12 img-circle mt-lg-0 mt-2">
                        </div> 

                        <div class="pictures-container col-lg-2 col-md-6 img-circle mt-lg-0 mt-2">
                            <img src="assets/images/fashion5.jpg" class="d-none d-sm-block pictures-image mt-4 img-fluid radius-image-full img-gallery-laptop" alt="client image">
                            <img src="assets/images/fashion5.jpg" class="d-xl-none pictures-image  d-md-none mt-4 img-fluid radius-image-full img-gallery-phone" alt="client image">
                            <div class="pictures-middle">
                                <button id="myBtn_first_picture" class="btn btn-dark w3-hover-white mt-2"><span class="fa fa-eye"></button>
                            </div>
                        </div>

                        <div class="pictures-container col-lg-2 col-md-6 img-circle mt-lg-0 mt-2">
                            <img src="assets/images/fashion.jpg" class="d-none d-sm-block pictures-image mt-4 img-fluid radius-image-full img-gallery-laptop" alt="client image">
                            <img src="assets/images/fashion.jpg" class="d-xl-none pictures-image  d-md-none mt-4 img-fluid radius-image-full img-gallery-phone" alt="client image">
                            <div class="pictures-middle">
                                <button id="myBtn_second_picture" class="btn btn-dark w3-hover-white mt-2"><span class="fa fa-eye"></span></button>
                            </div>
                        </div>  

                        <div class="pictures-container col-lg-2 col-md-6 img-circle mt-lg-0 mt-2">
                            <img src="assets/images/trending2.jpg" class="d-none d-sm-block pictures-image mt-4 img-fluid radius-image-full img-gallery-laptop" alt="client image">
                            <img src="assets/images/trending2.jpg" class="d-xl-none pictures-image  d-md-none mt-4 img-fluid radius-image-full img-gallery-phone" alt="client image">
                            <div class="pictures-middle">
                                <button id="myBtn_third_picture" class="btn btn-dark w3-hover-white mt-2"><span class="fa fa-eye"></button>
                            </div>
                        </div>

                        <div class="pictures-container col-lg-2 col-md-6 img-circle mt-lg-0 mt-2">
                            <img src="assets/images/pic1.jpg" class="d-none d-sm-block pictures-image mt-4 img-fluid radius-image-full img-gallery-laptop" alt="client image">
                            <img src="assets/images/pic1.jpg" class="d-xl-none pictures-image mt-4  d-md-none img-fluid radius-image-full img-gallery-phone" alt="client image">
                            <div class="pictures-middle">
                                <button id="myBtn_fourth_picture" class="btn btn-dark w3-hover-white mt-2"><span class="fa fa-eye"></button>
                            </div>
                        </div>

                        <div class="pictures-container col-lg-2 col-md-12 img-circle mt-lg-0 mt-2">
                        </div>

                    </div><br>

                    <div class="mt-4">
                        <center><button style="border-radius: 5.25rem;" class="btn btn-style btn-primary">see more</button></center>
                    </div>
                </div> 
                
            </div>
        </div>
    </div>
    <!-- /main-slider -->
</section>


<div class="w3l-homeblock2 py-1">
    <div class="container bg-clr-white p-3">
        <a class="btn w3-text-white w3-text-hover-brown w3-hover-white" href="#url"><span style="font-size:25px" class="fa fa-coffee"></span></a>
        <a class="btn w3-text-blue w3-text-hover-brown w3-hover-white" href="#url"><span style="font-size:25px" class="fa fa-newspaper"></span></a> 
    </div>
</div>


<div class="w3l-homeblock2 py-5" style="margin-top:-1em">
    <div class="container py-lg-5 py-md-4">
        <!-- block -->
        <div class="row">
            <div class="col-lg-8">
                <h3 class="section-title-left mb-4"> Editor's Pick </h3>
                <div class="row">
                <div class="col-lg-6 col-md-6 mt-md-0 mt-sm-5 mt-4">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="#blog-single.html">
                                    <img class="card-img-bottom d-block radius-image-full"
                                        src="assets/images/image2.jpg" alt="Card image cap">
                                </a>
                            </div>
                            <div class="card-body blog-details">
                                <span class="label-blue">Fashion</span>
                                <a href="#blog-single.html" class="blog-desc">2 New outfit formulas to add to your
                                    Capsule Wardrobe
                                </a>
                                <p>Lorem ipsum dolor sit amet consectetur ipsum adipisicing elit. Quis
                                    vitae sit.</p>
                                <div class="author align-items-center mt-3 mb-1">
                                    <img src="assets/images/a2.jpg" alt="" class="img-fluid rounded-circle" />
                                    <ul class="blog-meta">
                                        <li>
                                            <a href="author.html">Charlotte mia</a> </a>
                                        </li>
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value"> July 13, 2020 </span>. <span
                                                class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 mt-md-0 mt-sm-5 mt-4">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="#blog-single.html">
                                    <img class="card-img-bottom d-block radius-image-full"
                                        src="assets/images/image2.jpg" alt="Card image cap">
                                </a>
                            </div>
                            <div class="card-body blog-details">
                                <span class="label-blue">Fashion</span>
                                <a href="#blog-single.html" class="blog-desc">2 New outfit formulas to add to your
                                    Capsule Wardrobe
                                </a>
                                <p>Lorem ipsum dolor sit amet consectetur ipsum adipisicing elit. Quis
                                    vitae sit.</p>
                                <div class="author align-items-center mt-3 mb-1">
                                    <img src="assets/images/a2.jpg" alt="" class="img-fluid rounded-circle" />
                                    <ul class="blog-meta">
                                        <li>
                                            <a href="author.html">Charlotte mia</a> </a>
                                        </li>
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value"> July 13, 2020 </span>. <span
                                                class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 left-right bg-clr-white p-3">
                    <h3 class="section-title-left align-self pl-2 mb-sm-0 mb-3 ">Skills and Hobbies:  <b><?php echo$num_of_hobbies; ?></b> </h3>
                    <button id="myBtn_skill" class="btn btn-style w3-black w3-hover-white mt-2"><span class="fa fa-plus"></span> Add Skill</button>
                </div>
            </div>
            <div class="col-lg-4 trending mt-lg-0 mt-5">
                <div class="topics">
                    <h3 class="section-title-left mb-4"> About Me</h3>
                    
                        <div class="list1">
                            <?php 
                                if($gender =="Male"){
                                    echo '
                                        <span class="fa fa-male"></span>
                                        <h4>'.$gender.'</h4>';
                                }elseif($gender =="Female"){
                                    echo '
                                    <span class="fa fa-female"></span>
                                    <h4>'.$gender.'</h4>';
                                }else{
                                    echo '
                                    <span class="fa fa-genderless"></span>
                                    <h4>Gender not set</h4>';
                                }
                            ?>
                        </div>
                    
                   
                        <div class="list1 topics-list mt-3">
                            
                            <?php
                            if($DoB != NULL){
                                $today = new DateTime(date('Y-m-d'));
                                $bday = new DateTime($DoB); // Persons Date of Birth     
                                $diff = $bday->diff($today);
                                

                                echo '<span class="fa fa-calendar"></span>
                                 <h4>'.$diff->format('%y').' years old</h4>
                                ';
                            }else{
                                echo '<span class="fa fa-calendar"></span>
                                 <h4>Birthday not Set</h4>';
                            }
                            ?>
                            
                        </div>

                        <div class="list1 topics-list mt-3">
                        <?php
                            if($residence != NULL){
                                echo '<span class="fa fa-home"></span>
                                 <h4>'.$residence.'</h4>
                                ';
                            }else{
                                echo '<span class="fa fa-home"></span>
                                 <h4>Residence not Set</h4>';
                            }
                            ?>
                        </div>
                   
                        <div class="list1 topics-list mt-3">
                        <span class="fa fa-graduation-cap"></span>
                        <?php
                            if($residence != NULL){
                                echo'
                                 <h4>'.$profession.'</h4>
                                ';
                            }else{
                                echo '
                                 <h4>Profession not Set</h4>';
                            }
                            ?>
                        </div>
                    
                </div>
                <div class="sponsers mt-5">
                    <h3 class="section-title-left mb-4"> My Cover</h3>
                    <img  src="usr_images/<?php echo $cover_img; ?>.jpg" alt="" class="cov-profile img-fluid radius-image-full" />
                   
                    <div class="mt-4">
                        <center>
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">           
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                        <a href="#advertise" class="ml-2 mt-4 text-center text-uppercase"> Click icon to switch-theme </a>
                        </center>
                    </div>                 
                         
			
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="w3l-homeblock2 w3l-homeblock5 py-5">
    <div class="container py-lg-5 py-md-4">
        <!-- block -->
        <div class="left-right">
            <h3 class="section-title-left mb-sm-4 mb-2"> Your Hobbies and Skill</h3>
            <a href="beauty.html" class="more btn btn-small mb-sm-0 mb-4">View more</a>
        </div>
        <div class="row">
        <?php
            if($num_of_hobbies == NULL){
                echo "
                <div class='col-lg-12 col-xs-12 mt-4'>
                <center><h4>You don't have any hobbies and skills set up</h4></center>
                </div>
                ";
            }else{
                $get_skills = mysqli_query($con,"SELECT * from user_hobbies WHERE userId='$userid' order by hobby_Id desc LIMIT 4");
                while($row=mysqli_fetch_array($get_skills)){
                $hobby_name = $row['hobby'];
                $hobby_img = $row['img'];
                $dtime = $row['dtime'];
                extract($row);
                
                echo '
                    <div class="col-lg-6 col-xs-12 mt-4">
                        <div class="bg-clr-white hover-box">
                            <div class="row">
                                <div class="col-sm-5 col-xs-12 position-relative">
                                    <a href="#blog-single.html" class="image-mobile">
                                        <center><img class="hobby-profile card-img-bottom d-block radius-image-full" src="usr_images/'.$email.'/hobbies/'.$hobby_img.'"
                                            alt="Hobby_image"></center>
                                    </a>
                                </div>
                                <div class="col-sm-7 col-xs-12 card-body blog-details align-self">
                                    <a href="#blog-single.html" class="blog-desc">'.$hobby_name.'
                                    </a>
                                    <div class="mt-1 align-items-center">
                                    <ul class="blog-meta ">
                                            
                                            <li class="mt-1 meta-item blog-lesson">
                                                <span class="fa fa-clock-o"></span>
                                                <span class="meta-value"> '.$dtime.' </span>. 
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
                }
            }
        ?>
            
        </div>
    </div>
</div>

<div class="w3l-homeblock3 py-5">
    <div class="container py-lg-5 py-md-4">
        <h3 class="section-title-left mb-4"> Top Pick's of this month </h3>
        <div class="row top-pics">
            <div class="col-lg-4 col-md-6">
                <div class="top-pic1">
                    <div class="card-body blog-details">
                        <a href="#blog-single.html" class="blog-desc">Fashion is
                            Creating your Beauty image. The New fashion starts here
                        </a>
                        <div class="author align-items-center">
                            <img src="assets/images/a1.jpg" alt="" class="img-fluid rounded-circle" />
                            <ul class="blog-meta">
                                <li>
                                    <a href="author.html">Isabella ava</a> </a>
                                </li>
                                <li class="meta-item blog-lesson">
                                    <span class="meta-value"> July 13, 2020 </span>. <span
                                        class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                <div class="top-pic2">
                    <div class="card-body blog-details">
                        <a href="#blog-single.html" class="blog-desc">The 5 Nonnegotiables of a Healthy Quarantine food that a Doctor Approved
                        </a>
                        <div class="author align-items-center">
                            <img src="assets/images/a2.jpg" alt="" class="img-fluid rounded-circle" />
                            <ul class="blog-meta">
                                <li>
                                    <a href="author.html">Charlotte mia</a> </a>
                                </li>
                                <li class="meta-item blog-lesson">
                                    <span class="meta-value"> July 13, 2020 </span>. <span
                                        class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                <div class="top-pic3">
                    <div class="card-body blog-details">
                        <a href="#blog-single.html" class="blog-desc"> Right food baked with natural ingredient, the use of best quality products
                        </a>
                        <div class="author align-items-center">
                            <img src="assets/images/a3.jpg" alt="" class="img-fluid rounded-circle" />
                            <ul class="blog-meta">
                                <li>
                                    <a href="author.html">Elizabeth</a> </a>
                                </li>
                                <li class="meta-item blog-lesson">
                                    <span class="meta-value"> July 13, 2020 </span>. <span
                                        class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="w3l-subscribe py-5">
    <div class="container py-lg-5 py-md-4">
        <div class="w3l-subscribe-content text-center bg-clr-white py-md-5 py-2">
            <div class="py-5">
                <h3 class="section-title-left mb-2">Subscribe to our newsletter!</h3>
                <p class="mb-md-5 mb-4">We'll send you the best of our blog just once a month. We promise. </p>
                <form action="#" method="GET" class="subscribe">
                    <input type="email" class="subscribe_input" name="search" placeholder="Email address" required="">
                    <button class="btn btn-style btn-primary">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "inc/footer.php"; ?>

</body>
</html>
