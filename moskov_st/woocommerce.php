<?php
/**
 * The template for displaying woocommerce archive pages.
 *
 * @package WordPress
 * @subpackage moskov_st
 * @since moskov_st
 */
get_header();

global $woocommerce_loop;
$stainedglass_columns = 3;

if ( ! empty( $woocommerce_loop['columns'] ) )
	$stainedglass_columns = apply_filters( 'loop_shop_columns', 3 );
if ( is_singular() )
	$stainedglass_columns = 0;
?>
</header>

<main class="woocommerce">
	<section class="shop-section">
		<div class="main-wrapper woo-shop full-width flex-layout-<?php echo esc_attr( $stainedglass_columns ); ?>">
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
						<?php woocommerce_breadcrumb(); ?>
					</div>
					<?php if ( is_singular() ) : ?>
					<div class="content-container">
					<?php endif; ?>

							<?php woocommerce_content(); ?>
							<?php do_action( 'stainedglass_after_content' ); ?>

					<?php if ( is_singular() ) : ?>
					</div><!-- .content-container -->
					<?php endif; ?>

				</div><!-- .content -->
				<div class="clear"></div>
			</div><!-- .site-content -->

		</div> <!-- .main-wrapper.woo-shop -->

	</section>
</main>



<?php
get_footer();
