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
			<div class="small-12 medium-12 large-12 cell nopadding">
						<?php dynamic_sidebar( 'athletics-slider-sidebar' ); ?>
			</div>
			<?php }else{ ?>
			<div class="home-hero">
    <div class="grid-x grid-margin-x">
				&nbsp;
			</div>
  </div>
  <?php } ?>
			<div class="grid-container">
			<section class="grid-x grid-margin-x">
				<div class="small-12 medium-12 large-12 cell">
										<div class="small-12 medium-7 large-8 cell athletics-news">
												<?php
																$i=0;
																if(get_option( 'athletics_announcement_feed_count', '' ) != ''){
																	$announcment_count =get_option( 'athletics_announcement_feed_count', '' );
																}else{
																	$announcment_count = 5;
																}
																$announcment_count =get_option( 'athletics_announcement_feed_count', '' );
																$announcementargs=array(
																'post_type' => 'lccc_announcement',
																'post_status' => 'publish',
																'athletic_category'	=> 'athletics-news',
																'orderby' => 'date',
																'order' => 'DESC',
																'posts_per_page' => $announcment_count,
																);
																$newevents = new WP_Query($announcementargs);
																if ( $newevents->have_posts() ) :
																			echo '<div class="small-12 medium-12 large-12 cell lccc_announcement_header">';
																		echo '<h2 class="announcementheader">'.'In The News'.'</h2>';
																		echo '</div>';
																  echo '<div class="small-12 medium-12 large-12 cell news-container">';
																		while ( $newevents->have_posts() ) : $newevents->the_post();
																		//$i++;
																		$altlink = announcement_meta_box_get_meta('announcement_meta_box_altlink');
																		  echo '<div class="small-12 medium-12 large-12 cell news-container">';
																					if ( has_post_thumbnail() ) {
																							echo '<div class="small-12 medium-3 large-3 cell eventhumbnail">';
																								if( $altlink != ''){
																									 echo '<a href="'.$altlink.'">'.the_post_thumbnail().'</a>';
																								}else{
																									the_post_thumbnail();
																								}

																						echo '</div>';
																							echo '<div class="small-12 medium-9 large-9 cell">';
																				if( $altlink != ''){
																									 echo '<a href="'.$altlink.'">'.the_title('<h3 class="eventtitle">','</h3>').'</a>';
																								}else{
																								?>
																										<a href="<?php the_permalink();?>"><?php the_title('<h3 class="eventtitle">','</h3>');?></a>
																						<?php
																						}
																						the_excerpt('<p>','</p>');
																												if( $altlink != ''){
																							?>
																						<a class="button" href="<?php echo $altlink; ?>">More Information</a>
																							<?php
																						}else{
																							?>
																						<a class="button" href="<?php the_permalink(); ?>">More Information</a>

																							<?php
																						}
																						echo '</div>';
																					}else{
																							echo '<div class="small-12 medium-12 large-12 cell">';
																								if( $altlink != ''){
																									?>
																									 <a href="<?php echo $altlink;?>"><?php the_title('<h3 class="eventtitle">','</h3>');?></a>
																								<?php
																								}else{
																									?>
																								<a href="<?php the_permalink();?>"><?php the_title('<h3 class="eventtitle">','</h3>');?></a>
																									<?php
																								}
																						the_excerpt('<p>','</p>');
																						if( $altlink != ''){
																							?>
											<a class="button" href="<?php echo $altlink; ?>">More Information</a>
																							<?php
																						}else{
																							?>
											<a class="button" href="<?php the_permalink(); ?>">More Information</a>

																							<?php
																						}
																							echo '</div>';
																					}
														  			echo '<div class="cell grid-x grid-margin-x">';
																				echo '<hr />';
																			echo '</div>';
																					echo '</div>';
																		endwhile;
																		    echo '<div class="small-12 medium-12 large-12 cell view-all-athletics-button">';
							echo '<a href="/athletics/lccc_announcement/" class="button">View All Athletic News</a>';
		     echo '</div>';
																		echo '</div>';
																endif;
												?>
										</div>
										<div class="small-12 medium-5 large-4 cell">
																<div class="small-12 medium-12 large-12 cell nopadding">
																	<?php if ( is_active_sidebar( 'lccc-events-sidebar' ) ) { ?>
																							<?php dynamic_sidebar( 'lccc-events-sidebar' ); ?>
																		<?php } ?>
																</div>											<div class="small-12 medium-12 large-12 cell stocker-badges-container">
																	<?php if ( is_active_sidebar( 'badges-sidebar' ) ) { ?>
																							<?php dynamic_sidebar( 'badges-sidebar' ); ?>
																		<?php } ?>
																</div>
										</div>
					</div>
								<?php if ( is_active_sidebar( 'sponsor-sidebar' ) ) { ?>
						<div class="small-12 medium-12 large-12 cell sponsors-row">
											<div class="cell grid-x grid-margin-x">
													<hr />
											</div>
											<div class="cell grid-x grid-margin-x">
														<div class="small-12 medium-12 large-12 cell sponsors-row">
															<?php dynamic_sidebar( 'sponsor-sidebar' ); ?>
														</div>
											</div>
							</div>
							<?php } ?>

			</section>
</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
