<!-- links úteis -->
<div id="links-uteis">
<?php 
$query = new WP_Query( array( 'post_type' => 'links_uteis', 'order' => 'DESC') ); 
if($query->have_posts()=="1"){
	?>
	<p>Links úteis</p>
	<ul>
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>
		<li>
		<?php if(wp_get_attachment_url(get_post_thumbnail_id($post->ID))) { ?>
			<?php if(get_post_meta($post->ID, "URL", true)) { ?>
			<a href="<?php echo get_post_meta($post->ID, "URL", true); ?>" title="<?php echo get_the_title(); ?>"> 
				<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" /> 
			</a>
			<?php } else { ?>
				<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" /> 
			<?php } ?>
		<?php } else { ?>
			<?php if(get_post_meta($post->ID, "URL", true)) { ?>
				<p>
					<a href="<?php echo get_post_meta($post->ID, "URL", true); ?>" title="<?php echo get_the_title(); ?>"> 
						<?php echo get_the_title(); ?> 
					</a>
				</p>
				<?php } else { ?>
				<p>
					<?php echo get_the_title(); ?> 
				</p>
				<?php } ?>
		<?php } ?>
		</li>
		<?php endwhile; wp_reset_query(); ?> 
	</ul> 
	<?php } ?>
</div>