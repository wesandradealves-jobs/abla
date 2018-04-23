<section class="main">

  <?php 

  $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

  $query = new WP_Query( array( 'post_type' => 'webdoor', 'posts_per_page' => 1, 'offset' => 0, 'order' => 'DESC') );

  if($query->have_posts()=="1"){

    while ( $query->have_posts() ) : $query->the_post(); ?>

    <section id="webdoor" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>);">

      <div class="flex">

        <div class="wrap">

          <h1><?php echo get_the_title(); ?></h1>

          <p><?php echo get_the_excerpt(); ?></p>

          <?php if(get_post_meta($post->ID, "URL", true)) { ?>

            <a target="_blank" href="<?php echo get_post_meta($post->ID, "URL", true); ?>" class="b btn btn2">Saiba Mais</a>

          <?php } else { ?>

            <a href="<?php echo get_the_permalink(); ?>" class="b btn btn2">Saiba Mais</a>

          <?php } ?>

        </div>

      </div>

    </section>

  <?php endwhile; 

  wp_reset_query();   

}

?>

<section id="encontre-um-carro">

  <div class="wrap flex">

    <div class="flex40"><img src="<?php echo get_template_directory_uri(); ?>/assets/car.png" alt="Encontre um Carro" /></div>

    <div class="flex60">

      <h1>Encontre um carro para alugar</h1>

      <form action="<?php bloginfo('url'); ?>/locadora" class="flex" method="POST">

        <span class="flex45">

          <span class="selectMask">

            <select id="selEstado" name="estado_veiculo"><option>Estado</option></select>

          </span>

        </span>

        <span class="flex45">

          <span class="selectMask">

            <select id="selCidade" name="cidade"><option>Cidade</option></select>

          </span>

        </span>

        <span class="flex10">

          <button class="b btn btn3">Ok</button>

        </span>

      </form>

    </div>

  </div>

</section>

<div id="main" class="wrap flex">

  <aside class="flex15">

    <ul id="filtro_categorias" class="filtro filtro_default">

      <li><span class="border">Filtros</span></li>
      <?php 

      $terms = get_terms('category', array(

        'post_type' => array('post', 'noticias'),

        'fields' => 'all'

        ));  

      $count = count( $terms );

      foreach ( $terms as $term ) {

        echo "<li id='".strtolower($term->slug)."'><label class='radio' for='".strtolower($term->slug)."'><input type='radio' name='filtro' id='".strtolower($term->slug)."' value='".strtolower($term->slug)."' /> <span></span> <a href='?filter=".strtolower($term->slug)."#filtro_categorias'>".$term->name."</a></label></li>";

      }     

      ?>

    <script>
      jQuery(document).ready(function(){  
    <?php 
        if( !empty($_GET['filter']) ){
          echo "$('#filtro_categorias li#".$_GET['filter']."').addClass('ativa');";
          echo "$('input#".$_GET['filter']."').prop('checked',true);";
        }
    ?>
    });
    </script>
    </ul>     

  </aside>

  <div class="flex65">

    <h2><span class="border">Notícias</span></h2>

    <div id="filtro_categorias" class="articles flex">

      <?php
      
      if( !empty($_GET['filter']) ){
        $args = array('post_type' => 'post', 'category_name' => $_GET['filter'], 'order' => 'DESC');
      } else { 
        $args = array('post_type' => 'post', 'order' => 'DESC','posts_per_page' => 3, 'offset' => 0);
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
      }

      $query = new WP_Query($args);

      if($query->have_posts()=="1"){

        $ids = array();

        while($query -> have_posts()) : $query -> the_post();

        $term_list = wp_get_post_terms($post->ID, 'category', array("fields" => "all"));

        foreach($term_list as $term_single) {

          ?>

          <article data-value="<?php echo $term_single->slug; ?>">

            <div class="thumb" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>);">

              <div><p><?php echo $term_single->name; ?></p></div>

            </div>

            <h3 class="b"><?php echo get_the_title(); ?></h3>

            <p class="b"><?php echo substr(get_the_excerpt(), 0,200); ?> [...]</p>

            <a href="<?php echo get_the_permalink(); ?>" class="b btn btn_default" title="<?php echo get_the_title(); ?>">Leia Mais</a>

          </article>

          <?php

        }

        $ids[]= $post->ID;

        endwhile;

        wp_reset_query();

      }

      ?>

    </div>

    <img data-type="publicidade" width="100%" src="http://voxnews.com.br/wp-content/uploads/2013/09/banner-anuncie-aqui.jpg" />

    <div id="mais_noticias">

      <h4 class="border">Outras Notícias</h4>

      <div>

        <div id="noticia-slide">

          <?php

          $args = array('post_type' => 'post', 'order' => 'DESC');

          $query = new WP_Query($args);

          while($query -> have_posts()) : $query -> the_post();

          if (!in_array($post->ID, $ids)) {

            ?>

            <article style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>);">

              <div class="outras-noticias-item">

                <div class="flex">

                  <div>

                    <p class="b"><a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a></p>

                  </div>

                </div>

              </div>

            </article>

            <?php

          }

          endwhile; 

          wp_reset_query();

          ?>    

        </div>   

      </div>

    </div>

    <div id="na_midia">

      <div class="flex">
      <?php 
        $anuario = array(
            'post_type' => 'publicacoes', 
            'posts_per_page' => 1,
            'order' => 'DESC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'publicacoes_categories',
                    'field'    => 'slug',
                    'terms'    => 'anuario-abla'
                ),
            ),
        );
        $anuario = new WP_Query( $anuario ); 

        $revista = array(
            'post_type' => 'publicacoes', 
            'posts_per_page' => 1,
            'order' => 'DESC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'publicacoes_categories',
                    'field'    => 'slug',
                    'terms'    => 'revista-locacao'
                ),
            ),
        );
        $revista = new WP_Query( $revista ); 

        $boletins = array(
            'post_type' => 'publicacoes', 
            'posts_per_page' => 1,
            'order' => 'DESC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'publicacoes_categories',
                    'field'    => 'slug',
                    'terms'    => 'boletins-abla-news'
                ),
            ),
        );
        $boletim = new WP_Query( $boletins ); 
      ?>
      <?php if($anuario->have_posts()): while($anuario->have_posts()): $anuario->the_post(); ?>
        <div class="flex">

          <div class="flex100 flex">

            <div class="flex100 flex">

              <div class="flex50">

                <h3 class="border"><?php echo get_the_title(); ?></h3>

                <p><?php echo get_the_excerpt(); ?></p>

                <a href="./publica" class="b btn btn_default">Ver Mais</a>

              </div>

              <div class="flex50">

                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php echo get_the_title(); ?>" />

              </div>

            </div>

          </div>

        </div>
      <?php endwhile; wp_reset_postdata(); endif;  ?>
      <?php if($revista->have_posts()): while($revista->have_posts()): $revista->the_post(); ?>
        <div class="flex">

          <div class="flex100 flex">

            <div class="flex100 flex">

              <div class="flex50">

                <h3 class="border"><?php echo get_the_title(); ?></h3>

                <p><?php echo get_the_excerpt(); ?></p>

                <a href="./publica" class="b btn btn_default">Ver Mais</a>

              </div>

              <div class="flex50">

                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php echo get_the_title(); ?>" />

              </div>

            </div>

          </div>

        </div>
      <?php endwhile; wp_reset_postdata(); endif;  ?>
      </div>

  </div>

  <div id="cursos">

    <h2><span class="border">Cursos</span></h2>

    <div>

      <div id="curso-slide-desktop" class="curso-slide curso-slide-desktop">

        <?php 

        $args = array(

          'post_type' => 'cursos',

          'posts_per_page' => -1,

          'order' => 'ASC',

          'orderby' => 'menu_order'

          );

        $the_query = new WP_Query($args);

        if ($the_query->have_posts()) :

          $counter = 0;

        while ($the_query->have_posts()) : $the_query->the_post();

        if ($counter % 2 == 0) :

          echo $counter > 0 ? "</article>" : ""; 

        echo "<article>";

        endif;

        ?>

        <article>

          <div style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>);">

            <p><a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a></p>

          </div>

        </article>    

        <?php 

        $counter++;

        endwhile;

        endif;

        wp_reset_query();   

        wp_reset_postdata();    

        ?> 

      </div>        

      <div id="curso-slide-mobile" class="curso-slide curso-slide-mobile">

        <?php 

        $args = array(

          'post_type' => 'cursos',

          'posts_per_page' => -1,

          'order' => 'DESC',

          'orderby' => 'menu_order'

          );

        $the_query = new WP_Query($args);

        if ($the_query->have_posts()) :

          $counter = 0;

        while ($the_query->have_posts()) : $the_query->the_post();

        if ($counter % 1 == 0) :

          echo $counter > 0 ? "</article>" : ""; 

        echo "<article>";

        endif;

        ?>

        <article>

          <div style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>);">

            <p><a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a></p>

          </div>

        </article>    

        <?php 

        $counter++;

        endwhile;

        endif;

        wp_reset_query();   

        wp_reset_postdata();    

        ?> 

      </div>

      <nav class="nav flex">

        <div class="flex100">

          <a class="owl-prev"><!-- --></a>

          <a class="owl-next"><!-- --></a>

        </div>

      </nav> 

    </div>

    <a href="<?php echo get_bloginfo('url')."/cursos"; ?>" class="b btn btn6">Veja mais cursos</a>

  </div>

  <div id="depoimento">

    <h2><span class="border">Depoimentos</span></h2>

    <div>

      <div id="depoimento-slide">

        <?php 

        $query = new WP_Query( array( 'post_type' => 'depoimentos', 'order' => 'DESC') );

        if($query->have_posts()=="1"){

          while ( $query->have_posts() ) : $query->the_post(); ?>

          <article>

            <p><?php echo get_the_content(); ?></p>

            <div class="depoimentos-footer">

              <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php echo get_the_title(); ?>">

              <p><strong class="b"><?php echo get_the_title(); ?></strong> <?php echo get_post_meta($post->ID, "Cargo", true); ?></p>

            </div>

          </article>

        <?php endwhile; 

        wp_reset_query();   

      }

      ?>  

    </div>

    <nav class="nav flex">

      <div class="flex100 depoimentoS">

        <a class="owl-prev"><!-- --></a>

        <a class="owl-next"><!-- --></a>

      </div>

    </nav> 

  </div>

</div>

</div>

<?php get_sidebar(); ?>

</div>

<div class="flex100">

  <div id="videos" class="flex100">

    <div class="flex">

      <div class="wrap">

        <h2><span class="border">Vídeos</span></h2>

        <div class="flex">

          <div class="flex70 video-show">

            <?php 

            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

            $query = new WP_Query( array( 'post_type' => 'videos', 'posts_per_page' => 1, 'offset' => 0, 'order' => 'DESC') );

            if($query->have_posts()=="1"){

              while ( $query->have_posts() ) : $query->the_post(); ?>

              <article class="flex">

                <div class="flex50">

                  <div class="videoWrapper">

                    <iframe src="<?php echo get_post_meta($post->ID, "URL", true); ?>" frameborder="0" allowfullscreen></iframe>

                  </div>

                </div>

                <div class="flex50">

                  <h3><?php echo get_the_title(); ?></h3>

                  <p><?php echo get_the_excerpt(); ?> ...</p>

                  <?php if(get_post_meta($post->ID, "URL Externa", true)){ ?>
                    <a href="<?php echo get_post_meta($post->ID, "URL Externa", true); ?>" class="b btn btn2">Veja mais</a>
                  <?php  }  ?>                  

                </div>

              </article>

            <?php endwhile; 

            wp_reset_query();   

          }

          ?>  

        </div>

        <div class="flex30 video-thumb flex">

          <?php 

          $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

          $query = new WP_Query( array( 'post_type' => 'videos', 'posts_per_page' => 4, 'offset' => 0, 'order' => 'DESC') );

          if($query->have_posts()=="1"){

            while ( $query->have_posts() ) : $query->the_post(); ?>

            <article class="flex50" data-external-url="<?php echo get_post_meta($post->ID, "URL Externa", true); ?>" data-title="<?php echo get_the_title(); ?>" data-text="<?php echo get_the_excerpt(); ?>" data-url="<?php echo get_post_meta($post->ID, "URL", true); ?>">

              <div> 

                <?php 

                $url = get_post_meta($post->ID, "URL", true);

                $url_extract = substr($url, strpos($url, "embed/")+6); 

                echo "<img class='b thumb' src='http://img.youtube.com/vi/".$url_extract."/default.jpg'/>";

                ?>

                <div class="videoWrapper">

                  <iframe src="<?php echo get_post_meta($post->ID, "URL", true); ?>" frameborder="0" allowfullscreen></iframe>

                </div>

              </div>

            </article>

          <?php endwhile; 

          wp_reset_query();   

        }

        ?>  

      </div>

    </div>

  </div>

</div>

</div>

<div id="setor" class="flex100">

  <div class="wrap">

    <div class="setor">

      <h2 class="border">Dados do Setor</h2>

      <div id="setor-slide">

        <?php 

        $query = new WP_Query( array( 'post_type' => 'setor', 'order' => 'ASC') );

        if($query->have_posts()=="1"){

          while ( $query->have_posts() ) : $query->the_post(); ?>

          <article>

            <div class="flex">

              <div class="flex33"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php echo get_the_title(); ?>"></div>

              <div class="flex33">

                <h1><?php echo get_post_meta($post->ID, "Dados", true); ?></h1>

                <p><?php echo get_the_title(); ?></p>

              </div>

              <div class="flex33">

                <?php the_content(); ?>

                <?php if(get_post_meta($post->ID, "URL", true)) { ?>
                  <a href="<?php echo get_post_meta($post->ID, "URL", true); ?>" class="b btn btn2">Leia mais</a>
                <?php } else { ?>
                  <a href="<?php echo get_bloginfo('url')."/dados"; ?>" class="b btn btn2">Veja mais dados</a>
                <?php } ?>

              </div>

            </div> 

          </article>

        <?php endwhile; 

        wp_reset_query();   

      }

      ?> 

    </div>

    <nav class="nav flex">

      <div class="flex100">

        <a class="owl-prev"><!-- --></a>

        <a class="owl-next"><!-- --></a>

      </div>

    </nav> 

  </div>

</div>

</div>

</div>

</section>

