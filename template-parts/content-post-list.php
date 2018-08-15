<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lorainccc
 */

?>
<div class="grid-container">
<article id="post-<?php the_ID(); ?>" class="small-12 medium-12 large-12 cell">
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
				the_category( ', ' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				the_category( ', ' );
			}
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php //lorainccc_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
    if ( has_post_thumbnail() ) {
    ?>
	<div class="small-12 medium-4 large-4 cell event-image"><?php the_post_thumbnail(); ?></div>
		<div class="small-12 medium-8 large-8 cell post-content">
					<?php
											the_content( sprintf(
									/* translators: %s: Name of current post. */
									wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'lorainccc' ), array( 'span' => array( 'class' => array() ) ) ),
									the_title( '<span class="screen-reader-text">"', '"</span>', false )
								) );

								wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lorainccc' ),
									'after'  => '</div>',
								) );
					?>
		</div>
<?php
    }else{
					?>
					<div class="small-12 medium-12 large-12 cell post-content">
					<?php
											the_content( sprintf(
									/* translators: %s: Name of current post. */
									wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'lorainccc' ), array( 'span' => array( 'class' => array() ) ) ),
									the_title( '<span class="screen-reader-text">"', '"</span>', false )
								) );

								wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lorainccc' ),
									'after'  => '</div>',
								) );
					?>
		</div>
		<?php
				}
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
</div>
