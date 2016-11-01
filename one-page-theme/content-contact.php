<?php
global $post;
;?>
<article id="<?php echo $post->post_name; ?>" <?php post_class('page-scroll'); ?>>
	<div class="container contact">
		<div class="row">
			<div class="contact-content">
				<div class="col-xs-12 col-md-6">
					<?php the_content(); ?>
					<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'one-page-theme' ),
						'after'  => '</div>',
						) );
						?>
						<div class="col-xs-12 col-sm-4">
							<p><?php dynamic_sidebar( 'home-contact-one') ?></p>
						</div>
						<div class="col-xs-12 col-sm-4">
							<p><?php dynamic_sidebar( 'home-contact-two') ?></p>
						</div>
						<div class="col-xs-12 col-sm-4">
							<p><?php dynamic_sidebar( 'home-contact-three') ?></p>
						</div>		
					</div><!--end column one-->

					<!-- Stay in Touch Bar-->
					<div class="stay-in-touch col-xs-12 col-sm-6">
						<?php dynamic_sidebar( 'stay-in-touch') ?>
					</div>


					<footer class="entry-footer">
						<?php edit_post_link( __( 'Edit', 'one-page-theme' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-footer -->
				</div><!-- .entry-content -->
			</div><!--end row-->
		</div><!--end container-->
	</article><!-- #post-## -->
