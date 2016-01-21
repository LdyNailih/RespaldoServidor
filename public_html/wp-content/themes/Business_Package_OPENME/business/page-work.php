<?php
/**
Template Name: Works Page
 *
 * @package business
 */

get_header(); ?>

	<header class="entry-header">
    	<div class="grid grid-pad">
            <div class="col-1-1">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        	</div><!-- col-1-1 --> 
        </div><!-- grid -->
	</header><!-- .entry-header -->

	<div class="grid grid-pad">

		<?php query_posts( array ( 'post_type' => 'work', 'posts_per_page' => -1 ) );
			
				while ( have_posts() ) : the_post(); ?> 
    
				<div class="col-1-4 mobile-col-1-2">
    				
                    <div class="works">
              			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('client'); ?></a>
              			<h1 class="works-entry-title"><?php the_title(); ?></h1> 
              			<p class="works-description"><?php $content = get_the_content(); echo wp_trim_words( $content , '18' ); ?><br /><a href="<?php the_permalink(); ?>">Read More &rarr;</a></p> 
  					</div><!-- works -->
				
                </div><!-- col-1-4 -->  
        
		<?php endwhile; // end of the loop. ?>   

	</div><!-- grid --> 

<?php get_footer(); ?>
