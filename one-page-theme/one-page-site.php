<?php
/**
 * Template Name: One Page Site
 */

get_header(); ?>

<div id="primary" class="content-area container-fluid">
	<main id="main" class="site-main" role="main">
		<div class="row">


		
			<div class="col-sm-12">
				<?php 

				$args = array(
					'post_type' => 'page',
					'order' => 'ASC',
					'category_name' => 'front-page'
					);
				$the_query = new WP_Query($args);

				?>

				<?php

				while($the_query->have_posts() ) : $the_query->the_post(); ?>


				<?php 
				global $post;
				$slug=$post->post_name;
				get_template_part('content', $slug);

			//	var_dump($slug);
				?>

			<?php endwhile; ?>


		</div><!--end post column-->
	</div>
</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
