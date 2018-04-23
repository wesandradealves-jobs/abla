<div class="wrap">
	<h1 class="interna-titulo"><span class="border"><?php echo get_the_title(); ?></span></h1>
	<div class="pg-interna-flex-grid flex">
		<div class="flex80">
			<div id="imprensa">
				<?php
				  	$custom_args = array(
				      'post_type' => 'imprensas'
				    );

				  	$custom_query = new WP_Query( $custom_args ); 
				?>

				  	<?php if ( $custom_query->have_posts() ) : ?>

				    <!-- the loop -->
				    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
						  <article id="post_<?php echo $post->ID; ?>">
						    <h3><?php echo get_the_title(); ?></h3>
						    <p><?php echo get_the_excerpt(); ?></p>
							<?php if(get_post_meta($post->ID, "URL", true)){ ?>
								<a target="_blank" class="btn btn_default" title="Download" href="<?php echo get_post_meta($post->ID, "URL", true); ?>">Download</a>
							<?php } ?>
						  </article>
				    <?php endwhile; ?>
				  	<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
			<div id="assessoria" class="flex">
				<div class="flex40">
					<h1>Assessoria de Imprensa ABLA</h1>
				</div>
				<div class="flex60">
					<h3><?php echo get_post_meta($post->ID, "Assessora de Imprensa", true); ?></h3>
					<p><a href="mailto:<?php echo get_post_meta($post->ID, "Contato", true); ?>" title="<?php echo get_post_meta($post->ID, "Contato", true); ?>"><?php echo get_post_meta($post->ID, "Contato", true); ?></a></p>
					<p>Fone <?php echo get_post_meta($post->ID, "Telefone", true); ?> - <a title="abla@abla.com.br" href="mailto:abla@abla.com.br">abla@abla.com.br</a></p>
				</div>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>


