<div class="wrap">
	<h1 class="interna-titulo"><span class="border"><?php echo get_the_title(); ?></span></h1>
	<div class="pg-interna-flex-grid flex">
		<div class="flex80">
			<?php echo do_shortcode('[contact-form-7 id="182" title="Associe"]'); ?>
			<div class="separador separador-3">Conheça as regras para se tornar um associado</div>
			<?php the_content(); ?>
			<?php if(get_post_meta($post->ID, "URL", true)){ ?>
				<a class="btn btn7" href="<?php echo get_post_meta($post->ID, "URL", true); ?>"><span class="border">Baixe nossa ficha de cadastro</span></a>
			<?php } ?>
				<a class="btn btn8" href="<?php bloginfo('url'); ?>/beneficios-aos-associados"><span class="border">Descubra os benefícios de se associar</span></a>
			<img data-type="publicidade" width="100%" src="http://voxnews.com.br/wp-content/uploads/2013/09/banner-anuncie-aqui.jpg" />
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>


