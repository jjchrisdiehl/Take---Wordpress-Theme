<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package One Page Theme
 */
?>
<?php
	global $post;
;?>

<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
?>
<article id="<?php $categories=get_the_category();
	echo $cat_name = $categories[0]->slug; ?>" <?php post_class('page-scroll full-image'); ?> style="background: url(<?php echo $src[0]; ?>)">
<div class="container">
	<div class="row">
		<div class="full-image-content hide-content col-xs-12 col-lg-6 push-left">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'one-page-theme' ),
				'after'  => '</div>',
			) );
		?>
		</div>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'one-page-theme' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-## -->
