<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lorainccc
 */
?>
<?php 
$subheading = announcement_meta_box_get_meta('announcement_meta_box_sub_heading');
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="small-12 medium-12 large-12 columns">
   				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
							<h3><?php echo $subheading; ?></h3>
    </div>
	<div class="small-12 medium-12 large-12 columns">
	<header class="entry-header">
       <?php echo get_the_term_list( $post->ID, 'athletic_category', '', ', ' ); ?> 
	</header><!-- .entry-header -->
	</div>
 <?php
    if ( has_post_thumbnail() ) {
    ?>
	<div class="small-12 medium-12large-12 columns event-image"><?php the_post_thumbnail(); ?></div>
<?php
    }?>
	<div class="small-12 medium-12large-12 columns content-container">
	<div class="entry-content">
        <div class="small-12 medium-12large-12 columns nopadding">
		<?php
			the_content();
?>
        </div>     
	</div><!-- .entry-content -->
	</div>
	<?php if ( get_edit_post_link() ) : ?>

			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'lorainccc' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
	<?php endif; ?>
</article><!-- #post-## -->
