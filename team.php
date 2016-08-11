<?php
/**
 * Template Name: Team Template
 *
 * @package WordPress
 * @subpackage lorainccc
 * @since Lorainccc 1.0
 */

get_header(); ?>
<div class="row page-content">
<div class="small-12 medium-12 large-12 columns breadcrumb-container">
   <?php get_template_part( 'template-parts/content', 'breadcrumb' ); ?>
</div>
<div class="medium-4 large-4 columns hide-for-small-only">
	<div class="small-12 medium-12 large-12 columns sidebar-widget">
		<div class="small-12 medium-12 large-12 columns sidebar-menu-header">
		<h3>SIDEBAR MENU</h3>
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
			<?php if ( is_active_sidebar( 'stocker-page-events-sidebar' ) ) { ?>
							<?php dynamic_sidebar( 'stocker-page-events-sidebar' ); ?>
				<?php } ?>
	</div>
	</div>
	<div class="small-12 medium-8 large-8 columns">		
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>	
		<div class="small-12 columns show-for-small-only">
				<?php if ( is_active_sidebar( 'stocker-page-events-sidebar' ) ) { ?>
							<?php dynamic_sidebar( 'stocker-page-events-sidebar' ); ?>
				<?php } ?>
	</div>
</div>
<?php get_footer(); ?>

