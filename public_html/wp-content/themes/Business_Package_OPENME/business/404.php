<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package business
 */

get_header(); ?>


            
	<header class="entry-header">
    	<div class="grid grid-pad">
        	<div class="col-1-1">
				<h1 class="entry-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'business' ); ?></h1></h1>
        	</div><!-- .col-1-1 -->
    	</div><!-- .grid --> 
	</header><!-- .entry-header -->
    
    
<div class="grid grid-pad">
	<div id="primary" class="content-area col-1-1">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'business' ); ?></p>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
</div>

<?php get_footer(); ?>
