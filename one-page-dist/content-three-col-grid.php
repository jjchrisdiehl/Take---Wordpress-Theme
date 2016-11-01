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
<article id="<?php $categories=get_the_category();
	echo $cat_name = $categories[0]->slug; ?>" <?php post_class('page-scroll'); ?>>
	<div class="container">
		<div class="three-col-grid-content">
		<div class="row">
		
			<div class="col-sm-12">
				<?php the_content(); ?>
				<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'one-page-theme' ),
					'after'  => '</div>',
					) );
					?>

					<footer class="entry-footer">
						<?php edit_post_link( __( 'Edit', 'one-page-theme' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-footer -->
				</div><!-- .entry-content -->
			</div><!--row-->

<!--3 Widget Columns-->
			<div class="row">

				<!--Widget One-->
				<div class="col-sm-12 col-md-4">
				<?php dynamic_sidebar( 'web-based') ?>	
				</div>

				<!--Widget Two-->
				<div class="col-sm-12 col-md-4">
				<?php dynamic_sidebar( 'team-login') ?>
				</div>

				<!--Widget Three-->
				<div class="col-sm-12 col-md-4">
				<?php dynamic_sidebar( 'great-support') ?>
				</div>

			</div><!--row-->
		</div>
		</div><!--container-->
	</article><!-- #post-## -->
