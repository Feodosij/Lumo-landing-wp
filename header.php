<?php
/**
 * The header for Lumo theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'sandbox' ); ?></a>

	<header class="site-header">
		<div class="site-header__logo">
			<?php
				if (function_exists('the_custom_logo')) {
					the_custom_logo();
				}
			?>
		</div>

		<nav class="site-menu site-menu--header" id="menu">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'main_menu',
						'menu_id'        => 'header-menu',
						'container'      => 'false',
						'menu_class'     => 'site-menu__list',
					)
				);
			?>

			<a href="#" class="book-button mobile-book book-button--primary">book your seat</a>
		</nav>

		<a href="#" class="book-button book-button--primary">book your seat</a>

		<div class="burger" id="burger">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</header>


