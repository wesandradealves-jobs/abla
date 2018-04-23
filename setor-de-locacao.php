<div class="wrap">
	<ul class="filtro2 filtro">
		<li><span class="border">Clique e navegue nas áreas</span></li>
		<li>
			<ul id="filtro-pai" class="submenu">
				<?php

				$args = array(
				    'post_type'      => 'page',
				    'posts_per_page' => -1,
				    'post_parent'    => $post->ID,
				    'order'          => 'ASC',
				    'orderby'        => 'menu_order'
				 );


				$parent = new WP_Query( $args );

				if ( $parent->have_posts() ) : ?>

				    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

				        <li <?php if(get_the_title()=="Desempenho Regional"){ echo 'class="ativa"'; } ?>>
				        	<label class='radio'><input <?php if(get_the_title()=="Desempenho Regional"){ echo 'checked="checked"'; } ?> type='radio' name='filtro' value='parent-<?php the_ID(); ?>' id='parent-<?php the_ID(); ?>'  /> <span></span> <?php echo get_the_title(); ?> </label>
				        </li>

				    <?php endwhile; ?>

				<?php endif; wp_reset_query(); ?>
			</ul>
		</li>
	</ul>	
	<h1 class="interna-titulo"><span class="border"><?php echo get_the_title(); ?></span></h1>
	<div class="pg-interna-flex-grid flex">
		<div class="flex80">
			<div id="filtro-pai" class="articles">
				<?php

				$args = array(
				    'post_type'      => 'page',
				    'posts_per_page' => -1,
				    'post_parent'    => $post->ID,
				    'order'          => 'ASC',
				    'orderby'        => 'menu_order'
				 );


				$parent = new WP_Query( $args );

				if ( $parent->have_posts() ) : ?>

				    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
						<?php if(get_the_title()!="Desempenho Regional"){ ?>
				        <article id="parent-<?php the_ID(); ?>" data-value="parent-<?php the_ID(); ?>" class="parent-page">
				        	<h2 class="interna-titulo"><?php echo get_the_title(); ?></h2>
				        	<?php the_content(); ?>
				        </article>
						<?php } else { ?>
				        <article id="parent-<?php the_ID(); ?>" data-value="parent-<?php the_ID(); ?>" class="parent-page">
				        	<h2 class="interna-titulo"><?php echo get_the_title(); ?></h2>
				        	<?php the_content(); ?>
				        	<div class="separador separador-2">
				        		Download
				        	</div>
							<?php 
							  $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
							  $query = new WP_Query( array( 'post_type' => 'anuario', 'posts_per_page' => 1, 'offset' => 0, 'order' => 'DESC') );
							  if($query->have_posts()=="1"){
							    while ( $query->have_posts() ) : $query->the_post(); ?>
							    <div class="flex">
							    	<div class="flex50">
							    		<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php echo get_the_title(); ?>">
							    	</div>
							    	<div class="flex50">
							    		<h2><?php echo get_the_title(); ?> <span><?php echo get_post_meta($post->ID, "Ano", true); ?></span></h2>
							    		<?php if(get_post_meta($post->ID, "URL", true)){ ?>
							    		<a title="<?php echo get_the_title(); ?>" href="<?php echo get_post_meta($post->ID, "URL", true); ?>" class="b">Baixe Aqui</a>
							    		<?php } ?>
							    	</div>
							    </div>
							    <?php endwhile; 
							    wp_reset_query();   
							  }
							?>
				        </article>
						<?php } ?>
				    <?php endwhile; ?>

				<?php endif; wp_reset_query(); ?>
			</div>
			<?php if(get_the_title()=="Desempenho Regional"){ 
			 include("veja-tambem.php");  
			} ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>


