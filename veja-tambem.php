			<div class="separador"><span class="border">Veja Também</span></div>
			<ul class="veja-tambem flex">
			<?php 
				global $post;
				$args = array( 'numberposts' => 3, 'category_name' => 'veja-tambem', 'order' => 'DESC' );
				$posts = get_posts( $args );
				foreach( $posts as $post ): setup_postdata($post); 
			?>
			<li class="flex33" onclick="document.location='<?php echo get_the_permalink(); ?>'; return false;">
				<div>
					<div class="b thumb" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>)"><!-- --></div>
					<p class="b"><?php echo get_the_title(); ?></p>
				</div>
			</li>
			<?php
				endforeach; 
			?>
			</ul>