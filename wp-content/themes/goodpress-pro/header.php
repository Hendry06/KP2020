<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package goodpress
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="HandheldFriendly" content="true">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if (get_theme_mod('favicon', '') != null) { ?>
<link rel="icon" type="image/png" href="<?php echo esc_url( get_theme_mod('favicon', '') ); ?>" />
<?php } ?>
<?php wp_head(); ?>

<?php
  
	// Primary Font
	$setting = 'primary-font';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	$stack = customizer_library_get_font_stack( $mod );

	if ( $mod != customizer_library_get_default( $setting ) ) {

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.primary'
			),
			'declarations' => array(
				'font-family' => $stack
			)
		) );

	}

	// Secondary Font
	$setting2 = 'secondary-font';
	$mod2 = get_theme_mod( $setting2, customizer_library_get_default( $setting2 ) );
	$stack2 = customizer_library_get_font_stack( $mod2 );

	if ( $mod2 != customizer_library_get_default( $setting2 ) ) {

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.secondary'
			),
			'declarations' => array(
				'font-family' => $stack2
			)
		) );

	}

	// Menu Font
	$setting3 = 'tertiary-font';
	$mod3 = get_theme_mod( $setting3, customizer_library_get_default( $setting3 ) );
	$stack3 = customizer_library_get_font_stack( $mod3 );

	if ( $mod3 != customizer_library_get_default( $setting3 ) ) {

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.tertiary'
			),
			'declarations' => array(
				'font-family' => $stack3
			)
		) );

	}	

	// Theme Color
	$primary_color = get_theme_mod('primary-color', '#cc0000');	

?>
<style type="text/css" media="all">
	body,
	.breadcrumbs h3,
	.section-header h3,
	label,
	input,
	input[type="text"],
	input[type="email"],
	input[type="url"],
	input[type="search"],
	input[type="password"],
	textarea,
	button,
	.btn,
	input[type="submit"],
	input[type="reset"],
	input[type="button"],
	table,
	.sidebar .widget_ad .widget-title,
	.site-footer .widget_ad .widget-title {
		font-family: "<?php echo $mod; ?>", "Helvetica Neue", Helvetica, Arial, sans-serif;
	}
	h1,h2,h3,h4,h5,h6,
	.navigation a {
		font-family: "<?php echo $mod2; ?>", "Helvetica Neue", Helvetica, Arial, sans-serif;
	}
	#primary-menu li a,
	#secondary-menu li a,
	.content-block .section-heading h3,
	.sidebar .widget .widget-title,
	.site-footer .widget .widget-title,
	.carousel-content .section-heading,
	.breadcrumbs h3,
	.page-title,
	.entry-category,
	#site-bottom,
	.ajax-loader,
	.entry-summary span a,
	.pagination .page-numbers,
	.navigation span,
	button,
	.btn,
	input[type="submit"],
	input[type="reset"],
	input[type="button"] {
		font-family: "<?php echo $mod3; ?>", "Helvetica Neue", Helvetica, Arial, sans-serif;
	}
	a,
	a:visited,
	.sf-menu ul li li a:hover,
	.sf-menu li.sfHover li a:hover,
	#primary-menu li li a:hover,
	#primary-menu li li.current-menu-item a:hover,
	#secondary-menu li li a:hover,
	.entry-meta a,
	.edit-link a,
	.comment-reply-title small a:hover,
	.entry-content a,
	.entry-content a:visited,
	.page-content a,
	.page-content a:visited,
	.pagination .page-numbers.current,
	a:hover,
	.site-title a:hover,
	.mobile-menu ul li a:hover,
	.pagination .page-numbers:hover,	
	.sidebar .widget a:hover,
	.site-footer .widget a:hover,
	.sidebar .widget ul li a:hover,
	.site-footer .widget ul li a:hover,
	.entry-related .hentry .entry-title a:hover,
	.author-box .author-name span a:hover,
	.entry-tags .tag-links a:hover:before,
	.entry-title a:hover,
	.page-content ul li:before,
	.entry-content ul li:before,
	.content-loop .entry-summary span a:hover,
	.single .navigation a:hover {
		color: <?php echo $primary_color; ?>;
	}
	.mobile-menu-icon .menu-icon-close,
	.mobile-menu-icon .menu-icon-open,
	.widget_newsletter form input[type="submit"],
	.widget_newsletter form input[type="button"],
	.widget_newsletter form button,
	.more-button a,
	.more-button a:hover,
	.entry-header .entry-category-icon a,
	button,
	.btn,
	input[type="submit"],
	input[type="reset"],
	input[type="button"],
	button:hover,
	.btn:hover,
	input[type="reset"]:hover,
	input[type="submit"]:hover,
	input[type="button"]:hover,
	.content-loop .entry-header .entry-category-icon a,
	.entry-tags .tag-links a:hover,
	.widget_tag_cloud .tagcloud a:hover,
	#featured-content .hentry:hover .entry-category a,
	.content-block .section-heading h3 a,
	.content-block .section-heading h3 a:hover,
	.content-block .section-heading h3 span,
	.carousel-content .section-heading,
	.breadcrumbs .breadcrumbs-nav a:hover,
	.breadcrumbs .breadcrumbs-nav a:hover:after {
		background-color: <?php echo $primary_color; ?>;
	}
	.entry-tags .tag-links a:hover:after,
	.widget_tag_cloud .tagcloud a:hover:after {
		border-left-color: <?php echo $primary_color; ?>;
	}
	/* WooCommerce Colors */
	.woocommerce #respond input#submit,
	.woocommerce a.button,
	.woocommerce button.button,
	.woocommerce input.button {
		font-family: "<?php echo $mod3; ?>", "Helvetica Neue", Helvetica, Arial, sans-serif;		
	}
	.woocommerce #respond input#submit.alt:hover,
	.woocommerce a.button.alt:hover,
	.woocommerce button.button.alt:hover,
	.woocommerce input.button.alt:hover,
	.woocommerce #respond input#submit:hover,
	.woocommerce a.button:hover,
	.woocommerce button.button:hover,
	.woocommerce input.button:hover,
	.woocommerce a.button.checkout-button,
	.woocommerce nav.woocommerce-pagination ul li:hover  {
		background-color: <?php echo $primary_color; ?>;
	}
	body.woocommerce-account .woocommerce-MyAccount-navigation ul li a:hover,
	.woocommerce nav.woocommerce-pagination ul li span.current,
	.woocommerce ul.products li.product:hover .woocommerce-loop-product__title { 
		color: <?php echo $primary_color; ?>;
	}

</style>
</head>

<body <?php body_class(); ?>>

<?php //if (is_front_page()) { do_action('goodpress_before_site'); } //Hooked: goodpress_preloader() ?>

<div id="page" class="site">

	<header id="masthead" class="site-header clear">

		<div id="primary-bar">

			<div class="container">

			<nav id="primary-nav" class="main-navigation">

				<?php 
					if ( has_nav_menu( 'primary' ) ) {
						wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'sf-menu' ) );
					} else {
				?>

					<ul id="primary-menu" class="sf-menu">
						<li><a href="<?php echo home_url(); ?>/wp-admin/nav-menus.php"><?php echo __('Add menu for: Primary Menu', 'goodpress-pro'); ?></a></li>
					</ul><!-- .sf-menu -->

				<?php } ?>

			</nav><!-- #primary-nav -->	

			<?php if ( get_theme_mod('header-search-on', true) ) : ?>

				<div class="header-search <?php if ( class_exists('WooCommerce') && (get_theme_mod('cart-menu-on', true) == true) ) { echo "has-shop"; } ?>">
					<form id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<input type="search" name="s" class="search-input" placeholder="<?php esc_html_e('Search...', 'goodpress-pro'); ?>" autocomplete="off">
						<button type="submit" class="search-submit"><span class="genericon genericon-search"></span></button>		
					</form>
				</div><!-- .header-search -->

			<?php endif; ?>

			</div><!-- .container -->

		</div><!-- #primary-bar -->	

		<div class="site-start clear">

			<div class="container">

			<div class="site-branding">

				<?php if (get_theme_mod('logo', get_template_directory_uri().'/assets/img/logo.png') != null) { ?>
				
				<div id="logo">
					<span class="helper"></span>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo get_theme_mod('logo', get_template_directory_uri().'/assets/img/logo.png'); ?>" alt=""/>
					</a>
				</div><!-- #logo -->

				<?php } else { ?>

				<div class="site-title">
					<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
				</div><!-- .site-title -->
				
				<div class="site-description">
					<?php  echo get_bloginfo( 'description' ); ?>
				</div><!-- .site-description -->				

				<?php } ?>

			</div><!-- .site-branding -->

			<?php dynamic_sidebar( 'header-ad' ); ?>

			<span class="mobile-menu-icon">
				<span class="menu-icon-open"><?php echo __('Menu', 'goodpress-pro'); ?></span>
				<span class="menu-icon-close"><span class="genericon genericon-close"></span></span>		
			</span>	
			
			</div><!-- .container -->

		</div><!-- .site-start -->

		<div id="secondary-bar" class="clear">

			<div class="container">

			<nav id="secondary-nav" class="secondary-navigation">

				<?php 
					if ( has_nav_menu( 'secondary' ) ) {
						wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu', 'menu_class' => 'sf-menu' ) );
					} else {
				?>

					<ul id="secondary-menu" class="sf-menu">
						<li><a href="<?php echo home_url(); ?>/wp-admin/nav-menus.php"><?php echo __('Add menu for: Secondary Menu', 'goodpress-pro'); ?></a></li>
					</ul><!-- .sf-menu -->

				<?php } ?>

			</nav><!-- #secondary-nav -->

			</div><!-- .container -->				

		</div><!-- .secondary-bar -->

		<div class="mobile-menu clear">

			<div class="container">

			<?php 

				if ( has_nav_menu( 'primary' ) ) {

					echo '<div class="menu-left">';
					echo '<h3>' . get_theme_mod('primary-nav-heading', __('Pages', 'goodpress-pro')) . '</h3>';

					wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-mobile-menu', 'menu_class' => '', 'depth' => 1 ) );

					echo "</div>";

				}

				if ( has_nav_menu( 'secondary' ) ) {

					echo '<div class="menu-right">';
					echo '<h3>' . get_theme_mod('secondary-nav-heading', __('Categories', 'goodpress-pro')) . '</h3>';

					wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-mobile-menu', 'menu_class' => '', 'depth' => 1 ) );

					echo "</div>";

				}

			?>

			</div><!-- .container -->

		</div><!-- .mobile-menu -->	

		<?php if ( get_theme_mod('header-search-on', true) ) : ?>
			
			<span class="search-icon">
				<span class="genericon genericon-search"></span>
				<span class="genericon genericon-close"></span>			
			</span>

		<?php endif; ?>						

	</header><!-- #masthead -->

	<?php
		if(is_home()) {
			get_template_part('template-parts/content','featured');
		}
	?>
	<div id="content" class="site-content container">
		<div class="clear">
