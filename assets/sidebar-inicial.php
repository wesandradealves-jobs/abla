<?php global $post; ?>

<aside id="sidebar" class="flex20">
  <?php //echo get_post( $post )->post_name; ?>
  <img data-type="publicidade" width="100%" src="http://spnoticias.com.br/wp-content/uploads/publicidade-300X300.jpg" />
  <div class="framed">
    <h2 class="border">Conheça Também</h2>
    <img width="100%" src="<?php echo esc_url( get_theme_mod( 'logo' ) ); ?>" alt="Abla">
  </div>
  <?php if(is_single()||get_post( $post )->post_name=="beneficios-aos-associados"||get_post( $post )->post_name=="contato"){  ?>
  <div class="framed">
    <h2 class="border">Associe-se</h2>
    <a href="<?php bloginfo('url'); ?>/associe-se" class="btn btn4">Clique aqui</a>
    <p><a href="<?php bloginfo('url'); ?>/beneficios-aos-associados">Conheça os<br/><span>benefícios aqui</span></a>.</p>
  </div>
  <div id="newsletter">
    <h2 class="border">Newsletter</h2>
    <?php echo do_shortcode('[wysija_form id="2"]'); ?>
  </div>
  <?php } ?>
  <div id="artigo">
    <h2 class="border">Artigo</h2>
        <?php
          $args = array('post_type' => 'artigos','posts_per_page' => 2, 'offset' => 0, 'order' => 'ASC');
          $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
          $query = new WP_Query($args);
          if($query->have_posts()=="1"){
            while($query -> have_posts()) : $query -> the_post();
        ?>
            <article>
              <h4 class="b"><?php echo get_the_title(); ?></h4>
              <div class="flex">
                <div class="flex70">
                  <p class="b">Por: <?php echo get_the_author(); ?></p>
                  <a class="b btn btn5" href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title()." | por ".get_the_author(); ?>">Continue lendo</a>
                </div>
                <div class="flex30">
                  <?php echo get_avatar( get_the_author_meta( 'ID' ), 300 ); ?>
                </div>
              </div>
            </article>
        <?php
            endwhile;
            wp_reset_query();
          }
        ?>
        <a href="<?php echo get_bloginfo('url')."/artigos"; ?>" class="b btn btn6">Veja mais artigos</a>
  </div>
  <img width="100%" src="<?php echo get_template_directory_uri(); ?>/assets/midia_kit.jpg" alt="Conheça nosso Mídia Kit" />
  <?php if(is_single()||get_post( $post )->post_name=="beneficios-aos-associados"||get_post( $post )->post_name=="contato"){  ?>
  <img data-type="publicidade" width="100%" src="http://spnoticias.com.br/wp-content/uploads/publicidade-300X300.jpg" />
  <?php } ?>
</aside>