<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lorainccc
 */

?>
<article id="post-<?php the_ID(); ?>" class="small-12 medium-12 large-12 columns">
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
				echo get_the_term_list( $post->ID, 'athletic_category', '', ', ' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                echo get_the_term_list( $post->ID, 'athletic_category', '', ', ' );
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
	<div class="small-12 medium-4 large-4 columns event-image"><?php the_post_thumbnail(); ?></div>
		<div class="small-12 medium-8 large-8 columns post-content"> 
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
					<div class="small-12 medium-12 large-12 columns post-content"> 
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
    	<?php if ( get_edit_post_link() ) : ?>
		<div class="small-12 medium-12 large-12 columns">
			<p>&nbsp;</p>
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit This Announcment  %s', 'lorainccc' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
				</div>
	<?php endif; ?>
</article><!-- #post-## -->
