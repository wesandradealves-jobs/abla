<div class="wrap">
	<h1 class="interna-titulo"><span class="border"><?php echo get_the_title(); ?></span></h1>
	<div class="pg-interna-flex-grid flex">
		<div class="flex80">
			<?php if(get_post_meta($post->ID, "titulo", true)){ ?>
				<h4><?php echo get_post_meta($post->ID, "titulo", true); ?></h4>
			<?php } if(get_post_meta($post->ID, "subtitulo", true)){  ?>
				<p><?php echo get_post_meta($post->ID, "subtitulo", true); ?></p>
			<?php } ?>		
			<!-- anuarios -->
			<?php $query = new WP_Query( array( 'post_type' => 'publicacoes', 'tax_query' => array(
				array('taxonomy' => 'publicacoes_categories','field'    => 'slug','terms'    => 'anuario-abla'
					),), 'posts_per_page' => 1, 'offset' => 0, 'order' => 'DESC') ); 
			if($query->have_posts()=="1"){ ?>
				<h5><span class="border">Anuários</span></h5>
				<div class="flex sessao">
					<div class="flex100 flex">
						<div class="flex50 flex">
							<?php
							while ( $query->have_posts() ) : $query->the_post();
							$ids[]= $post->ID;
							?>
							<div class="flex50">
								<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" />
							</div>
							<div class="flex50">
								<h3><?php echo get_the_title(); ?></h3>
								<p><?php echo get_the_excerpt(); ?></p>
								<?php if(get_post_meta($post->ID, "arquivo", true)||get_post_meta($post->ID, "arquivo", true)!=""){ ?>
								<a href="<?php echo get_post_meta($post->ID, "arquivo", true); ?>" class="b btn btn_default">BAIXE AQUI</a>
								<?php } ?>
							</div>
						<?php endwhile;  wp_reset_query(); ?> 
					</div>
					<div class="flex50">
						<h4>Edições Anteriores</h4>
						<br/>
						<?php 
							$query = new WP_Query( array( 'post_type' => 'publicacoes', 'tax_query' => array(
					array('taxonomy' => 'publicacoes_categories','field'    => 'slug','terms'    => 'anuario-abla'
						),), 'order' => 'DESC') ); 
							while ( $query->have_posts() ) : $query->the_post();
								if (!in_array($post->ID, $ids)) {
						?>
							<?php if(get_post_meta($post->ID, "arquivo", true)) { ?>
								<a href="<?php echo get_post_meta($post->ID, "arquivo", true); ?>" title="<?php echo get_the_title(); ?>">> <?php echo get_the_title(); ?></a>
							<?php } else { ?>
								<p>> <?php echo get_the_title (); ?></p>
							<?php } ?>
						<?php } endwhile;  wp_reset_query(); ?> 
					</div>
				</div>
			</div> 
			<?php } ?>
			<!-- revistas -->
			<?php $query = new WP_Query( array( 'post_type' => 'publicacoes', 'tax_query' => array(
				array('taxonomy' => 'publicacoes_categories','field'    => 'slug','terms'    => 'revista-locacao'
					),), 'posts_per_page' => 1, 'offset' => 0, 'order' => 'DESC') ); 
			if($query->have_posts()=="1"){ ?>
				<h5><span class="border">Revistas</span></h5>
				<div class="flex sessao">
					<div class="flex100 flex">
						<div class="flex50 flex">
							<?php
							while ( $query->have_posts() ) : $query->the_post();
							$ids[]= $post->ID;
							?>
							<div class="flex50">
								<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" />
							</div>
							<div class="flex50">
								<h3><?php echo get_the_title(); ?></h3>
								<p><?php echo get_the_excerpt(); ?></p>
								<?php if(get_post_meta($post->ID, "arquivo", true)||get_post_meta($post->ID, "arquivo", true)!=""){ ?>
								<a href="<?php echo get_post_meta($post->ID, "arquivo", true); ?>" class="b btn btn_default">BAIXE AQUI</a>
								<?php } ?>
							</div>
						<?php endwhile;  wp_reset_query(); ?> 
					</div>
					<div class="flex50">
						<h4>Edições Anteriores</h4>
						<br/>
						<?php 
							$query = new WP_Query( array( 'post_type' => 'publicacoes', 'tax_query' => array(
					array('taxonomy' => 'publicacoes_categories','field' => 'slug','terms'    => 'revista-locacao'
						),), 'order' => 'DESC') ); 
							while ( $query->have_posts() ) : $query->the_post();
								if (!in_array($post->ID, $ids)) {
						?>
							<?php if(get_post_meta($post->ID, "arquivo", true)) { ?>
								<a href="<?php echo get_post_meta($post->ID, "arquivo", true); ?>" title="<?php echo get_the_title(); ?>">> <?php echo get_the_title(); ?></a>
							<?php } else { ?>
								<p>> <?php echo get_the_title (); ?></p>
							<?php } ?>
						<?php } endwhile;  wp_reset_query(); ?> 
					</div>
				</div>
			</div> 
			<?php } ?>		
			<!-- boletins -->
			<?php $query = new WP_Query( array( 'post_type' => 'publicacoes', 'tax_query' => array(
				array('taxonomy' => 'publicacoes_categories','field'    => 'slug','terms'    => 'boletins-abla-news'
					),), 'posts_per_page' => 1, 'offset' => 0, 'order' => 'DESC') ); 
			if($query->have_posts()=="1"){ ?>
				<h5><span class="border">Boletins</span></h5>
				<div id="boletins" class="flex sessao">
					<div class="flex100 flex">
						<div class="flex50 flex">
							<?php
							while ( $query->have_posts() ) : $query->the_post();
							$ids[]= $post->ID;
							?>
							<div class="flex50">
								<img src="http://abla.com.br/area_restrita/wp-content/uploads/2016/08/envelope.png" />
							</div>
							<div class="flex50">
								<h3><?php echo get_the_title(); ?></h3>
								<p><?php echo get_the_excerpt(); ?></p>
								<?php if(get_post_meta($post->ID, "arquivo", true)||get_post_meta($post->ID, "arquivo", true)!=""){ ?>
								<a href="<?php echo get_post_meta($post->ID, "arquivo", true); ?>" class="b btn btn_default">BAIXE AQUI</a>
								<?php } ?>
							</div>
						<?php endwhile;  wp_reset_query(); ?> 
					</div>
					<div class="flex50">
						<h4>Edições Anteriores</h4>
						<br/>
						<?php 
							$query = new WP_Query( array( 'post_type' => 'publicacoes', 'tax_query' => array(
					array('taxonomy' => 'publicacoes_categories','field' => 'slug','terms'    => 'boletins-abla-news'
						),), 'order' => 'DESC') ); 
							while ( $query->have_posts() ) : $query->the_post();
								if (!in_array($post->ID, $ids)) {
						?>
							<?php if(get_post_meta($post->ID, "arquivo", true)) { ?>
								<a href="<?php echo get_post_meta($post->ID, "arquivo", true); ?>" title="<?php echo get_the_title(); ?>">> <?php echo get_the_title(); ?></a>
							<?php } else { ?>
								<p>> <?php echo get_the_title (); ?></p>
							<?php } ?>
						<?php } endwhile;  wp_reset_query(); ?> 
					</div>
				</div>
			</div> 
			<?php } include('links-uteis.php'); ?>	
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>


