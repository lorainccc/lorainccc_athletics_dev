<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package LCCC Framework
 */
get_header(); ?>
<div class="grid-container">
<div class="grid-x grid-margin-x page-content">
<div class="small-12 medium-12 large-12 cell breadcrumb-container">
   <?php get_template_part( 'template-parts/content', 'breadcrumb' ); ?>
</div>
<div class="medium-4 large-4 cell hide-for-small-only">
	<div class="small-12 medium-12 large-12 cell sidebar-widget">
		<div class="small-12 medium-12 large-12 cell sidebar-menu-header">
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
			<?php if ( is_active_sidebar( 'lccc-announcements-sidebar' ) ) { ?>
							<?php dynamic_sidebar( 'lccc-announcements-sidebar' ); ?>
				<?php } ?>
	</div>
	</div>
	<div class="small-12 medium-8 large-8 cell">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
				<header class="page-header">
				<h1 class="page-title"> Events</h1>
				<?php
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<?php
			$eventlistargs=array(
			'post_type' => 'page',
					'post_status' => 'publish',
				'name' => 'events-list',
			);
			$eventsdescrip = new WP_Query($eventlistargs);
					if ( $eventsdescrip->have_posts() ) :
							while ( $eventsdescrip->have_posts() ) : $eventsdescrip->the_post();
								the_content('<p>','</p>');
							endwhile;
					endif;
			?>
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
			?>
				<div class="small-12 medium-12 large-12 cell">
			<?php get_template_part( 'template-parts/content', 'lccc-event' );?>
			</div>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>


		</main><!-- #main -->
	</div><!-- #primary -->
</div>
		<div class="small-12 cell show-for-small-only">
				<?php if ( is_active_sidebar( 'lccc-announcements-sidebar' ) ) { ?>
							<?php dynamic_sidebar( 'lccc-announcements-sidebar' ); ?>
				<?php } ?>
	</div>
</div>
</div>
<?php get_footer(); ?>
