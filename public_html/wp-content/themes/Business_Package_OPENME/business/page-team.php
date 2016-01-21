<?php
/**
Template Name: Team Members Page
 *
 * @package business
 */

get_header(); ?>

	<header class="entry-header">
    	<div class="grid grid-pad">
        	<div class="col-1-1">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        	</div><!-- .col-1-1 -->
    	</div><!-- .grid --> 
	</header><!-- .entry-header -->

	<div class="grid grid-pad">

	<?php query_posts( array ( 'post_type' => 'team', 'posts_per_page' => -1, 'order' => 'ASC' ) );
			
		while ( have_posts() ) : the_post(); ?> 
    
		<div class="col-1-3">
    		<div class="member">
              <?php the_post_thumbnail('member'); ?>
              <h1 class="member-entry-title"><?php global $post; $text = get_post_meta( $post->ID, '_tm_member_name', true ); echo $text; ?></h1>
              <h6 class="member-title"><?php global $post; $text = get_post_meta( $post->ID, '_tm_member_title', true ); echo $text; ?></h6>
              <p class="member-description"><?php global $post; $text = get_post_meta( $post->ID, '_tm_member_description', true ); echo $text; ?></p>
  			</div><!-- member --> 
		</div><!-- col-1-3 --> 
        
	<?php endwhile; // end of the loop. ?>   

	</div><!-- grid --> 
    
<?php get_footer(); ?>
