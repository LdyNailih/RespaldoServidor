<?php
/**
 * @package business
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="index-entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
        <?php the_post_thumbnail('archive-blog'); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php business_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
				if ( 'option2' == business_sanitize_index_content( get_theme_mod( 'business_post_content' ) ) ) :
				the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'business' ) );
				else :
				the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'business' ) );
				endif; 
		?>
         
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'business' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'business' ) );
				if ( $categories_list && business_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( 'Posted in %1$s', 'business' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'business' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( 'Tagged %1$s', 'business' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<a href="<?php the_permalink(); ?>"><button style="margin-top: 1em;">Read More</button></a>

		<?php edit_post_link( __( 'Edit', 'business' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->