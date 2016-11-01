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
<article id="<?php echo $post->post_name; ?>" <?php post_class('page-scroll full-image'); ?> style="background: url(<?php echo $src[0]; ?>)">
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
			<img class="iphone" src="http://localhost/psd2wp/wordpress/wp-content/uploads/2016/08/iphone.png">
		</div><!-- .entry-content -->
		<footer class="entry-footer">
			<?php edit_post_link( __( 'Edit', 'one-page-theme' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-## -->