<?php
/**
 * Version    : 1.2.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : August 30, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head prefix="og: http://ogp.me/ns# <?php echo ( is_single() || is_page() ) ? 'fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#' : 'fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#' ?>">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" />

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php do_action( 'habakiri_before_container' ); ?>
<div id="container">
	<?php
	$header_classes     = Habakiri::get_header_classses();
	$site_branding_size = Habakiri::get_site_branding_size();
	$gnav_size          = Habakiri::get_gnav_size();
	?>
	<header id="header" class="header <?php echo esc_attr( implode( ' ', $header_classes ) ); ?>">
		<?php do_action( 'habakiri_before_header_content' ); ?>
		<div class="container">
			<div class="row header__content">
				<div class="col-xs-10 <?php echo esc_attr( $site_branding_size ); ?> header__col">
				<div class="main-logo">
				<?php
					the_custom_logo();
					if (!has_custom_logo()) {
						echo '<a href="'. home_url( '/' ) .'" rel="home">'. get_bloginfo( 'name' ) .'</a>'; 
					}
					?>
					<!-- <?php // get_template_part( 'modules/site-branding' ); ?> -->
				<!-- end .header__col --></div>
				</div>
				<div class="col-xs-2 <?php echo esc_attr( $gnav_size ); ?> header__col global-nav-wrapper clearfix">
					<?php get_template_part( 'modules/gnav' ); ?>
					<div id="responsive-btn"></div>
				<!-- end .header__col --></div>
			<!-- end .row --></div>
		<!-- end .container --></div>
		<?php do_action( 'habakiri_after_header_content' ); ?>
	<!-- end #header --></header>
	<div id="contents">
		<?php do_action( 'habakiri_before_contents_content' ); ?>
		<?php if(is_front_page() ): ?>
			<div class="mov-top" playsinline=1 autoplay=1><div class="pattern"><?php the_custom_header_markup(); ?></div></div>
		<?php endif; ?>
		

		<!-- <div class="header-mov-container">	 -->
			<!-- <div class="header-mov"><?php //the_custom_header_markup(); ?></div> -->
		<!-- </div> -->
