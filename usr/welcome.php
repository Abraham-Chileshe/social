<?php include "../db/session.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Website | Home</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="Author" content="Abraham Chileshe"/>
	<meta name="description" content="Online Programming Courses for Web developers" />
	<meta name="theme" content=""/>
	<meta name="keywords" charset="Online Programming Course, HTML, CSS, Python, Javascript, Jquery, C++"/>

    <link href="//fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

  <body>

<div class="w3l-subscribe py-5">
    <div class="container py-lg-5 py-md-4">
        <div class="w3l-subscribe-content text-center bg-clr-white py-md-5 py-2">
            <div class="">
                <div class="row">
                    <div class="py-5 col-lg-8">
                       <h3 class="section-title-left mb-2">Welcome <?php echo $username;?></h3>
                        <p class="mb-md-5 mt-2 mb-4 mr-5 ml-5">Hello!!! We are so glad that you have decided to join our community. Our community rules are very simply. All we ask from all our member is politely and also lend a helping hand to any queries than may be posed. </p>
                        <form action="#" method="GET" class="subscribe">
                            <input type="email" class="subscribe_input" name="search" placeholder="Email address" required="">
                            <button class="btn btn-style btn-primary">Subscribe</button>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div >
                                <div class="mr-3">
                                    <a href="#blog-single.html">
                                        <img class="card-img-bottom d-block radius-image-full"
                                            src="assets/images/image1.jpg" alt="Card image cap">
                                    </a>
                                </div>
                                <div class=" blog-details">
                                    <span class="label-blue">Your Profile Image</span><br/>
                                    <button title="proceed" class="mt-4 radius-full btn btn-style btn-success rounder"><span class="fa fa-chevron-right"></span></button>
                                    
                                   
                                    
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!-- Template JavaScript -->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<!-- theme changer js -->
<script src="assets/js/theme-change.js"></script>
<!-- //theme changer js -->

<!-- courses owlcarousel -->
<script src="assets/js/owl.carousel.js"></script>

<!-- script for testimonials -->
<script>
  $(document).ready(function () {
    $('.owl-testimonial').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script for testimonials -->

<!-- bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>