<?php
/**
  * Template Name: Главная
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package moskov_st
 */

get_header();

$news = get_posts(
		array(
				'numberposts' => 100,
				'offset' => 0,
				'orderby'     => 'date',
				'order'       => 'DESC',
				'category' => '',
				'include' => '',
				'exclude' => '',
				'meta_key' => '',
				'meta_value' => '',
				'post_type' => 'portfolio',
				'post_parent' => '',
				'post_status' => 'publish'
		)
);?>

<main>
	<section class="shop-section">
		<div class="container">
			<aside class="shop-categories">
				<nav>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
					?>
				</nav>
			</aside>
			<div class="cards-container">
				<div class="breadcrumbs">
					<a href="#">Популярное</a>
				</div>
					<?php the_post(); ?>
					<?php the_content(); ?>
			</div>
		</div>
	</section>
	<section class="main-map">
		<div class="container">
			<div class="text-box">
				<div class="text-box_title">
					<p>
						Приглашаем Вас посетить одно из наших заведений
					</p>
				</div>
				<div class="text-box_content">
					<p>
						<!--Для того чтобы между нами не возникало недопонимания, подробно узнайте у оператора возможные ограничения и сообщите точное количество человек, чтобы мы могли доставить необходимое количество палочек.!-->
					</p>
				</div>
			</div>
		</div>
		<div class="yandex-map">
			<div id="map"></div>

			<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    	<script src="<?php bloginfo("template_directory"); ?>/js/icon_customImage.js" type="text/javascript"></script>

		</div>
	</section>
	<section class="main-advantages">
		<div class="container">
			<div class="main-advantages_title">
				<p>
					Откройте свой бизнес с выгодной франшизой "Московская Столовка"
				</p>
			</div>
			<div class="main-advantages_list">
				<figure>
					<h3>
						<span class="color-text">9 причин</span>
						<span>по которым нам доверяют наши клиенты</span>
					</h3>
					<img src="<?php bloginfo("template_directory"); ?>/img/ms_logo-a.png" alt="">
				</figure>
				<div class="list-rows">
					<ul>
						<li><span class="list_text">Работа под известным брендом</span></li>
						<li><span class="list_text">Уникальный товар импульсного спроса</span></li>
						<li><span class="list_text">Минимальные инвестиции</span></li>
						<li><span class="list_text">Быстрый запуск</span></li>
						<li><span class="list_text">Специальные условия закупки товара</span></li>
					</ul>
					<ul>
						<li><span class="list_text">Помощь в поиске места и переговорах с арендодателями</span></li>
						<li><span class="list_text">Открытие неограниченного количества точек на согласованной территории</span></li>
						<li><span class="list_text">Персональный менеджер по всем вопросам ведения бизнеса</span></li>
						<li><span class="list_text">Отсутствие маркетинговых взносов и скрытых платежей</span></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="main-examples">
		<div class="container">
			<h3>
				Примеры открытых заведений
			</h3>
			<div class="slider">
				<div class="slider-box">
					<?php
						foreach ($news as $obj) {
							if($obj->post_name == 'archive') {
									continue;
							}
					 ?>
					<div class="slide">
						<figure class="layer-bottom">
							<p class="slide_adress"> <span class="top-line"></span><?php echo get_field('adress',$obj->ID); ?></p>
							<a href="#"><img src="<?php echo get_field('image_b',$obj->ID); ?>"></a>
							<p class="slide_text">Было</p>
						</figure>
						<figure class="layer-top">
							<p class="slide_text">Стало</p>
							<a href="#"><img src="<?php echo get_field('image_s',$obj->ID); ?>"></a>

							<div class="slide_btn">
								<span class="top-line"></span>
								<a class="follow_button" href="#form">Открыть свой бизнес</a>
							</div>
						</figure>
					</div>
					<?php
		 				}
		 			 ?>
				</div>
			</div>
		</div>
	</section>
	<section class="main-order">
		<div class="container">
			<form class="main-form" method="post">
				<span id="form"></span>
				<h3>
					Оставьте заявку и получите специальные условия по франшизе
				</h3>
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="mos.ru">
				<!--<?php dynamic_sidebar( 'admin_mail' ); ?>!-->
				<input type="hidden" name="form_subject" value="Заявка">
				<!--<input type="hidden" name="admin_mail" value="yu.sh.2583@gmail.com">!-->
				<!-- END Hidden Required Fields -->

				<input id="name" class="main-form__name" type="text" name="name"
				value="" placeholder="Ваше имя" required>
				<input id="phone" class="main-form__phone" type="text" name="phone"
				value="" placeholder="Ваш телефон" required>
				<input id="mail"  class="main-form__mail" type="text" name="mail"
				value="" placeholder="Ваш e-mail" required
				pattern="^([A-Za-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})">
				<button id="submit" class="button cloud-form__submit" type="submit" name="submit">
					<span class="text">Узнать</span>
				</button>
				<input id="сonsent-r" class="cloud-form__сonsent" type="checkbox" name="сonsent" value="" required checked>
				<label class="cloud-form__сonsent" for="сonsent-r">
					Согласие на обработку персональных данных
				</label>
			</form>
		</div>
	</section>

</main>

<?php
get_footer();
