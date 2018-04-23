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

				        <li <?php if(get_the_title()=="História"){ echo 'class="ativa"'; } ?>>
				        	<label class='radio'><input <?php if(get_the_title()=="História"){ echo 'checked="checked"'; } ?> type='radio' name='filtro-pai' value='parent-<?php the_ID(); ?>' id='parent-<?php the_ID(); ?>'  /> <span></span> <?php echo get_the_title(); ?> </label>
				        </li>

				    <?php endwhile; ?>

				<?php endif; wp_reset_query(); ?>
			</ul>
		</li>
	</ul>	
	<h1 class="interna-titulo"><span class="border"><?php echo get_the_title(); ?></span></h1>
	<div class="pg-interna-flex-grid flex">
			<div class="flex100">	
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
						<article id="parent-<?php the_ID(); ?>" data-value="parent-<?php the_ID(); ?>" class="parent-page">
								<div class="flex">
									<div class="flex100">	
											<h2 class="interna-titulo flex100"><?php echo get_the_title(); ?></h2>
						        			<?php if(get_the_title()!="Diretoria"){ ?>
													<?php if(wp_get_attachment_url(get_post_thumbnail_id($post->ID))){ ?>
															<img class="b" width="100%" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php echo get_the_title(); ?>">
													<?php }  ?>
						        			<?php }  ?>
									</div>
									<div class="flex80">	
					        			<?php if(get_the_title()!="Diretoria"){ ?>
						        			<?php the_content(); ?>
					        			<?php } else { ?>
							        		<ul class="filtro filtro3">
							        			<li>Selecione para conhecer nossos representantes</li>
							        			<li>
							        				<ul id="filtro-filho" class="submenu">
												        <?php 
												          $terms = get_terms( 'diretoria_categories' );
												          foreach ( $terms as $term ) {
												            echo "<li "; if(strtolower($term->slug)=="comercial"){ echo 'class="ativa"'; } echo "><label class='radio' for='".strtolower($term->slug)."'><input "; if(strtolower($term->slug)=="conselho-fiscal"){ echo 'checked="checked"'; } echo " type='radio' name='filtro-filho' id='".strtolower($term->slug)."' value='".strtolower($term->slug)."' /> <span></span> ".$term->name."</label></li>";
												          }                                
												        ?>
											        </ul>
							        			</li>
							        		</ul>
							        		<div id="filtro-filho" class="articles">
							        		<?php
												$taxonomy = 'diretoria_categories';
												$term_args=array(
												  'orderby' => 'name',
												  'order' => 'ASC'
												);
												$terms = get_terms($taxonomy,$term_args);
												if ($terms) {
												  	foreach( $terms as $term ) {
												    $args=array(
												      'post_type' => 'diretoria',
												      'post_status' => 'publish',
												      'parent' => 0,
												      'posts_per_page' => -1,
												      'caller_get_posts'=> 1,
													  'tax_query' => array(
															array(
																'taxonomy' => 'diretoria_categories',
																'terms' => array($term->term_id),
																'include_children' => true,
																'operator' => 'IN'
															)
														)
												    );
												    $my_query = null;
												    $my_query = new WP_Query($args);
												    if( $my_query->have_posts() ) {  
											?>
											<article data-value="<?php echo $term->slug; ?>" id="<?php echo $term->slug; ?>">
									      			<h1 class="mast-cat-tit">Biênio <?php echo date('Y'); ?>-<?php echo date('Y')+1; ?></h1>
									      			<?php if(strtolower($term->slug)=="diretoria-regional"){ ?>
									      			<ul id="slide_diretoria">
													    <?php
													      while ($my_query->have_posts()) : $my_query->the_post(); ?>
													      		<?php if(get_post_meta($post->ID, "Cargo", true)!="Titulares Categoria Rede"&&get_post_meta($post->ID, "Cargo", true)!="Titulares Categoria Independente"&&get_post_meta($post->ID, "Cargo", true)!="Suplentes Categoria Rede"&&get_post_meta($post->ID, "Cargo", true)!="Suplentes Categoria Independente") { ?> 
													      			<li class="flex50">
													      				<div class="thumb" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>);"><!-- --></div>
													      				<p class="b">
													      					<strong class="b"><?php echo get_post_meta($post->ID, "Cargo", true); ?></strong> 
													      					<?php echo get_the_title(); ?>
													      				</p>
													      			</li>
													      		<?php } ?>
													    <?php endwhile; ?>
												    </ul>
												    <?php } else { ?>
									      			<ul class="flex">
													    <?php
													      while ($my_query->have_posts()) : $my_query->the_post(); ?>
													      		<?php if(get_post_meta($post->ID, "Cargo", true)!="Titulares Categoria Rede"&&get_post_meta($post->ID, "Cargo", true)!="Titulares Categoria Independente"&&get_post_meta($post->ID, "Cargo", true)!="Suplentes Categoria Rede"&&get_post_meta($post->ID, "Cargo", true)!="Suplentes Categoria Independente") { ?> 
													      			<li class="flex50">
													      				<div class="thumb" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>);"><!-- --></div>
													      				<p class="b">
													      					<strong class="b"><?php echo get_post_meta($post->ID, "Cargo", true); ?></strong> 
													      					<?php echo get_the_title(); ?>
													      				</p>
													      			</li>
													      		<?php } ?>
													    <?php endwhile; ?>
												    </ul>
												    <?php } ?>
												    <?php if(strtolower($term->slug)!="diretoria-regional"&&strtolower($term->slug)!="comercial"){ ?>
												    <h2 class="mast-cat-tit mast-subcat-tit"><span class="border">Conselho Gestor</span></h2>
												    <h3 class="mast-cat-tit mast-subcat-listcat">Titulares Categoria Rede</h3>
												    <div class="slide">
										      			<div id="titulares-categoria-rede" class="diretoria-slide">
														    <?php
														      while ($my_query->have_posts()) : $my_query->the_post(); ?>
														      		<?php if(get_post_meta($post->ID, "Cargo", true)=="Titulares Categoria Rede") { ?>
														      			<div>
														      				<div>
															      				<div class="thumb" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>);"><!-- --></div>
															      				<p class="b">
															      					<?php echo get_the_title(); ?>
															      				</p>
														      				</div>
														      			</div>
														      		<?php } ?>
														    <?php endwhile; ?>
													    </div>
											        </div>
												    <h3 class="mast-cat-tit mast-subcat-listcat">Titulares Categoria Independente</h3>
									      			<div class="slide">
										      			<div id="titulares-categoria-independente" class="diretoria-slide">
														    <?php
														      while ($my_query->have_posts()) : $my_query->the_post(); ?>
														      		<?php if(get_post_meta($post->ID, "Cargo", true)=="Titulares Categoria Independente") { ?>
														      			<div>
														      				<div>
															      				<div class="thumb" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>);"><!-- --></div>
															      				<p class="b">
															      					<?php echo get_the_title(); ?>
															      				</p>
														      				</div>
														      			</div>
														      		<?php } ?>
														    <?php endwhile; ?>
													    </div>
											        </div>
												    <h3 class="mast-cat-tit mast-subcat-listcat">Suplentes Categoria Rede</h3>
									      			<div class="slide">
										      			<div id="suplentes-categoria-rede" class="diretoria-slide">
														    <?php
														      while ($my_query->have_posts()) : $my_query->the_post(); ?>
														      		<?php if(get_post_meta($post->ID, "Cargo", true)=="Suplentes Categoria Rede") { ?>
														      			<div>
														      				<div>
															      				<div class="thumb" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>);"><!-- --></div>
															      				<p class="b">
															      					<?php echo get_the_title(); ?>
															      				</p>
														      				</div>
														      			</div>
														      		<?php } ?>
														    <?php endwhile; ?>
													    </div>
											        </div>
												    <h3 class="mast-cat-tit mast-subcat-listcat">Suplentes Categoria Independente</h3>
									      			<div class="slide">
										      			<div id="suplentes-categoria-independente" class="diretoria-slide">
														    <?php
														      while ($my_query->have_posts()) : $my_query->the_post(); ?>
														      		<?php if(get_post_meta($post->ID, "Cargo", true)=="Suplentes Categoria Independente") { ?>
														      			<div>
														      				<div>
															      				<div class="thumb" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>);"><!-- --></div>
															      				<p class="b">
															      					<?php echo get_the_title(); ?>
															      				</p>
														      				</div>
														      			</div>
														      		<?php } ?>
														    <?php endwhile; ?>
													    </div>
											        </div>
											        <?php } ?>
											</article>
							        		<?php
							        			}
							        			} 
												}
												wp_reset_query();  // Restore global post data stomped by the_post().
							        		?>
							        		</div>
					        			<?php } ?>
									</div>
									<?php get_template_part( 'sidebar' ); ?>
								</div>
						</article>
					<?php endwhile; endif; wp_reset_query(); ?>		

				</div>
			</div>
	</div>
</div>

