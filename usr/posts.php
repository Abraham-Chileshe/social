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
    <link rel="stylesheet" href="../css/w3.css">
</head>

  <body>
<!-- header -->
<?php include "inc/topnav.php"; ?>
<!-- //header -->
<div class="w3l-homeblock2 w3l-homeblock5 py-5">
    <div class="container pt-md-4 pb-md-5">
        <!-- block -->
        <h3 class="category-title mb-3"> Public Posts <span class="fa fa-newspaper-o"></span></h3>
        <a href="publish.php" class="w3-btn w3-indigo mt-1 rounded pl-4 pr-4 pt-2 pb-2" title="Create your Post"><span class="fa fa-edit"></span></a>
        <a href="" class="w3-btn w3-orange mt-1 w3-text-white rounded pl-4 pr-4 pt-2 pb-2"><span class="fa fa-star"></span></a>
        <a href="" class="w3-btn w3-black mt-1 w3-text-white rounded pl-4 pr-4 pt-2 pb-2">Technology & Science</a>
        <a href="" class="w3-btn w3-black mt-1 w3-text-white rounded pl-4 pr-4 pt-2 pb-2">Languages</a>


        
        <div class="row container">
            <div class="col-lg-1 mt-lg-0"></div>
            <div class="col-lg-10 mt-lg-0 mt-4">
            <center><p class="mt-5 text-center mb-sm-5 mb-2 max-width">All Public Posts</p></center>
                
                    <?php
                        $get = mysqli_query($con,"SELECT heading,content,name,writer FROM posts");
                        while($rows = mysqli_fetch_array($get)){
                        
                        extract($rows);

                        echo '
                        <div class="bg-clr-white mt-3 hover-box">
                        <div class="col-sm-12 container card-body blog-details ">
                            <a href="#blog-single.html" class="blog-desc">'.$heading.'
                            </a><br/>
                            <a href="#blog-single.html" class=""><u></u>
                            </a>
                            <p class="mt-3">';
                            
                            if(strlen($content > 25)){
                                echo "exeded";
                            }else{

                                echo  '<div class="text-truncate">'.$content.'</div>';
                            }
                            
                          
                            
                            echo '</p>
                            <div class="author align-items-center">
                                <img src="assets/images/a3.jpg" alt="" class="img-fluid rounded-circle">
                                <ul class="blog-meta">
                                    <li>
                                        <a href="author.html">'.$name.'</a> 
                                    </li>
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> July 13, 2020 </span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                    </li>
                                </ul>
                            </div>
                         
                        </div>
                       
                  

                    <div class="text-right mr-4">
                          
                    <a href="" class="pl-2 pr-2 round w3-hover-text-orange"><span class="fa fa-star-o"></span></a>
                    <a href="" class="pl-2 pr-2  round w3-hover-text-purple"><span class="fa fa-chain-broken"></span></a>
                    <a href="" class="pl-2 pr-2  round w3-hover-text-green"><span class="fa fa-comment-o"></span></a>
                    <a href="" class="pl-2 pr-2   round w3-hover-text-silver"><span class="fa fa-save"></span></a><br/>
          
                      
                      
                   </div><br/>
                   </div>
                        ';

                        }
                    ?>

                    
                  
                
                
            </div>
            <div class="col-lg-1 mt-lg-0"></div>
        </div>
        <ul class="site-pagination text-center mt-md-5 mt-4">
            <li><span aria-current="page" class="page-numbers current">1</span></li>
            <li><a class="page-numbers" href="#page2">2</a></li>
            <li><a class="page-numbers" href="#page3">3</a></li>
            <li><span class="page-numbers dots">…</span></li>
            <li><a class="page-numbers" href="#page7">7</a></li>
            <li><a class="next page-numbers" href="#next">Next »</a></li>
        </ul>
    </div>
</div>
<!-- footer-28 block -->
<section class="app-footer">
  <footer class="footer-28 py-5">
    <div class="footer-bg-layer">
      <div class="container py-lg-3">
        <div class="row footer-top-28">
          <div class="col-lg-4 footer-list-28 copy-right mb-lg-0 mb-sm-5 mt-sm-0 mt-4">
            <a class="navbar-brand mb-3" href="index.html">
              <span class="fa fa-newspaper-o"></span> NewsBlog</a>
            <p class="copy-footer-28"> © 2020. All Rights Reserved. </p>
            <h5 class="mt-2">Design by <a href="https://w3layouts.com/">W3Layouts</a></h5>
          </div>
          <div class="col-lg-8 row">
            <div class="col-sm-4 col-6 footer-list-28">
              <h6 class="footer-title-28">Useful links</h6>
              <ul>
                <li><a href="#categories">food blogs</a></li>
                <li><a href="#advertise">Advertise with us</a></li>
                <li><a href="#authors">Our Authors</a></li>
                <li><a href="contact.html">Get in touch</a></li>
              </ul>
            </div>
            <div class="col-sm-4 col-6 footer-list-28">
              <h6 class="footer-title-28">Categories</h6>
              <ul>
                <li><a href="beauty.html">Beauty</a></li>
                <li><a href="fashion.html">Fashion and Style</a></li>
                <li><a href="#food"> Food and Wellness</a></li>
                <li><a href="#lifestyle">Lifestyle</a></li>
              </ul>
            </div>
            <div class="col-sm-4 col-6 footer-list-28 mt-sm-0 mt-4">
              <h6 class="footer-title-28">Social Media</h6>
              <ul class="social-icons">
                <li class="facebook">
                  <a href="#facebook"><span class="fa fa-facebook"></span> Facebook</a></li>
                <li class="twitter"> <a href="#twitter"><span class="fa fa-twitter"></span> Twitter</a></li>
                <li class="linkedin"> <a href="#linkedin"><span class="fa fa-linkedin"></span> Linkedin</a></li>
                <li class="dribbble"><a href="#dribbble"><span class="fa fa-dribbble"></span> Dribbble</a></li>
              </ul>

            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </footer>

  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-angle-up"></span>
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->
</section>
<!-- //footer-28 block -->

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