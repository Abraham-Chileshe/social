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

  <script src="../js/jquery.js"></script>
  <script src="advance_post/ckeditor.js"></script>
</head>
<body>
<?php include "inc/topnav.php"; ?>

<div class="w3l-homeblock2 w3l-homeblock5 py-5">
    <div class="container pt-md-4 pb-md-5">   
         <div class="container">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10 form-inner-cont">
                <h3 class="category-title mb-3"> Publish your Post <span class="fa fa-newspaper-o"></span></h3>
                <p class="mb-md-5 mb-4">Note that all the fields below are must be filled except the link which is optional</p>

                    <form method="post" class="signin-form">
                      <center><p id="warning">Write your Post</p></center>
                        <div class="mt-3 form-grids">
                            <div class="form-input">
                                <input type="text" name="Heading" placeholder="Heading/Title *"
                                    required="" />
                            </div>
                            <div >
                                <select style="height:60px" name="category" class="rounded w3-input">
                                  <option value="Technology and Science">Technology and Science</option>
                                  <option value="Languages">Languages</option>
                                <select>
                            </div>
                          
                        </div>
                        <div  class="mt-5" class="form-input">
                            <textarea name="Message" id="Message" style="height:14em"   placeholder="Write your post here"></textarea>
                        </div>
                        <script>
                          CKEDITOR.replace('Message');
                        </script>

                        <div class="text-right">
                            <button name="submit" class="btn btn-style btn-primary">Publish</button>
                            <a href="posts" class="btn btn-style w3-black w3-hover-white w3-hover-text-black">Back</a>
                        </div>
                    </form>
                </div>
                <div class="col-lg-1"></div>

            </div>
        </div>
      
    </div>
</div>

<?php 
  if(isset($_POST['submit'])){

    $heading = $_POST['Heading'];
    $category= $_POST['category'];
    $content = $_POST['Message'];
    $writer = $email;

    $get_post = mysqli_query($con,"SELECT * FROM posts");
    $row = mysqli_fetch_array($get_post);

    $d_heading = $row["heading"];
    $d_content = $row["content"];

    if($row != Null){

      if($d_heading == $heading and $d_content==$content){
        echo'
        <script>
          $(document).ready(function(){
            $("#warning").addClass("w3-text-orange");
            $("#warning").text("You have aready published this post");
            $("#warning").fadeIn(3000);
          });
        </script>';
      }else{
        include "inc/addpost.php";
      }
      
    }else{
      include "inc/addpost.php";
    }
   
  }
?>











<script>
	ClassicEditor
		.create( document.querySelector( '#Message' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
</script>







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