<?php get_header(); $diretoria_categories = get_queried_object(); ?>
<?php 
  if ( is_front_page()||is_home() ){
?>
  <main>
    <?php if ( have_posts () ) : while (have_posts()):the_post();?>
      <?php 
        include(get_template_directory()."/".get_post( $post )->post_name.".php");
      ?>
    <?php endwhile; ?>
  <?php endif; ?>
  </main>
  <script>
    jQuery(document).ready(function(){  
      $(".filtro input[type='radio']").click(function(){
        if(this.checked){
          var radioValue = $(this).val();
        }
        var filtroId = $(this).closest("ul").attr("id");
        if(radioValue){
          $(this).closest("li").addClass("ativa");
          $(this).closest("ul").find(".ativa").not($(this).closest("li")).removeClass("ativa");
          window.location = $(this).nextAll("a").attr("href");
        }
      });    
    });  
  </script>
<?php } else { ?>
    <main>
      <?php if ( have_posts () ) : while (have_posts()):the_post();?>
        <?php if($post->ID!="267") { ?>
        <section id="webdoor" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>);">
            <div class="flex">
              <div class="wrap">
                <h1>
                  <?php
                    if(get_post_meta($post->ID, "Título Alternativo", true)){
                      echo get_post_meta($post->ID, "Título Alternativo", true);
                    } else {
                      echo get_the_title(); 
                    }
                  ?> 
                </h1>
              </div>
            </div>
        </section>
        <?php } ?>
        <?php 
          include(get_template_directory()."/".get_post( $post )->post_name.".php");
        ?>
      <?php endwhile; ?>
    <?php endif; ?>
    </main>
    <script>
      jQuery(document).ready(function(){  
        $(".filtro input[type='radio']").click(function(){
          if(this.checked){
            var radioValue = $(this).val();
          }
          var filtroId = $(this).closest("ul").attr("id");
          if(radioValue){
            $(this).closest("li").addClass("ativa");
            $(this).closest("ul").find(".ativa").not($(this).closest("li")).removeClass("ativa");
            $(this).parents().find(".articles#"+filtroId+" > article").hide().removeClass("first-visible");
            $(this).parents().find(".articles#"+filtroId+" > article[data-value='"+radioValue+"']").show(); 
          }
        });    
      });  
    </script>
<?php } ?>
<?php get_footer(); ?>

