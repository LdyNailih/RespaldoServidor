<?php
/**
Template Name: Clients Page
 *
 * @package business
 */

get_header(); ?>

	<header class="entry-header">
    	<div class="grid grid-pad">
        	<div class="col-1-1">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        	</div><!-- col-1-1  --> 
    	</div><!-- grid  -->
	</header><!-- .entry-header -->

	<div class="grid grid-pad">

	<?php query_posts( array ( 'post_type' => 'client', 'posts_per_page' => -1, 'order' => 'ASC' ) );
			
		while ( have_posts() ) : the_post(); ?> 
    
		<div class="col-1-4 mobile-col-1-2">
    		
            <div class="client">
              <?php the_post_thumbnail('client'); ?>
              <h1 class="client-entry-title"><?php global $post; $text = get_post_meta( $post->ID, '_cl_client_name', true ); echo $text; ?></h1><!-- client-entry-title -->
              <p class="client-description"><?php global $post; $text = get_post_meta( $post->ID, '_cl_client_description', true ); echo $text; ?></p><!-- client-description -->
  			</div><!-- client -->  
		
        </div><!-- col-1-4 -->
        
	<?php endwhile; // end of the loop. ?>   

	</div><!-- grid -->  
    
<?php get_footer(); ?>
