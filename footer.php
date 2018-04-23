			<footer>
				<div class="wrap flex">
			        <div class="flex10">
			            <a class="b" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
			              <?php 
			              if ( get_theme_mod( 'logo' ) ) :
			                echo "<img src='".esc_url( get_theme_mod( 'logo' ) )."' alt='".esc_attr( get_bloginfo( 'name', 'display' ) )."'>";
			              else :
			                echo "Abla";
			              endif;
			              ?>
			            </a> 
			        </div>
			        <div class="flex90 flex">
			        	<nav class="flex100 flex">
			                <ul class="menu flex100 flex">
			                  <?php 
			                    // wp_nav_menu( array( 'container' => false, 'menu' => 'Header', 'items_wrap' => '%3$s', 'theme_location' => 'Header' ) ); 
			                    $backup_query = $wp_query;
			                    $wp_query = new WP_Query(array('post_type' => 'post'));
			                    wp_nav_menu( array( 'container' => false, 'menu' => 'Header', 'items_wrap' => '%3$s', 'theme_location' => 'Header' ) ); 
			                    $wp_query = $backup_query;                  
			                  ?>
			                </ul>   
			        	</nav>
			        	<div class="flex flex100">
			        		<div class="flex flex20">
			        			<div class="flex100">
			        				<h4>Portal dos Associados</h4>
					                <form action="" class="flex loginForm">
					                  <span class="flex40"><input placeholder="Login" type="text" /></span>
					                  <span class="flex40"><input placeholder="Senha" type="password" /></span>
					                  <span class="flex20"><button class="b btn btn_default">Ok</button></span>
					                </form>
			        			</div>
			        		</div>
			        		<div class="flex flex20">
			        			<div class="flex100">
			        				<?php if(get_theme_mod( 'facebook' )||get_theme_mod( 'twitter' )||get_theme_mod( 'instagram' )||get_theme_mod( 'youtube' )||get_theme_mod( 'rss' )){ ?>
			        				<h4>Mídias Sociais</h4>
					                <ul class="social flex">
					                <?php 
					                    if(get_theme_mod( 'facebook' )){
					                      echo '<li><a href="'.get_theme_mod( 'facebook' ).'" title="Facebook"></a></li>';
					                    }
					                    if(get_theme_mod( 'twitter' )){
					                      echo '<li><a href="'.get_theme_mod( 'twitter' ).'" title="Twitter"></a></li>';
					                    }
					                    if(get_theme_mod( 'instagram' )){
					                      echo '<li><a href="'.get_theme_mod( 'instagram' ).'" title="Instagram"></a></li>';
					                    }
					                    if(get_theme_mod( 'youtube' )){
					                      echo '<li><a href="'.get_theme_mod( 'youtube' ).'" title="Youtube"></a></li>';
					                    }
					                    if(get_theme_mod( 'rss' )){
					                      echo '<li><a href="'.get_theme_mod( 'rss' ).'" title="RSS"></a></li>';
					                    }
					                ?>
					                </ul>
					                <?php } ?>
			        			</div>
			        		</div>
			        		<div class="flex flex20">
			        			<div class="flex100">
			        				<h4>Abla Online</h4>
					              	<a href="<?php bloginfo('url'); ?>/associe-se" class="b btn associe" title="Associe-se">Associe-se</a>
					              	<a href="<?php bloginfo('url'); ?>/anuncie" class="b btn btn_default" title="Anuncie">Anuncie</a>
			        			</div>
			        		</div>
			        		<div class="flex flex20">
			        			<div class="flex100">
			        				<h4>Conheça Também</h4>
						            <a title="Abla Jovem" href="https://www.facebook.com/ablajovem/" target="_blank"><img width="100%" src="<?php echo get_template_directory_uri(); ?>/assets/abla_jovem.png" alt="Abla"></a>
			        			</div>
			        		</div>
			        		<div class="flex flex20">
			        			<div class="flex100">
									<a href="#" title="Desenvolvido por DIO">Desenvolvido por DIO</a>
			        			</div>
			        		</div>
			        	</div>
			        </div>
				</div>
			</footer>
		</div>
        <div id="fb-root"></div>
        <?php wp_footer(); ?> 
    </body>
</html>