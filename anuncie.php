<div class="wrap">
	<h1 class="interna-titulo"><span class="border"><?php echo get_the_title(); ?></span></h1>
	<div class="pg-interna-flex-grid flex">
		<div class="flex80">
			<p>Preencha os dados abaixo que entraremos em contato em breve!</p>
			<?php echo do_shortcode('[contact-form-7 id="182" title="Associe"]'); ?>
			<?php if(get_post_meta($post->ID, "URL", true)){ ?>
				<a class="btn btn9" href="<?php echo get_post_meta($post->ID, "URL", true); ?>"><span class="border">Clique e confira nosso Mídia Kit</span></a>
			<?php } ?>
			<?php the_content(); ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>


