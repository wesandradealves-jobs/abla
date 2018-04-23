<div class="wrap">
	<h1 class="interna-titulo"><span class="border"><?php echo get_the_title(); ?></span></h1>
	<div class="pg-interna-flex-grid flex">
		<div class="flex80">
			<div id="noticias">
				<?php
					$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
				  	$custom_args = array(
				      'post_type' => 'setor',
				      'posts_per_page' => 2,
				      'paged' => $paged
				    );
				  	$custom_query = new WP_Query( $custom_args ); 
				?>

				  	<?php if ( $custom_query->have_posts() ) : ?>

				    <!-- the loop -->
				    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
						  <article id="post_<?php echo $post->ID; ?>" class="noticia-item">
						  	<div class="thumb" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>)"><!-- --></div>
						  	<div class="noticia-pos-heading">
						  		<div class="share"><?php echo do_shortcode("[wp_social_sharing social_options='facebook,twitter,googleplus' twitter_username='arjun077' facebook_text='' twitter_text='' icon_order='f,t,g' show_icons='1']"); ?></div>
						  	</div>
						    <h1><?php echo get_the_title(); ?></h1>
						    <h4>por <?php echo get_the_author(); ?></h4>
						    <?php the_content(); ?>
						  </article>
				    <?php endwhile; ?>
				    <!-- end of the loop -->

				    <!-- pagination here -->
				    <?php
				      if (function_exists(custom_pagination)) {
				        custom_pagination($custom_query->max_num_pages,"",$paged);
				      }
				    ?>

				  	<?php wp_reset_postdata(); ?>

				<?php endif; ?>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>