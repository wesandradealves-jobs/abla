<?php get_header(); $diretoria_categories = get_queried_object(); ?>
<?php if ( is_front_page() ) : ?>
  <main>
    <?php if ( have_posts () ) : while (have_posts()):the_post();?>
      <?php 
        include(get_template_directory()."/".get_post( $post )->post_name.".php");
      ?>
    <?php endwhile; ?>
  <?php endif; ?>
  </main>
<?php else : ?>
  <main>
    <!--  -->
    <section id="webdoor" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>);">
        <div class="flex">
          <div class="wrap">
            <h1><?php echo get_the_title(); ?></h1>
          </div>
        </div>
    </section>
    <!--  -->
    <?php if ( have_posts () ) : while (have_posts()):the_post();?>
      <?php 
        include(get_template_directory()."/".get_post( $post )->post_name.".php");
      ?>
    <?php endwhile; ?>
  <?php endif; ?>
  </main>
<?php endif; ?>
<?php get_footer(); ?>

