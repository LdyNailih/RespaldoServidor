<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package business
 */
?>
 
   <?php if( get_theme_mod( 'active_cta_bottom' ) == '') : ?> 
     
   <div class="home-cta"> 
    	<div class="grid grid-pad"> 
    		
            <?php if ( get_theme_mod( 'cta_text_bottom' ) ) : ?>
            
            	<div class="col-10-12">
            		<h4><?php echo esc_html( get_theme_mod( 'cta_text_bottom' )); ?></h4> 
            	</div><!-- col-10-12 -->
           	
            	<div class="col-2-12 push-right">
            
            		<a href="<?php echo esc_url( get_page_link(get_theme_mod('business_ctalink_url_bottom')))?>">
            		<button><?php echo esc_html( get_theme_mod( 'cta_button_text_bottom' )); ?></button>
            		</a>
            
            	</div><!-- col-2-12 -->
            
            <?php else : ?>   
			<?php endif; ?>
            
    	</div><!-- grid -->
    </div> <!-- home-cta --> 
    
    <?php else : ?>  
	<?php endif; ?>
	<?php // end if ?> 

	</section><!-- #content -->
    
	<footer id="colophon" class="site-footer" role="contentinfo"> 
    	<div class="grid grid-pad">
    		
			<?php if ( is_active_sidebar('footer_column_1') ) : ?>
                <div class="col-1-4">
    				<?php dynamic_sidebar('footer_column_1'); ?>
                </div><!-- col-1-4 -->   
    		<?php endif; ?>
   
    		<?php if ( is_active_sidebar('footer_column_2') ) : ?>
                <div class="col-1-4">
    				<?php dynamic_sidebar('footer_column_2'); ?>
                </div><!-- col-1-4 -->    
    		<?php endif; ?> 
    	  		
    		<?php if ( is_active_sidebar('footer_column_3') ) : ?>
                <div class="col-1-4"> 
    				<?php dynamic_sidebar('footer_column_3'); ?>    
    			</div><!-- col-1-4 -->
			<?php endif; ?>
    		
    		<?php if ( is_active_sidebar('footer_column_4') ) : ?>
                <div class="col-1-4">
    				<?php dynamic_sidebar('footer_column_4'); ?>  
    			</div><!-- col-1-4 --> 
			<?php endif; ?>
            
    	</div><!-- grid -->
        
    	<div class="grid grid-pad">
			<div class="site-info col-1-1"></span>
         		
                <div><?php echo business_media_icons(); ?></div>
                     
			 	<?php if ( get_theme_mod( 'business_footerid' ) ) : ?> 
        			<?php echo esc_html( get_theme_mod( 'business_footerid' )); ?> 
				<?php else : ?>
					<?php printf( __( 'Theme: %1$s by %2$s', 'business' ), 'business', '<a href="http://modernthemes.net" rel="designer">modernthemes.net</a>' ); ?> 
				<?php endif; ?> 
                     
			</div><!-- .site-info -->
    	</div><!-- grid -->
	
    </footer><!-- #colophon -->
    
	</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
