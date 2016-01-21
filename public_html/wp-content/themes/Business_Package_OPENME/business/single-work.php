<?php
/**
 * The template for displaying all event posts.
 *
 * @package business
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<header class="entry-header">
 		
        <div class="grid grid-pad">   
    		<div class="col-1-1">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        	</div><!-- .col-1-1 -->
    	</div><!-- .grid -->
	
    </header><!-- .entry-header -->
    
	<div id="primary">
		<main id="main" class="site-main" role="main">

			<?php get_template_part( 'content', 'work' ); ?>

			<div class="grid grid-pad">
            	<div class="col-1-1">
					<?php business_post_nav(); ?>
            	</div><!-- .col-1-1 -->
            </div><!-- .grid -->

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main --> 
	</div><!-- #primary -->

<?php get_footer(); ?>