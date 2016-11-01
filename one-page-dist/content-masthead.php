<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package One Page Theme
 */
?>
<?php 
	global $post;
?>

<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
?>
<article id="<?php $categories=get_the_category();
	echo $cat_name = $categories[0]->slug; ?>" <?php post_class('page-scroll full-image'); ?> style="background: url(<?php echo $src[0]; ?>)">
	<div class="container">
		<div class="row">
			<div class="masthead-content hide-masthead col-sm-6 push-left">
				<?php the_content(); ?>
				<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'one-page-theme' ),
					'after'  => '</div>',
					) );
					?>
			</div>

			<?php
			// check to see if the logo exists and add it to the page
			if ( get_theme_mod( 'hero_section_image' ) ) : ?>
			<img class="iphone" src="<?php echo get_theme_mod( 'hero_section_image' ); ?>" alt="Product Feature" >
			
			<?php // add a fallback if the logo doesn't exist
			else : ?>

			 <img class="iphone" src="<?php bloginfo('template_directory') ?>/dist/images/iphone.png">
			 
			<?php endif; ?>
			


		</div><!-- .entry-content -->
		<footer class="entry-footer">
			<?php edit_post_link( __( 'Edit', 'one-page-theme' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-## -->