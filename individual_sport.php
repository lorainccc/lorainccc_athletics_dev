<?php
/**
 * Template Name: Individual Sports Template
 *
 * @package WordPress
 * @subpackage lorainccc
 * @since Lorainccc 1.0
 */
get_header(); ?>
<div class="grid-container">
<div class="grid-x grid-margin-x page-content">
		<div class="small-12 medium-12 large-12 cell nopadding show-for-small-only">
  <div class="grid-x grid-margin-x show-for-small-only sub-mobile-menu-row" style="background:#000;">
 <div class="small-2 cell" style="padding-top: 0.5rem;padding-left: 1.625rem;"> <span data-responsive-toggle="sub-responsive-menu" data-hide-for="medium">
      <button class="menu-icon" type="button" data-toggle></button>
      </span> </div>
    <div class="small-10 cell nopadding"><h3 class="sub-mobile-menu-header" style="color:#ffffff;"><?php single_post_title(); ?> Menu</h3></div>
  </div>
  <div id="sub-responsive-menu" class="show-for-small-only">
    <ul class="vertical menu" data-drilldown data-parent-link="true">

					<?php 	wp_nav_menu(array(
													'container' => false,
													'menu' => __( 'Drill Menu', 'textdomain' ),
													'menu_class' => 'vertical menu',
										'theme_location' => 'left-nav',
													'menu_id' => 'sub-mobile-primary-menu',
														//Recommend setting this to false, but if you need a fallback...
													'fallback_cb' => 'lc_drill_menu_fallback',
													'walker' => new lc_drill_menu_walker(),
												));
					?>

    </ul>
  </div>
</div>
<div class="small-12 medium-12 large-12 cell breadcrumb-container">
   <?php get_template_part( 'template-parts/content', 'breadcrumb' ); ?>
</div>
<div class="medium-4 large-4 cell hide-for-small-only">
	<div class="small-12 medium-12 large-12 cell sidebar-widget">
		<div class="small-12 medium-12 large-12 cell sidebar-menu-header">
		<h3><?php echo bloginfo('the-title'); ?></h3>
		</div>
	<?php	if ( has_nav_menu( 'left-nav' ) ) : ?>
	<div id="secondary" class="secondary">
		<?php if ( has_nav_menu( 'left-nav' ) ) : ?>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php
					// Primary navigation menu.
					wp_nav_menu( array(
						'menu_class'     => 'nav-menu',
						'theme_location' => 'left-nav',
					) );
				?>
			</nav><!-- .main-navigation -->
				<?php endif; ?>
		</div>
		<?php endif; ?>
	</div>
<div class="small-12 medium-12 large-12 cell">
											<?php if ( is_active_sidebar( 'lccc-events-sidebar' ) ) { ?>
																	<?php dynamic_sidebar( 'lccc-events-sidebar' ); ?>
												<?php } ?>
										</div>											<div class="small-12 medium-12 large-12 cell stocker-badges-container">
											<?php if ( is_active_sidebar( 'badges-sidebar' ) ) { ?>
																	<?php dynamic_sidebar( 'badges-sidebar' ); ?>
												<?php } ?>
										</div>

	</div>
	<div class="small-12 medium-8 large-8 cell">
        <div class="small-12 medium-12 large-12 cell pagecontainer">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>
			<?php
			$vsargs=array(
					'post_type' => 'page',
					'order'	=> 'ASC',
					'category_name' => 'varsity-sports'
					);
			?>
		</main><!-- #main -->
	</div><!-- #primary -->
        </div>
    <div class="small-12 medium-12 large-12 cell">
        <div class="small-12 medium-6 large-6 cell">
											<?php if ( is_active_sidebar( 'lccc-sub-announcements-sidebar' ) ) { ?>
																	<?php dynamic_sidebar( 'lccc-sub-announcements-sidebar' ); ?>
												<?php } ?>
								</div>
								<div class="small-12 medium-6 large-6 cell">
															<?php if ( is_active_sidebar( 'sub-events-sidebar' ) ) { ?>
																	<?php dynamic_sidebar( 'sub-events-sidebar' ); ?>
												<?php } ?>
								</div>
    </div>
</div>
		<div class="small-12 cell show-for-small-only">
<div class="small-12 medium-12 large-12 cell">
											<?php if ( is_active_sidebar( 'lccc-events-sidebar' ) ) { ?>
																	<?php dynamic_sidebar( 'lccc-events-sidebar' ); ?>
												<?php } ?>
										</div>											<div class="small-12 medium-12 large-12 cell stocker-badges-container">
											<?php if ( is_active_sidebar( 'badges-sidebar' ) ) { ?>
																	<?php dynamic_sidebar( 'badges-sidebar' ); ?>
												<?php } ?>
										</div>
	</div>
</div>
</div>
<?php get_footer(); ?>
