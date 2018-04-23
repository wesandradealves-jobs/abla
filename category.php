<?php get_header(); ?>
<main>
	<div class="wrap">
	<div class="pg-interna-flex-grid flex">
		<div class="flex80">
				<h1 class="interna-titulo"><span class="border"><?php single_cat_title(); ?></span></h1>
				<div id="noticias">
				  <?php if ( have_posts () ) : while (have_posts()):the_post(); ?>
						  <article id="post_<?php echo $post->ID; ?>" class="noticia-item">
						  	<div class="thumb" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>)"><!-- --></div>
						  	<?php if(get_post_type( get_the_ID())=="post"){ ?>
						  	<div class="noticia-pos-heading">
						  		<div class="separador"><?php the_category(); ?></div>
						  		<div class="share"><?php echo do_shortcode("[wp_social_sharing social_options='facebook,twitter,googleplus' twitter_username='arjun077' facebook_text='' twitter_text='' icon_order='f,t,g' show_icons='1']"); ?></div>
						  	</div>
						  	<?php } ?>
						    <h1><?php echo get_the_title(); ?></h1>
						    <h4>por <?php echo get_the_author(); ?></h4>
						    <p><?php echo get_the_excerpt(); ?></p>
						    <a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>">Continue Lendo</a>
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


