<?php
/**
 * @package business
 */
?>


	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="grid grid-pad">
            <div class="col-8-12 work-image">
				<?php the_post_thumbnail(); ?>
			</div><!-- work-image -->
    
    		<div class="col-4-12 work-content">
    			<h5 class="works-entry-title">Project Overview</h5>
    			<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'business' ),
						'after'  => '</div>',
					) );
				?>
        	<?php edit_post_link( __( 'Edit', 'business' ), '<span class="edit-link">', '</span>' ); ?>
    		</div><!-- work-content -->
        </div><!-- grid -->
    </article><!-- #post-## -->
