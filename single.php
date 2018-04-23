<?php get_header(); ?>
<main>
	<?php if(get_post_type()!="artigos"){ ?>
		<?php if(get_post_type()=="post"){ ?>
			<section id="webdoor" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id(15)); ?>);">
                <div class="flex">
                	<div class="wrap">
                		<h1>
		                   	<?php
		                    	echo get_the_title(15);
		                  	?> 
                		</h1>
                	</div>
                </div>
			</section>
		<?php } else { ?>
			<section id="webdoor" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>);"><!-- --></section>
		<?php } ?>
	<?php } ?>
	<div class="wrap">
		<div class="pg-interna-flex-grid flex">
			<div class="flex80">
				<div id="noticias">
				  <?php if ( have_posts () ) : while (have_posts()):the_post(); ?>
						  <article id="post_<?php echo $post->ID; ?>" class="noticia-item">
						  	<?php if(get_post_type()=="post"){ ?>
						  	<div class="noticia-pos-heading">
						  		<div class="separador"><?php the_category(); ?></div>
						  	</div>
						  	<?php } ?>
							<h1 class="interna-titulo c">
								<span><?php echo get_the_title(); ?> </span>
						  		<div class="share"><?php echo do_shortcode("[wp_social_sharing social_options='facebook,twitter,googleplus' twitter_username='arjun077' facebook_text='' twitter_text='' icon_order='f,t,g' show_icons='1']"); ?></div>
							</h1>
							<?php if(get_post_type()!="artigos"){ ?>
						  	<img style="width:100% !important;" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php echo get_the_title(); ?>">
						  	<h4>por <?php echo get_the_author(); ?></h4>
						  	<?php } else { ?>
						  		<?php if(get_post_meta($post->ID, "Author", true)){ ?>
								<h4>por <?php echo get_post_meta($post->ID, "Author", true); ?></h4>						  		
						    	<?php } else { ?>
						    	<h4>por <?php echo get_the_author(); ?></h4>	
						    	<?php } ?>
						    <?php } ?>
						    <?php the_content(); ?>
						  </article>
				    <?php endwhile; ?>
				  <?php endif; ?> 	
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</main>
<?php get_footer(); ?>