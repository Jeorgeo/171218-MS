<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package moskov_st
 */

?>

<footer>
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
</footer>

<?php wp_footer(); ?>

</body>
</html>
