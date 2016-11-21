<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package LCCC Framework
 */
get_header(); 
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
  <?php if ( is_active_sidebar( 'athletics-slider-sidebar' ) ) { ?>
			<div class="small-12 medium-12 large-12 columns nopadding">
						<?php dynamic_sidebar( 'athletics-slider-sidebar' ); ?>
			</div>
			<?php }else{ ?>
			<div class="home-hero">
    <div class="row">
				&nbsp;
			</div>
  </div>
  <?php } ?>

			<section class="row">
   	<div class="small-12 medium-7 large-8 columns athletics-news">
		<?php if ( is_active_sidebar( 'lccc-announcements-sidebar' ) ) { ?>
						<?php dynamic_sidebar( 'lccc-announcements-sidebar' ); ?>
				<?php } ?>
				</div>
				<div class="small-12 medium-5 large-4 columns">
										<div class="small-12 medium-12 large-12 columns nopadding">
											<?php if ( is_active_sidebar( 'lccc-events-sidebar' ) ) { ?>
																	<?php dynamic_sidebar( 'lccc-events-sidebar' ); ?>
												<?php } ?>				
										</div>											<div class="small-12 medium-12 large-12 columns stocker-badges-container">
											<?php if ( is_active_sidebar( 'badges-sidebar' ) ) { ?>
																	<?php dynamic_sidebar( 'badges-sidebar' ); ?>
												<?php } ?>								
										</div>
				
				</div>				
  </section>		
			<?php if ( is_active_sidebar( 'sponsor-sidebar' ) ) { ?>
		<div class="small-12 medium-12 large-12 columns">
							<div class="column row">
									<hr />
							</div>
							<div class="column row">
										<div class="small-12 medium-12 large-12 columns sponsors-row">
											<?php dynamic_sidebar( 'sponsor-sidebar' ); ?>
										</div> 
							</div>
			</div>
			<?php } ?>			
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
