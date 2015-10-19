<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package materialwp
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
window.setInterval(function(){
  $('.ko-calendar-entry-title').each(function() {
    $(this).text($(this).text().replace('IEEE: ', ''));
  });
}, 500);

$(function() {
  $('.card iframe').each(function() {
    $(this).css('background-color', '#1565C0');
    $(this).after('<button class="show">Load Slideshow...</button>');
  });
  $('button.show').click(function() {
    var iframe = $(this).parent().find('iframe');
    iframe.attr('src', iframe.data('src'));
    $(this).remove();
  });
});
</script>
<style>
  button.show {
    margin: 0 auto;
    border: 1px solid #1565C0;
    color: #1565C0;
    background-color: #FFF;
    border-radius: 5px;
    transition: 0.35s all ease-in-out;
  }

  button.show:hover {
    border: 1px solid #90CAF9;
    color: #90CAF9;
  }
</style>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'materialwp' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<nav class="navbar navbar-inverse" role="navigation">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>

			<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
    		</div>

    			<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">
				 <?php
		            wp_nav_menu( array(
		                'theme_location'    => 'primary',
		                'depth'             => 2,
		                'container'         => false,
		                'menu_class'        => 'nav navbar-nav navbar-left',
		                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		                'walker'            => new wp_bootstrap_navwalker())
		            );
	        	?>

        		</div> <!-- .navbar-collapse -->
        	</div><!-- /.container -->
		</nav><!-- .navbar .navbar-default -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
