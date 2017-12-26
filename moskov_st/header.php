<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package moskov_st
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<div class="main-header">
			<div class="container">
				<div class="logo-box">
					<a href="#">
						<img src="<?php bloginfo("template_directory"); ?>/img/ms_logo.png" alt="">
						<h1>Московская столовка</h1>
						<p>Сеть уютных столовых с кулинарией в Москве</p>
					</a>
					<a href="#">
						<img src="<?php bloginfo("template_directory"); ?>/img/mk_logo1.png" alt="">
						<h1>Московское кафе</h1>
						<p>Сеть демократичных кафе в Москве</p>
					</a>
				</div>
				<div class="orders-box">
					<p>Заказы принимаются через:</p>
					<a href="#">
						<img src="<?php bloginfo("template_directory"); ?>/img/ms_icon-uber.png" alt="">
					</a>
					<a href="#">
						<img src="<?php bloginfo("template_directory"); ?>/img/ms_icon-delivery_club.png" alt="">
					</a>
				</div>
				<div class="icons-box">
					<a href="#">
						<img src="<?php bloginfo("template_directory"); ?>/img/ms_icon-appstore.png" alt="">
					</a>
					<a href="#">
						<img src="<?php bloginfo("template_directory"); ?>/img/ms_icon-googleplay.png" alt="">
					</a>
				</div>
			</div>
		</div>
		<div class="bottom-header">
			<div class="container">
				<p>
					Доставка готовых блюд и полуфабрикатов собственного производства по Москве и Московской области
				</p>
			</div>
		</div>
	</header>
