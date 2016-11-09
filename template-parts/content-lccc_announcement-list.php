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
<a href="<?php the_permalink();?>"><?php the_title( '<h2 class="entry-title">', '</h2>' ); ?></a>
		<h3><?php echo $subheading; ?></h3>
 </div>
	<?php  if ( has_post_thumbnail() ) { ?>
			<div class="small-12 medium-4 large-4 columns">
							<?php the_post_thumbnail(); ?>
			</div>
			<div class="small-12 medium-8 large-8 columns" style="padding-top: 0.3rem;">
		<header class="entry-header">
        <?php the_category( ', ' ); ?>
        <p>&nbsp;</p>
	</header><!-- .entry-header -->
	<div class="small-12 medium-12 large-12 columns nopadding">
	<div class="entry-content">
		<?php
			the_excerpt();
		?>
		      <a href="<?php the_permalink();?>">More Information</a>
		</div><!-- .entry-content -->	
			</div>
					</div>
	<?php }else{ ?>
	<div class="small-12 medium-12 large-12 columns">
	<header class="entry-header">
        <?php the_category( ', ' ); ?>
        <p>&nbsp;</p>
       
	</header><!-- .entry-header -->
	</div>
	
	<div class="small-12 medium-12 large-12 columns">
			<div class="entry-content">
		<?php
			the_excerpt();
		?>
		 <a href="<?php the_permalink();?>">More Information</a>
	</div><!-- .entry-content -->
</div>
	<?php } ?>

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
<div class="column row">
        <hr>
      </div>
