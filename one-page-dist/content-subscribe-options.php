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
		<div class="subscribe">
			<div class="row">
				<div class="subscribe-content">
					<div class="col-sm-12 col-md-6">
						<div class="subscribe-plans">
						<div class="grey-btn"> LEGACY </div>

							<?php the_content(); ?>
							<?php
							wp_link_pages( array(
								'before' => '<div class="page-links">' . __( 'Pages:', 'one-page-theme' ),
								'after'  => '</div>',
								) );
								?>
						<a type="button" class="btn buy-btn">BUY NOW</a>
						<div class="buy-icons">
							<i class="fa fa-apple" aria-hidden="true"></i>
							<i class="fa fa-windows" aria-hidden="true"></i>
						</div>
								
							</div>
							<footer class="entry-footer">
									<?php edit_post_link( __( 'Edit', 'one-page-theme' ), '<span class="edit-link">', '</span>' ); ?>
								</footer><!-- .entry-footer -->
						</div><!-- .subscribe-content -->

						<!--THIS IS THE TEAM PLAN WIDGET AREA-->
						<div class="col-sm-12 col-md-6">
							<div class="subscribe-plans team-plan">
								<div class="purple-btn"> MOST POPULAR </div>
								
								<div>
									<?php dynamic_sidebar( 'team-plan') ?>
								</div>
						<a type="button" class="btn buy-btn">BUY NOW</a>
						<div class="buy-icons">
							<i class="fa fa-apple" aria-hidden="true"></i>
							<i class="fa fa-windows" aria-hidden="true"></i>
						</div>
							</div>
						</div>
					</div>
				</div><!--end row-->
			</div>
		</div><!--end container-->
	</article><!-- #post-## -->
