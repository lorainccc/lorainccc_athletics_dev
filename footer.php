<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package LCCC Framework
 */
?>
	</div><!-- #content -->

	<footer id="colophon" class="small-12 medium-12 large-12 columns site-footer" role="contentinfo">
		  <div class="row text-center medium-text-left">
    <div class="large-4 medium-4 columns"><a href="http://www.lorainccc.edu/"><img class="footer-logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/lccclogo_white.svg" alt="" width="220" height="42.5"/></a> 
      <h2>Connect with LCCC</h2>
      <ul class="menu footer-sm-links">
        <li><a href="https://www.facebook.com/LCCCAthletics" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/facebook_white.svg" height="30" width="30" alt="" /></a></li>
        <li><a href="https://twitter.com/lcccathletics " target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/twitter_white.svg" height="30" width="30" alt="" /></a></li>
      </ul>
      <a href="#" target="_blank" class="clearfix mobile-app-link"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/smartphone_yellow.svg" heigth="33" width="20" alt=""/>
      <h2>LCCC'S<br />
        Mobile App</h2>
      </a> </div>
					<?php 
					$footer_contact_email = get_option( 'lccc_footer_email', '' );
					$footer_contact_phone = get_option( 'lccc_footer_phone', '' );
					?>
    <div class="large-4 medium-4 columns">
      <h2>Contact Athletics</h2>
   <p>1005 N Abbe Rd<br>
        Elyria, OH 44035<br>
     <?php   
					if($footer_contact_phone != ''){
									echo $footer_contact_phone.'<br>'; 
				 }else{ ?>   
								1-800-995-LCCC (5222)<br>
								or (440) 365-5222<br>
				<?php } 
				if($footer_contact_email != ''){?>
				<a class="underline" href="mailto:<?php echo $footer_contact_email; ?>"><?php echo $footer_contact_email; ?></a> 
				<?php }else {?>   
					<a class="underline" href="mailto:info@lorainccc.edu">info@lorainccc.edu</a> 
					<?php } ?>
								</p>
        <ul class="underline">
        <li><a href="https://test.lorainccc.edu/about/map-and-directions-to-lccc/">Map and Directions</a></li>
      </ul>
    </div>
    <div class="large-4 medium-4 columns">
      <h2>Quick Links</h2>
	<?php if ( has_nav_menu( 'athletics-footer-quicklink-nav' ) ) : ?>
		<nav id="site-navigation" class="footer-navigation" role="navigation">
			<?php
				// Primary Footer navigation menu.
				wp_nav_menu( array(
					'menu_class'     => 'underline',
					'theme_location' => 'athletics-footer-quicklink-nav',
				) );
			?>
		</nav><!-- .main-navigation -->
	<?php endif; ?>
    </div>
            
  </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
