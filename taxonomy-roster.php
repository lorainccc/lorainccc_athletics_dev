<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package LCCC Framework
 */
get_header(); ?>
<div class="row page-content">
<div class="small-12 medium-12 large-12 columns breadcrumb-container">
   <?php get_template_part( 'template-parts/content', 'breadcrumb' ); ?>
</div>
<div class="medium-4 large-4 columns hide-for-small-only">
	<div class="small-12 medium-12 large-12 columns sidebar-widget">
		<div class="small-12 medium-12 large-12 columns sidebar-menu-header">
		<h3>Varsity Sports Menu</h3>
		</div>
	<?php	if ( has_nav_menu( 'left-nav' ) ) : ?>
	<div id="secondary" class="medium-12 columns secondary nopadding">
		<?php if ( has_nav_menu( 'left-nav' ) ) : ?>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php
					// Primary navigation menu.
					wp_nav_menu( array(
						'menu_class'     => 'nav-menu',
						'theme_location' => 'varsity-sports-left-nav',
					) );
				?>
			</nav><!-- .main-navigation -->
				<?php endif; ?>
		</div>
		<?php endif; ?>
			<?php if ( is_active_sidebar( 'stocker-page-events-sidebar' ) ) { ?>
							<?php dynamic_sidebar( 'stocker-page-events-sidebar' ); ?>
				<?php } ?>
	</div>
	</div>
	<div class="small-12 medium-8 large-8 columns">		
<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php if ( have_posts() ) : 
								$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
			endif; ?>
			
			<?php 
			 $archive_args = array(
						'post_type' => 'lccc_player',
						'roster' => $term->slug,// get only players in current taxonomy
      'posts_per_page'=> -1,   // this will display all posts on one page
						'order'	=> 'ASC',
						'orderby'=> 'meta_value',
						'meta_key' => 'lccc_athletics_player_profile_jersey_number',
    );
			
				$archive_query = new WP_Query( $archive_args );
			?>
		<?php if ( $archive_query->have_posts()  ) : 
					$sport = lccc_athletics_player_profile_get_meta('lccc_athletics_player_profile_sport');
					$sport = lccc_athletics_player_profile_get_meta('lccc_athletics_player_profile_sport');
					$sport = strtolower($sport);
					$sport = str_replace(' ', '-', $sport);
			if($sport != 'cross-country'){
			?>
			<header class="page-header"  style="padding-top:0;">
				<?php
					echo '<h1 class="page-title">' . single_cat_title( '', false ) . '</h1>';
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->
				<table class="roster-table">
						<thead>
												<tr>
														<th width="3%">#</th>
														<th width="26%">Name</th>
														<th width="14%">Position</th>
														<th width="8%">YR</th>
														<th width="8%">HT</th>
														<th width="21%">High School</th>
														<th width="20%">Home Town</th>
												</tr>
  							</thead>
									<tbody>
										<?php /* Start the Loop */ ?>
									<?php while ( $archive_query->have_posts() ) : $archive_query->the_post();  ?>
									<?php
										/* Include the Post-Format-specific template for the content.
											* If you want to override this in a child theme, then include a file
											* called content-___.php (where ___ is the Post Format name) and that will be used instead.
											*/
											get_template_part( 'template-parts/content','roster' );		
								 endwhile; 
									?>
		
								</tbody>
			</table>
			<?php
			}
			 endif; ?>
			<?php 
									if($sport == 'cross-country'){
										?>
										<header class="page-header" style="padding-top:0;">
														<?php
															echo '<h1 class="page-title">' . single_cat_title( '', false ) . '</h1>';
															the_archive_description( '<div class="taxonomy-description">', '</div>' );
														?>
										</header><!-- .page-header -->
										<table class="roster-table">
												<thead>
												 <tr>
																	<th width="26%">Name</th>
																	<th width="12%">YR</th>
																	<th width="12%">HT</th>
																	<th width="25%">High School</th>
																	<th width="25%">Home Town</th>
												</tr>
  										</thead>
												<tr class="section-header">
															<td><p class="table-section-header">Women</p></td>
															<td class="hide-for-small-only"><!-- ... -->	</td>
															<td class="hide-for-small-only"><!-- ... -->	</td>
															<td class="hide-for-small-only"><!-- ... -->	</td>
															<td class="hide-for-small-only"><!-- ... -->	</td>
											</tr>
											<?php
											$args = array(
												'post_type' => 'lccc_player',
												'roster' => $term->slug,
												'orderby'=> 'title', 
													'order' => 'ASC', 
											);
											$ccfemalequery = new WP_Query( $args );
										 if ( $ccfemalequery->have_posts() ) :
														while ( $ccfemalequery->have_posts() ) : $ccfemalequery->the_post();
																 $gender = lccc_athletics_player_profile_get_meta('lccc_athletics_player_profile_gender');
																			if( $gender == 'Female' ){
																				get_template_part( 'template-parts/content','cross-country' );		
																				}
													endwhile;
														wp_reset_postdata(); 
											endif;
										?>
											<tr class="section-header">
															<td><p  class="table-section-header">Men</p></td>
															<td class="hide-for-small-only"><!-- ... -->	</td>
															<td class="hide-for-small-only"><!-- ... -->	</td>
															<td class="hide-for-small-only"><!-- ... -->	</td>
															<td class="hide-for-small-only"><!-- ... -->	</td>
												</tr>
											<?php
											$ccmalequery = new WP_Query( $args );
										 if ( $ccmalequery->have_posts() ) :
														while ( $ccmalequery->have_posts() ) : $ccmalequery->the_post();
																 $gender = lccc_athletics_player_profile_get_meta('lccc_athletics_player_profile_gender');
																			if( $gender == 'Male' ){
																				get_template_part( 'template-parts/content','cross-country' );		
																				}
													endwhile;
														wp_reset_postdata(); 
											endif;
											?>
									</table>
								<?php
									}
			?>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>	
		<div class="small-12 columns show-for-small-only">
				<?php if ( is_active_sidebar( 'lccc-announcements-sidebar' ) ) { ?>
							<?php dynamic_sidebar( 'lccc-announcements-sidebar' ); ?>
				<?php } ?>
	</div>
</div>
<?php get_footer(); ?>