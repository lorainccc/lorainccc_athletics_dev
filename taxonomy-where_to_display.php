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
	</div>
	<div class="small-12 medium-8 large-8 cell">
<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<?php
			// get the currently queried taxonomy term, for use later in the template file
$term = get_queried_object();
echo $term->name;
			$args = array(
    'post_type' => 'lccc_events',
    'where_to_display' => $term->slug
);
$query = new WP_Query( $args );
	if ($query->have_posts()) {

    // output the term name in a heading tag
    echo'<h2>Events to be displayed at ' . $term->name . '</h2>';

    // output the post titles in a list
    echo '<ul>';

        // Start the Loop
        while ( $query->have_posts() ) : $query->the_post(); ?>

        <li class="animal-listing" id="post-<?php the_ID(); ?>">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>

        <?php endwhile;

        echo '</ul>';

} // end of check for query having posts

// use reset postdata to restore orginal query
wp_reset_postdata();

			?>

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
