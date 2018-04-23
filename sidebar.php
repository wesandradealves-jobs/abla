<aside id="sidebar" class="flex20">
	<?php 
	if(is_front_page()){
		?>
		<?php //if(function_exists('drawAdsBlock')) drawAdsBlock(array('id' => 2)); ?>
		<img data-type="publicidade" width="100%" src="http://spnoticias.com.br/wp-content/uploads/publicidade-300X300.jpg" />
		<div id="conheca-tambem" class="framed">
			<h2 class="border">Conheça Também</h2>
			<a title="Abla Jovem" href="https://www.facebook.com/ablajovem/" target="_blank"><img width="100%" src="<?php echo get_template_directory_uri(); ?>/assets/abla_jovem.png" alt="Abla"></a>
		</div>
		<div class="framed">
			<h2 class="border">Associe-se</h2>
			<a href="<?php bloginfo('url'); ?>/associe-se" class="btn btn4">Clique aqui</a>
			<p><a href="<?php bloginfo('url'); ?>/beneficios-aos-associados">Conheça os <span class="b">benefícios aqui</span></a></p>
		</div>
		<div id="newsletter">
			<h2 class="border">Newsletter</h2>
			<?php echo do_shortcode('[wysija_form id="2"]'); ?>
		</div>
		<div id="artigo">
			<h2 class="border">Artigos</h2>
			<?php
			$args = array('post_type' => 'artigos','posts_per_page' => 2, 'offset' => 0, 'order' => 'DESC');
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			$query = new WP_Query($args);
			if($query->have_posts()=="1"){
				while($query -> have_posts()) : $query -> the_post();
				?>
				<article>
					<h4 class="b"><?php echo get_the_title(); ?></h4>
					<div class="flex">
						<div class="flex70">
							<?php if(get_post_meta($post->ID, "Author", true)){ ?>
								<p class="b">por <?php echo get_post_meta($post->ID, "Author", true); ?></p>						  		
								<?php } else { ?>
									<p class="b">por <?php echo get_the_author(); ?></p>	
									<?php } ?>							
							<a class="b btn btn5" href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title()." | por ".get_the_author(); ?>">Continue lendo</a>
						</div>
						<div class="flex30">						
							<?php 
								if(wp_get_attachment_url(get_post_thumbnail_id($post->ID))){ ?>
								<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php echo get_post_meta($post->ID, "Author", true); ?>" />
							<?php
								} else {
									echo get_avatar( get_the_author_meta( 'ID' ), 300 ); 
								}
							?>
						</div>
					</div>
				</article>
				<?php
				endwhile;
				wp_reset_query();
			}
			?>
			<a href="<?php echo get_bloginfo('url')."/artigos"; ?>" class="b btn btn6">Ver mais artigos</a>
		</div>
		<!-- <img width="100%" src="?php echo get_template_directory_uri(); ?>/assets/midia_kit.jpg" alt="Conheça nosso Mídia Kit" /> -->
				<?php if(get_theme_mod( 'midia_kit_email' )||get_theme_mod( 'midia_kit_telefone' )||get_theme_mod( 'midia_kit_url' )) { ?>
				<div class="midia_kit">
					<div>
						<h2>Anuncie</h2>
						<?php if(get_theme_mod( 'midia_kit_url' )) { ?>
						<a href="<?php echo get_theme_mod( 'midia_kit_url' ); ?>" class="btn btn4">Conheça nosso Mídia Kit</a>
						<?php } ?>
						<?php if(get_theme_mod( 'midia_kit_email' )||get_theme_mod( 'midia_kit_telefone' )){ ?>
						<p>
							ÁREA COMERCIAL
							<a href="mailto:<?php echo get_theme_mod( 'midia_kit_email' ); ?>"><?php echo get_theme_mod( 'midia_kit_email' ); ?></a>
							<?php if(get_theme_mod( 'midia_kit_telefone' )){ ?>
							<br/>
							55 <?php echo get_theme_mod( 'midia_kit_telefone_ddd' ); ?> <span><?php echo get_theme_mod( 'midia_kit_telefone' ); ?></span>
							<?php } ?>
						</p>
						<?php } ?>
					</div>
				</div>
				<?php } ?>
		<img data-type="publicidade" width="100%" src="http://spnoticias.com.br/wp-content/uploads/publicidade-300X300.jpg" />
		<?php } else { 
			switch($post_slug=$post->post_name){
				case "contato":
				case "beneficios-aos-associados": ?>
				<div class="framed">
					<h2 class="border">Associe-se</h2>
					<a href="<?php bloginfo('url'); ?>/associe-se" class="btn btn4">Clique aqui</a>
					<p><a href="<?php bloginfo('url'); ?>/beneficios-aos-associados">Conheça os <span class="b">benefícios aqui</span></a></p>
				</div>
				<div id="newsletter">
					<h2 class="border">Newsletter</h2>
					<?php echo do_shortcode('[wysija_form id="2"]'); ?>
				</div>
				<!-- <img width="100%" src="?php echo get_template_directory_uri(); ?>/assets/midia_kit.jpg" alt="Conheça nosso Mídia Kit" /> -->
				<?php if(get_theme_mod( 'midia_kit_email' )||get_theme_mod( 'midia_kit_telefone' )||get_theme_mod( 'midia_kit_url' )) { ?>
				<div class="midia_kit">
					<div>
						<h2>Anuncie</h2>
						<?php if(get_theme_mod( 'midia_kit_url' )) { ?>
						<a href="<?php echo get_theme_mod( 'midia_kit_url' ); ?>" class="btn btn4">Conheça nosso Mídia Kit</a>
						<?php } ?>
						<?php if(get_theme_mod( 'midia_kit_email' )||get_theme_mod( 'midia_kit_telefone' )){ ?>
						<p>
							ÁREA COMERCIAL
							<a href="mailto:<?php echo get_theme_mod( 'midia_kit_email' ); ?>"><?php echo get_theme_mod( 'midia_kit_email' ); ?></a>
							<?php if(get_theme_mod( 'midia_kit_telefone' )){ ?>
							<br/>
							55 <?php echo get_theme_mod( 'midia_kit_telefone_ddd' ); ?> <span><?php echo get_theme_mod( 'midia_kit_telefone' ); ?></span>
							<?php } ?>
						</p>
						<?php } ?>
					</div>
				</div>
				<?php } ?>
		<?php

				break;
				case "associe-se": ?>
				<img data-type="publicidade" width="100%" src="http://spnoticias.com.br/wp-content/uploads/publicidade-300X300.jpg" />
				<div id="newsletter">
					<h2 class="border">Newsletter</h2>
					<?php echo do_shortcode('[wysija_form id="2"]'); ?>
				</div>
				<!-- <img width="100%" src="?php echo get_template_directory_uri(); ?>/assets/midia_kit.jpg" alt="Conheça nosso Mídia Kit" /> -->
				<?php if(get_theme_mod( 'midia_kit_email' )||get_theme_mod( 'midia_kit_telefone' )||get_theme_mod( 'midia_kit_url' )) { ?>
				<div class="midia_kit">
					<div>
						<h2>Anuncie</h2>
						<?php if(get_theme_mod( 'midia_kit_url' )) { ?>
						<a href="<?php echo get_theme_mod( 'midia_kit_url' ); ?>" class="btn btn4">Conheça nosso Mídia Kit</a>
						<?php } ?>
						<?php if(get_theme_mod( 'midia_kit_email' )||get_theme_mod( 'midia_kit_telefone' )){ ?>
						<p>
							ÁREA COMERCIAL
							<a href="mailto:<?php echo get_theme_mod( 'midia_kit_email' ); ?>"><?php echo get_theme_mod( 'midia_kit_email' ); ?></a>
							<?php if(get_theme_mod( 'midia_kit_telefone' )){ ?>
							<br/>
							55 <?php echo get_theme_mod( 'midia_kit_telefone_ddd' ); ?> <span><?php echo get_theme_mod( 'midia_kit_telefone' ); ?></span>
							<?php } ?>
						</p>
						<?php } ?>
					</div>
				</div>
				<?php } ?>
		<?php
				break;
				default: ?>
				<img data-type="publicidade" width="100%" src="http://spnoticias.com.br/wp-content/uploads/publicidade-300X300.jpg" />
				<div class="framed">
					<h2 class="border">Associe-se</h2>
					<a href="<?php bloginfo('url'); ?>/associe-se" class="btn btn4">Clique aqui</a>
					<p><a href="<?php bloginfo('url'); ?>/beneficios-aos-associados">Conheça os <span class="b">benefícios aqui</span></a></p>
				</div>
				<div id="newsletter">
					<h2 class="border">Newsletter</h2>
					<?php echo do_shortcode('[wysija_form id="2"]'); ?>
				</div>
				<!-- <img width="100%" src="?php echo get_template_directory_uri(); ?>/assets/midia_kit.jpg" alt="Conheça nosso Mídia Kit" /> -->
				<?php if(get_theme_mod( 'midia_kit_email' )||get_theme_mod( 'midia_kit_telefone' )||get_theme_mod( 'midia_kit_url' )) { ?>
				<div class="midia_kit">
					<div>
						<h2>Anuncie</h2>
						<?php if(get_theme_mod( 'midia_kit_url' )) { ?>
						<a href="<?php echo get_theme_mod( 'midia_kit_url' ); ?>" class="btn btn4">Conheça nosso Mídia Kit</a>
						<?php } ?>
						<?php if(get_theme_mod( 'midia_kit_email' )||get_theme_mod( 'midia_kit_telefone' )){ ?>
						<p>
							ÁREA COMERCIAL
							<a href="mailto:<?php echo get_theme_mod( 'midia_kit_email' ); ?>"><?php echo get_theme_mod( 'midia_kit_email' ); ?></a>
							<?php if(get_theme_mod( 'midia_kit_telefone' )){ ?>
							<br/>
							55 <?php echo get_theme_mod( 'midia_kit_telefone_ddd' ); ?> <span><?php echo get_theme_mod( 'midia_kit_telefone' ); ?></span>
							<?php } ?>
						</p>
						<?php } ?>
					</div>
				</div>
				<?php } ?>
		<?php
				break;
			}
		} ?>
</aside>