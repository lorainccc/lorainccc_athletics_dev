<?php
/**
 * @package LCCC Framework
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php lorainccc_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
    if ( has_post_thumbnail() ) {
    ?>
		<div class="grid-container">
	<div class="small-12 medium-12large-12 cell event-image"><?php the_post_thumbnail(); ?></div>
</div>
<?php
    }?>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lccc-framework' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php lorainccc_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
