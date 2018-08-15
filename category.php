<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package LCCC Framework
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
	 <h3>
					<?php
								$blog_title = get_bloginfo();
								echo $blog_title;
				?>
	</h3>
		<?php
			//echo 'current-> ' . $current . ' slug-> ' . $post->post_name . '<br />';
			//echo 'parent-> ' . $parent_id . ' slug-> ' . $parent_slug  . '<br />';
			//echo 'grandparent-> ' . $grandparent_id . ' slug-> ' . $grandparent_slug . '<br />';
		?>
		</div>
	<?php	if ( has_nav_menu( 'left-nav' ) ) : ?>
	<div id="secondary" class="medium-12 cell secondary nopadding">
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
	</div>
	<div class="small-12 medium-8 large-8 cell">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

	<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				echo '<h1 class="page-title">'.single_cat_title('', false).'</h1>';
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'post-list' );
				?>
				<div class="cell grid-x grid-margin-x">
        <hr>
      </div>
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
</div>
</div>
<?php get_footer(); ?>
