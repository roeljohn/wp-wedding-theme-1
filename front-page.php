<?php
/**
 * A front-page is a static homepage
 * Wordpress call this first instead of index.php or home.php
 * 
 * By default, WordPress sets your site’s home page to display your latest blog posts. This page
 * is called the blog posts index. You can also set your blog posts to display on a separate static
 * page. The template file home.php is used to render the blog posts index, whether it is being
 * used as the front page or on separate static page. If home.php does not exist, WordPress will
 * use index.php.
 * 
 * If front-page.php exists, it will override the home.php template
 * 
 * index.php last one to be called if home.php and front-page.php can find in wp
 */

get_header(); ?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('http://localhost/wp-playground/wp-content/uploads/2022/06/banner.jpg')">
  </header>
  <!-- Content Section -->
  <div class="container">
	  <div class="row p-5">
		<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
	  </div>
  </div>
  <!-- Gallery Section -->
  <div class="container gallery">
	<div class="row p-5">
		<div class="col">
			<div class="row">
			  <div class="col-6"><img src="img/gallery-6-demo.jpg"/></div>
			  <div class="col-6"><img src="img/gallery-6-demo.jpg"/></div>
			  <div class="col-12 pt-4"><img src="img/gallery-12-demo.jpg"/></div>
			</div>
		</div>
		<div class="col">
			<div class="row">
			  <div class="col-12 pb-4"><img src="img/gallery-12-demo.jpg"/></div>
			  <div class="col-6"><img src="img/gallery-6-demo.jpg"/></div>
			  <div class="col-6"><img src="img/gallery-6-demo.jpg"/></div>
			</div>
		</div>
	</div>
  </div>
  <!-- Subscribe Section -->
  <div class="container-fluid subscribe brand-color-blue py-4">
	<div class="container">
		<div class="row p-3">
			<img class="mx-auto d-block" src="img/logo-white.png"/>	
		</div>
		<p class="text-center text-white p-3" >WEDDING WEBSITE 2020</p>
		<form class="form-inline p-3 justify-content-center">
			<input type="email" class="form-control mr-3" id="email" placeholder="Enter email" name="email">
			<button type="submit" class="btn btn-outline-light">Sign Up</button>
		</form>
		<div class="d-flex justify-content-center">
			<div class="p-2">
				<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-youtube"></i></a>
				<a href="#"><i class="fab fa-snapchat-ghost"></i></a>
			</div>
		</div>
	</div>
  </div>

<?php get_footer();