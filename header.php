<?php
/**
 * The header.php contains the head section of a WordPress site, and it is commonly called at the start 
 * of all the template files. It usually contains the header information, analytics, calls to CSS files, 
 * site navigation, page titles, site logo, etc.
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/ecbaed83fe.js"></script>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
  if ( is_front_page() ){
    get_template_part( 'template-parts/nav/nav-home' );
  } else {
    get_template_part( 'template-parts/nav/nav-page' );
  }
?>