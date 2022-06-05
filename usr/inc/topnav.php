<header class="w3l-header">
	<div class="container">
	<!--/nav-->
	<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-sm-3 px-0">
        <a class="navbar-brand" href="index.php">
			Logo Here
		</a> 
		<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="icon-expand navbar-toggler-icon"></span>
				<span class="fa icon-close fa-times"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<nav class="mx-auto">
				<div class="search-bar">
					<form class="search">
						<input type="search" class="search__input" name="search" placeholder="Discover posts, people, videos etc." onload="equalWidth()" required>
						<span class="fa fa-search search__icon"></span>
					</form>
				</div>
			</nav>
			<ul class="navbar-nav">
				

				<li class="nav-item">
					<a class="nav-link " href="#">
						<span class="fa fa-bell d-none d-md-block" style="font-size:20px; margin-top:1.7px"></span>
						<h5 class="d-none d-sm-block d-md-none d-block d-sm-none">Notifications</h5>
						
					</a>
				</li>

					<li class="nav-item dropdown @@pages__active">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<h5 class="d-none d-sm-block d-md-none d-block d-sm-none">More</h5>
							<span class="fa fa-circle d-none d-md-block mt-1"  style="font-size:22px"></span>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item @@b__active" href="beauty.html">Beauty</a>
                            <a class="dropdown-item @@fa__active" href="fashion.html">Messages</a>
                            <a class="dropdown-item @@contact__active" href=""></a>
						</div>
					</li>

					<li class="nav-item dropdown @@pages__active">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<h5 class="d-none d-sm-block d-md-none d-block d-sm-none"><?php echo $username; ?></h5>
							<img src="usr_images/<?php echo $profile_img; ?>.jpg" alt="" style="height:25px; width:25px;  object-fit: cover;" class="d-none d-md-block img-fluid rounded-circle" />
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item @@b__active" href="my_profile.php">Profile</a>
                            <a class="dropdown-item @@fa__active" href="fashion.html">Fashion & Style</a>
                            <a class="dropdown-item @@contact__active" href="inc/logout.php">Logout</a>
						</div>
					</li>
				</ul>
			</div>
			
		</div>
	</nav>
	<!--//nav-->
</header>