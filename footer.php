<?php
/**
 * Similarly, footer.php in a file in the WordPress page hierarchy is used to build 
 * the footer section of a WordPress theme and called in the footer section of all the template files. 
 * The footer.php generally contains the copyright information, calls to JS files, widget areas that 
 * commonly have site navigation.
 */

?>

  <!-- Footer Section -->
  <div class="container-fluid footer brand-color-dark-blue">
	<div class="container p-3">
		<div class="d-flex justify-content-center">
			<p class="text-white">COPYRIGHT © 2019</p>
		</div>
	</div>
  </div>
  <?php wp_footer(); ?>
</body>
</html>