<div class="wrap">
	<h1 class="interna-titulo"><span class="border"><?php echo get_the_title(); ?></span></h1>
	<div class="pg-interna-flex-grid flex">
		<div class="flex80">
			<?php the_content(); ?>
			<div id="contato" class="flex">
				<div class="flex50">
					<?php echo do_shortcode('[contact-form-7 id="47" title="Contato"]'); ?>
				</div>
				<div class="flex50">
					<h4>Se preferir, entre em contato via:</h4>
					<ul>
						<?php 
						  $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
						  $query = new WP_Query( array( 'post_type' => 'contatos', 'order' => 'ASC') );
						  if($query->have_posts()=="1"){
						    while ( $query->have_posts() ) : $query->the_post(); ?>
						    	<li>
						    		<p>
						    			<strong class="b"><?php echo get_the_title(); ?></strong>
						    			<br/>
						    		</p>
						    		<?php the_content(); ?>
						    	</li>
						    <?php endwhile; 
						    wp_reset_query();   
						  }
						?>						
					</ul>
				</div>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>


