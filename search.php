<?php get_header(); ?>
<main>
	<section id="webdoor" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/busca.jpg);">
		<div class="flex">
			<div class="wrap">
				<h1>Busca</h1>
			</div>
		</div>
	</section>
	<div class="wrap">
	<h1 class="interna-titulo"><span class="border">Busca</span></h1>
	<div class="pg-interna-flex-grid flex">
		<div class="flex80">
			<div id="busca-header">
				<h4><?php _e( 'Você buscou por', 'locale' ); ?>: "<?php the_search_query(); ?>"</h4>
				<p>Encontramos <?php echo $wp_query->found_posts; ?> resultados</p>				
			</div>
			<div id="noticias">
				<?php if (have_posts()): while (have_posts()) : the_post();?>
				<article id="post_<?php echo $post->ID; ?>" class="noticia-item">
					<?php if(wp_get_attachment_url(get_post_thumbnail_id($post->ID))&&get_post_type( get_the_ID())=="post"){ ?>
						<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php echo get_the_title(); ?>">
					<?php } ?>
					<h1><?php the_title(); ?></h1>
					<p>
						<?php 
							if(get_post_type( get_the_ID())!="diretoria"){
								echo get_the_excerpt(); 
							} else {
								echo get_post_meta($post->ID, "Cargo", true);
							}
						?>
					</p>
					<?php if(get_post_type( get_the_ID())!="diretoria"){ ?>
					<a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>">Continue Lendo</a>
					<?php } else { ?>
					<a href="<?php bloginfo('url'); ?>/quem-somos" title="Visitar Página">Visitar Página</a>
					<?php } ?>
				</article>
				<?php endwhile; else:?>
				<h4>Desculpe! Não encontramos essa palavra.</h4>
				<?php endif;?> 				
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
	</div>
</main>
<?php get_footer(); ?>


