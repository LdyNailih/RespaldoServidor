<?php
/**
Template Name: Home Page
 *
 * @package business
 */

get_header(); ?>


	<div id="sequence">
		<span class="sequence-prev" alt="Previous" /><i class="fa fa-angle-left"></i></span>
		<span class="sequence-next" alt="Next" /><i class="fa fa-angle-right"></i></span>

			<ul class="sequence-canvas">
            
            	<?php query_posts( array ( 'post_type' => 'slider', 'posts_per_page' => 5 ) );
			
					while ( have_posts() ) : the_post(); ?> 
                    
                	<li>
                    <div class="slide-title"><?php the_title(); ?></div>
                    <div class="slide-description"><?php global $post; $text = get_post_meta( $post->ID, '_sr_slider_description', true ); echo $text; ?></div>
                    <a class="slide-arrow" href="<?php global $post; $text = get_post_meta( $post->ID, '_sr_slider_url', true ); echo $text; ?>"><?php global $post; $text = get_post_meta( $post->ID, '_sr_slider_button', true ); echo $text; ?></a>
                 	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); $url = $thumb['0']; ?>	
                    <div class="bg" style="background: url('<?php echo $url?>') center center; -webkit-background-size: cover; -moz-background-size: cover; -ms-background-size: cover; -o-background-size: cover; background-size: cover;">
                	</li>
        
				<?php endwhile; // end of the loop. ?>

			</ul><!-- sequence-canvas --> 
	</div><!-- sequence -->
    
    <?php if( get_theme_mod( 'active_cta' ) == '') : ?>
    
    <div class="home-cta">
    	<div class="grid grid-pad">
    		
            <?php if ( get_theme_mod( 'cta_text' ) ) : ?> 
            	<div class="col-10-12">
            		<h4><?php echo esc_html( get_theme_mod( 'cta_text' )); ?></h4>
            	</div><!-- col-10-12 -->
            
    			<div class="col-2-12 push-right">
            		<a href="<?php echo esc_url( get_page_link(get_theme_mod('business_ctalink_url')))?>"><button><?php echo esc_html( get_theme_mod( 'cta_button_text' )); ?></button></a>
            	</div><!-- col-2-12 -->
            <?php else : ?>   
			<?php endif; ?>
               
    	</div><!-- grid -->  
    </div><!-- home-cta -->
    
    <?php else : ?>  
	<?php endif; ?>
	<?php // end if ?>
    
    <?php if( get_theme_mod( 'active_services' ) == '') : ?>
    
    <div class="services">
    	<div class="grid grid-pad">
        	<div class="col-1-4">
            	
				<?php if ( get_theme_mod( 'home_icon_1' ) ) : ?>
            		<i class="fa <?php echo esc_html( get_theme_mod( 'home_icon_1' )); ?>"></i> 
            	<?php else : ?>   
				<?php endif; ?>
            	
                <?php if ( get_theme_mod( 'icon_title_1' ) ) : ?>
            		<h1><?php echo esc_html( get_theme_mod( 'icon_title_1' )); ?></h1> 
            	<?php else : ?>   
				<?php endif; ?>
            	
                <?php if ( get_theme_mod( 'icon_desc_1' ) ) : ?>
            		<p><?php echo esc_html( get_theme_mod( 'icon_desc_1' )); ?></p>
            	<?php else : ?>    
				<?php endif; ?>
            
            </div><!-- col-1-4 -->
        
        	<div class="col-1-4"> 
            
            	<?php if ( get_theme_mod( 'home_icon_2' ) ) : ?>
            		<i class="fa <?php echo esc_html( get_theme_mod( 'home_icon_2' )); ?>"></i>
            	<?php else : ?>  
				<?php endif; ?>
                
                <?php if ( get_theme_mod( 'icon_title_2' ) ) : ?>
            		<h1><?php echo esc_html( get_theme_mod( 'icon_title_2' )); ?></h1>
            	<?php else : ?>   
				<?php endif; ?>
            	
                <?php if ( get_theme_mod( 'icon_desc_2' ) ) : ?>
            		<p><?php echo esc_html( get_theme_mod( 'icon_desc_2' )); ?></p>
            	<?php else : ?>   
				<?php endif; ?>
            
            </div><!-- col-1-4 --> 
            
        	<div class="col-1-4">
            	
                <?php if ( get_theme_mod( 'home_icon_3' ) ) : ?>
            		<i class="fa <?php echo esc_html( get_theme_mod( 'home_icon_3' )); ?>"></i>
            	<?php else : ?>   
				<?php endif; ?>
                
                <?php if ( get_theme_mod( 'icon_title_3' ) ) : ?>
            		<h1><?php echo esc_html( get_theme_mod( 'icon_title_3' )); ?></h1>
            	<?php else : ?>   
				<?php endif; ?>
            
            	<?php if ( get_theme_mod( 'icon_desc_3' ) ) : ?>
            		<p><?php echo esc_html( get_theme_mod( 'icon_desc_3' )); ?></p>
            	<?php else : ?>   
				<?php endif; ?>
                
            </div><!-- col-1-4 --> 
        
        	<div class="col-1-4">
            
            	<?php if ( get_theme_mod( 'home_icon_4' ) ) : ?>
            		<i class="fa <?php echo esc_html( get_theme_mod( 'home_icon_4' )); ?>"></i>
            	<?php else : ?>   
				<?php endif; ?>
            	
                <?php if ( get_theme_mod( 'icon_title_4' ) ) : ?>
            		<h1><?php echo esc_html( get_theme_mod( 'icon_title_4' )); ?></h1>
            	<?php else : ?>   
				<?php endif; ?>
                
            	<?php if ( get_theme_mod( 'icon_desc_4' ) ) : ?>
            		<p><?php echo esc_html( get_theme_mod( 'icon_desc_4' )); ?></p>
            	<?php else : ?>   
				<?php endif; ?>
            
            </div><!-- col-1-4 -->
        </div><!-- grid -->
    </div><!-- services -->
    
    <?php else : ?>  
	<?php endif; ?>
	<?php // end if ?>
    
    <?php if( get_theme_mod( 'active_middle' ) == '') : ?>
    
    <div class="home-services">
    	<div class="grid">
        	<div class="col-1-1 text-center">
        	
				<?php if ( get_theme_mod( 'business_main_title' ) ) : ?>
            		<h6 class="light-blue"><?php echo esc_html( get_theme_mod( 'business_main_title' )); ?></h6>
            	<?php else : ?>   
				<?php endif; ?>
            
            	<?php if ( get_theme_mod( 'business_sub_title' ) ) : ?>
            		<h2><?php echo esc_html( get_theme_mod( 'business_sub_title' )); ?></h2>
            	<?php else : ?>   
				<?php endif; ?>
        	
        	</div><!-- col-1-1 -->
    	</div><!-- grid -->
    
    	<div class="grid home-divider-1">
    		<?php if ( is_active_sidebar('homepage-middle-left') ) : ?>
        		<div class="col-1-2"> 
    				<?php dynamic_sidebar('homepage-middle-left'); ?>
        		</div><!-- col-1-2 -->    
    		<?php endif; ?> 
    
    		<?php if ( is_active_sidebar('homepage-middle-right') ) : ?>
        		<div class="col-1-2">
    				<?php dynamic_sidebar('homepage-middle-right'); ?>
            	</div><!-- col-1-2 -->    
    		<?php endif; ?>
    	</div><!-- grid -->
    
    </div><!-- home-services -->
    
    <?php else : ?>  
	<?php endif; ?>
	<?php // end if ?>
    
    <?php if( get_theme_mod( 'active_blog' ) == '') : ?>
    
    <div class="home-blog-container">
    	<div class="grid home-divider-2">
            <div class="col-1-1 text-center">
				<?php if ( get_theme_mod( 'business_home_blog_title' ) ) : ?>
            		<h6 class="light-blue"><?php echo esc_html( get_theme_mod( 'business_home_blog_title' )); ?></h6>
            	<?php else : ?>   
				<?php endif; ?>
            	
                <?php if ( get_theme_mod( 'business_home_blog_subtitle' ) ) : ?>
            		<h2><?php echo esc_html( get_theme_mod( 'business_home_blog_subtitle' )); ?></h2>
            	<?php else : ?>
				<?php endif; ?>
            </div><!-- col-1-1 -->
        </div><!-- grid -->

		<div id="primary" class="content-area"> 
			<main id="main" class="site-main" role="main">
				<div class="grid grid-pad">
            
				<?php query_posts( array ( 'post_type' => 'post', 'posts_per_page' => 3 ) );
			
			    	while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'home' ); ?> 

				<?php endwhile; // end of the loop. ?>
                
				</div><!-- grid -->
			</main><!-- #main -->
		</div><!-- #primary -->
    
    </div><!-- home-blog-container --> 
    
    <?php else : ?>  
	<?php endif; ?>
	<?php // end if ?> 

<?php get_footer(); ?>
