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
<article id="<?php $categories=get_the_category();
	echo $cat_name = $categories[0]->slug; ?>" <?php post_class('page-scroll'); ?>>
	<div class="start">
		<div class="container">	
			<div class="row">
				<div class="start-content">
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
				</div><!-- .start-content -->
			</div><!--end start-content row-->

				<!--Portfolio Grid will be on its own row-->
		</div><!--END FIRST CONTAINER-->




		<div class="container-fluid box-grid">
			<div class="row">
				<div class="grid-box-wrap">	
					<div class="box col-sm-12 col-md-3">
						<div class="box-content">
						<?php query_posts('p=65'); ?>
						<?php while (have_posts()) : the_post(); ?>
							<h3><?php the_title(); ?></h3>
							<?php the_content(); ?>
						<?php endwhile;?>
						</div>
					</div>
				</div>

				<div class="grid-box-wrap">
					<div class="box col-sm-12 col-md-3">
						<div class="box-content">
						<?php query_posts('p=67'); ?>
						<?php while (have_posts()) : the_post(); ?>
							<h3><?php the_title(); ?></h3>
							<?php the_content(); ?>
						<?php endwhile;?>
						</div>
					</div>
				</div>

				<div class="grid-box-wrap">
				<!--Get Post by ID-->
				<?php query_posts('p=69'); ?>
				<?php while (have_posts()) : the_post(); ?>
					
					<!--Get the thumbnail for each post-->
					<?php $post_image_id = get_post_thumbnail_id($post_to_use->ID);
					if ($post_image_id) {
						$thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
						if ($thumbnail) (string)$thumbnail = $thumbnail[0];
					}?>
					<!--The post with background, header, and content-->
					<div style="background-image: url('<?php echo $thumbnail; ?>');" class="box col-sm-12 col-md-3">
					<div class="box-content">
						<h3><?php the_title(); ?></h3>
						<?php the_content(); ?>

					<?php endwhile; wp_reset_postdata();?>
					</div>
					</div>
				</div>
					
				<div class="grid-box-wrap">
					<div class="box col-sm-12 col-md-3">
						<div class="box-content">
						<?php query_posts('p=71'); ?>
						<?php while (have_posts()) : the_post(); ?>
							<h3><?php the_title(); ?></h3>
							<?php the_content(); ?>
						<?php endwhile;?>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="grid-box-wrap-two wide">
				<!--Get Post by ID-->
				<?php query_posts('p=73'); ?>
				<?php while (have_posts()) : the_post(); ?>
					
					<!--Get the thumbnail for each post-->
					<?php $post_image_id = get_post_thumbnail_id($post_to_use->ID);
					if ($post_image_id) {
						$thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
						if ($thumbnail) (string)$thumbnail = $thumbnail[0];
					}?>
					<!--The post with background, header, and content-->
					<div style="background-image: url('<?php echo $thumbnail; ?>');" class="box col-sm-12 col-md-6">
							<div class="box-content">
							<h3><?php the_title(); ?></h3>
							<?php the_content(); ?>
						<?php endwhile;?>
						</div>
					</div>
				</div>	

				<div class="grid-box-wrap">
					<div class="box col-sm-12 col-md-3">
						<div class="box-content">
						<?php query_posts('p=75'); ?>
						<?php while (have_posts()) : the_post(); ?>
							<h3><?php the_title(); ?></h3>
							<?php the_content(); ?>
						<?php endwhile;?>
						</div>
					</div>
				</div>

				<div class="grid-box-wrap">		
							<!--Get Post by ID-->
				<?php query_posts('p=77'); ?>
				<?php while (have_posts()) : the_post(); ?>
					
					<!--Get the thumbnail for each post-->
					<?php $post_image_id = get_post_thumbnail_id($post_to_use->ID);
					if ($post_image_id) {
						$thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
						if ($thumbnail) (string)$thumbnail = $thumbnail[0];
					}?>
					<!--The post with background, header, and content-->
					<div style="background-image: url('<?php echo $thumbnail; ?>');" class="box col-sm-12 col-md-6">
							<div class="box-content">
							<h3><?php the_title(); ?></h3>
							<?php the_content(); ?>
						<?php endwhile;?>
						</div>
					</div>				
				</div>							
			</div><!--End portfolio grid-->
		</div><!--END PORTFOLIO GRID CONTAINER-->
		
		<div class="container four-widget-area"><!--BEGIN NEW CONTAINER-->
			<!--DETAILS SECTION FOUR WIDGET AREAS-->
			<div class="four-widget-content">
				
				<div class="row">
					<header class="col-sm-12">
						<h2>A look at the details</h2>
					</header>
				</div>
				<div class="row">
						<!--Widget Area One -->
						<div class="col-sm-12 col-md-3">
							<?php dynamic_sidebar( 'option-one') ?>
						</div>

						<!--Widget Area Two -->
						<div class="col-sm-12 col-md-3">
							<?php dynamic_sidebar( 'option-two') ?>
						</div>

						<!--Widget Area Three -->
						<div class="col-sm-12 col-md-3">
							<?php dynamic_sidebar( 'option-three') ?>
						</div>

						<!--Widget Area Four -->
						<div class="col-sm-12 col-md-3">
							<?php dynamic_sidebar( 'option-four') ?>
						</div>
				</div><!--end row-->
			</div><!--End four-widget-content-->
		</div><!--end four-widget-area-->
	</div><!--end Start section-->
</article><!-- #post-## -->
