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
					'orderby' => 'menu_order',
					'category_name' => 'masthead, start, full-image, three-col-grid, subscribe-options, contact'
					);
				$the_query = new WP_Query($args);

				?>

				<?php

				while($the_query->have_posts() ) : $the_query->the_post(); ?>


				<?php 
				global $post;
				$categories=get_the_category();
				$cat_name = $categories[0]->slug;
				get_template_part('content', $cat_name);

				//var_dump($cat_name);
				?>

			<?php endwhile; ?>


		</div><!--end post column-->
	</div>
</main><!-- #main -->
</div><!-- #primary -->
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js" async></script>

<?php get_footer(); ?>
