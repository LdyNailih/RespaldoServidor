<?php
/**
 * @package business
 */
?>

	<div class="col-1-3">
		<div class="home-blog">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
				<header class="home-entry-header">
    				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-blog'); ?></a>
						<div class="home-entry-meta">
							<?php business_posted_on(); ?>
						</div><!-- .entry-meta -->
					<a href="<?php the_permalink(); ?>"><?php the_title( '<h1 class="home-entry-title">', '</h1>' ); ?></a>
				</header><!-- .entry-header -->

					<div class="home-entry-content"> 
						<?php the_excerpt(); ?>
					</div><!-- .entry-content -->

    			<a href="<?php the_permalink(); ?>">
				<footer class="entry-footer">
					<p>Read Full Article<span><i class="fa fa-long-arrow-right"></i></span></p>
				</footer><!-- .entry-footer -->	
                </a>
                   
			</article><!-- #post-## -->
		</div><!-- home-blog -->
	</div><!-- col-1-3 --> 