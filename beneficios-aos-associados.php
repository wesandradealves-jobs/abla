<div class="wrap">
	<h1 class="interna-titulo"><span class="border"><?php echo get_the_title(); ?></span></h1>
	<div class="pg-interna-flex-grid flex">
		<div class="flex80">
			<ul id="filtro-pai" class="abas flex">
				<?php

				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

				$args = array(
				    'post_type'      => 'page',
				    'posts_per_page' => -1,
				    'post_parent'    => $post->ID,
				    'order'          => 'ASC',
				    'orderby'        => 'menu_order',
				    'posts_per_page' => 3, 
				    'offset' => 0
				);


				$parent = new WP_Query( $args );

				if ( $parent->have_posts() ) : ?>

				    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

				        <li class="flex33 flex" id="parent-<?php echo the_ID(); ?>">
				        	<div class="flex100">
				        		<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php echo get_the_title(); ?>">
				        		<p><?php echo get_the_title(); ?></p>
				        	</div>
				        </li>

				    <?php endwhile; ?>

				<?php endif; wp_reset_query(); ?>				
			</ul>

			<div id="filtro-pai" class="articles">
			<?php

			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

			$args = array(
			    'post_type'      => 'page',
			    'posts_per_page' => -1,
			    'post_parent'    => $post->ID,
			    'order'          => 'ASC',
			    'orderby'        => 'menu_order',
			    'posts_per_page' => 3, 
			    'offset' => 0
			);


			$parent = new WP_Query( $args );

			if ( $parent->have_posts() ) : ?>

			    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

			        <article id='parent-<?php echo the_ID(); ?>' data-value='parent-<?php echo the_ID(); ?>' class='parent-page'>
						<?php the_content(); ?>
			        </article>

			    <?php endwhile; ?>

			<?php endif; wp_reset_query(); ?>
			</div>

			<div class="separador separador-3">Clique e conheça outros benefícios aos associados</div>

			<ul class="filtro2 filtro">
				<!-- <li><span class="border">Clique e navegue nas áreas</span></li> -->
				<li>
					<ul id="filtro-filho" class="submenu">

						<?php

						$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

						$args = array(
						    'post_type'      => 'page',
						    'posts_per_page' => -1,
						    'post_parent'    => $post->ID,
						    'order'          => 'DESC',
						    'orderby'        => 'menu_order',
						    'posts_per_page' => 3, 
						    'offset' => 0
						);


						$parent = new WP_Query( $args );

						if ( $parent->have_posts() ) : ?>

						    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

						        <li <?php if(get_the_title()=="Financiamento"){ echo 'class="ativa"'; } ?>>
						        	<label class='radio'><input <?php if(get_the_title()=="Financiamento"){ echo 'checked="checked"'; } ?> type='radio' name='filtro' value='parent-<?php the_ID(); ?>' id='parent-<?php the_ID(); ?>'  /> <span></span> <?php echo get_the_title(); ?> </label>
						        </li>

						    <?php endwhile; ?>

						<?php endif; wp_reset_query(); ?>	


					</ul>
				</li>
			</ul>	

			<div id="filtro-filho" class="articles">
						<?php

						$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

						$args = array(
						    'post_type'      => 'page',
						    'posts_per_page' => -1,
						    'post_parent'    => $post->ID,
						    'order'          => 'DESC',
						    'orderby'        => 'menu_order',
						    'posts_per_page' => 3, 
						    'offset' => 0
						);


						$parent = new WP_Query( $args );

						if ( $parent->have_posts() ) : ?>

						    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

						        <article id='parent-<?php the_ID(); ?>' data-value='parent-<?php the_ID(); ?>' class='parent-page'>
						        	<?php the_content(); ?>
						        </article>

						    <?php endwhile; ?>

						<?php endif; wp_reset_query(); ?>	
				
			</div>
			<?php include("veja-tambem.php"); ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>


