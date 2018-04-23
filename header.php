<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if IEMobile 7 ]> <html dir="ltr" lang="en-US"class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html dir="ltr" lang="en-US" class="no-js ie6 oldie"> <![endif]-->
<!--[if IE 7 ]>    <html dir="ltr" lang="en-US" class="no-js ie7 oldie"> <![endif]-->
<!--[if IE 8 ]>    <html dir="ltr" lang="en-US" class="no-js ie8 oldie"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" itemscope itemtype="http://schema.org/Organization" dir="ltr" lang="en-US" class="no-js"><!--<![endif]-->
<head>
  <title><?php wp_title(); ?></title>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
  <meta http-equiv="cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="expires" content="0" />
  <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
  <meta http-equiv="pragma" content="no-cache" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no" />

  <link rel="canonical" href="<?php echo site_url(); ?>" />

  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="HandheldFriendly" content="true" />

  <!-- SEO -->

  <meta name="audience" content="all" />

  <meta name="author" content="Agência DIO" />
  <meta name="copyright" content="http://www.github.com/wesandradealves" />
  <meta name="resource-type" content="Document" />
  <meta name="distribution" content="Global" />
  <meta name="robots" content="index, follow, ALL" />
  <meta name="GOOGLEBOT" content="index, follow" />
  <meta name="rating" content="General" />
  <meta name="revisit-after" content="2 Days" />
  <meta name="language" content="pt-br" />

  <?php wp_meta(); ?>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/default.css?v='.rand(5, 15); ?>" type="text/css" media="all" />

  <link rel="stylesheet" href="<?php echo get_bloginfo('stylesheet_url')."?v=".rand(5, 15); ?>"> 

  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-latest.js"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/selectivizr.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv-printshiv.js" type="text/javascript"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/js/functions.js?v=<?php echo rand(5, 15); ?>" type="text/javascript"></script>

  <script type="text/javascript">(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=493767340741485";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
  <link href="http://owlgraphic.com/owlcarousel/owl-carousel/owl.carousel.css" rel="stylesheet">
  <script src="http://owlgraphic.com/owlcarousel/owl-carousel/owl.carousel.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $.post("<?php echo get_template_directory_uri(); ?>/util/LocadoraUtil.php",{objeto:"estado"},function(result)
      {
        $("#selEstado").html(result);
      });
      $("#selEstado").change(function(){
        $.post("<?php echo get_template_directory_uri(); ?>/util/LocadoraUtil.php",{objeto:"cidade",estado:$("#selEstado").val()},function(result)
        {
          $("#selCidade").html(result);
        });
      });
    });
  </script>
  <?php wp_head(); ?>
</head>
<body 
<?php
global $post;
if (is_front_page()) {
  echo 'class="pg-home"';
} else if(is_archive()){
  echo 'class="pg-archive pg-interna"';
} else if(is_category()){
  echo 'class="pg-category pg-interna"';
} else if(is_search()){
  echo 'class="pg-search pg-interna"';
} else if(is_single()){
  echo 'class="pg-single pg-interna"';
} else {
  echo 'class="pg-interna page_id_'.$post->ID.'"';
}
?>>
<style type="text/css">
  @font-face {
    font-family: 'FontAwesome';
    src: url("<?php echo get_template_directory_uri(); ?>/fonts/fontawesome-webfont.eot?v=4.6.2");
    src: url("<?php echo get_template_directory_uri(); ?>/fonts/fontawesome-webfont.eot?#iefix&v=4.6.2") format("embedded-opentype"), 
    url("<?php echo get_template_directory_uri(); ?>/fonts/fontawesome-webfont.woff2?v=4.6.2") format("woff2"), 
    url("<?php echo get_template_directory_uri(); ?>/fonts/fontawesome-webfont.woff?v=4.6.2") format("woff"), 
    url("<?php echo get_template_directory_uri(); ?>/fonts/fontawesome-webfont.ttf?v=4.6.2") format("truetype"), 
    url("<?php echo get_template_directory_uri(); ?>/fonts/fontawesome-webfont.svg?v=4.6.2#fontawesomeregular") format("svg");
    font-weight: normal;
    font-style: normal; }
  </style>
  <div id="wrap">
    <header>
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
          <div id="topo" class="flex100 flex">
            <div class="flex20 flex">
              <div class="flex50"><a href="<?php bloginfo('url'); ?>/associe-se" class="b btn associe" title="Associe-se">Associe-se</a></div>
              <div class="flex50"><a href="<?php bloginfo('url'); ?>/anuncie" class="b btn btn_default" title="Anuncie">Anuncie</a></div>
            </div>
            <div class="flex25 flex">
              <div class="flex30"><label class="b">Associados</label></div>
              <div class="flex70 flex">
                <form action="" class="flex loginForm flex100">
                  <span class="flex40"><input placeholder="Login" type="text" /></span>
                  <span class="flex40"><input placeholder="Senha" type="password" /></span>
                  <span class="flex20"><button class="b btn btn_default">Ok</button></span>
                </form>
              </div>
            </div>
            <div class="flex25 flex">
              <div class="flex30"><label class="b">Parceiros</label></div>
              <div class="flex70 flex">
                <form action="" class="flex loginForm flex100">
                  <span class="flex40"><input placeholder="Login" type="text" /></span>
                  <span class="flex40"><input placeholder="Senha" type="password" /></span>
                  <span class="flex20"><button class="b btn btn_default">Ok</button></span>
                </form>
              </div>
            </div>
            <div class="flex30 flex">
              <div class="flex100 flex">
                <form class="flex loginForm flex100" role="search" method="get" id="searchform"
                class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <span class="flex85"><input placeholder="Busca" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" /></span>
                <span class="flex15"><input type="submit" id="searchsubmit" class="b btn btn_default" value="OK"/></span>
              </form>
            </div>
          </div>
        </div>
        <nav class="flex90 flex">
          <?php if(get_theme_mod( 'facebook' )||get_theme_mod( 'twitter' )||get_theme_mod( 'instagram' )||get_theme_mod( 'youtube' )||get_theme_mod( 'rss' )){ ?>
            <div class="flex90">
              <ul class="menu flex">
                <?php 
                    // wp_nav_menu( array( 'container' => false, 'menu' => 'Header', 'items_wrap' => '%3$s', 'theme_location' => 'Header' ) ); 
                $backup_query = $wp_query;
                $wp_query = new WP_Query(array('post_type' => 'post'));
                wp_nav_menu( array( 'container' => false, 'menu' => 'Header', 'items_wrap' => '%3$s', 'theme_location' => 'Header' ) ); 
                $wp_query = $backup_query;                  
                ?>
              </ul>   
            </div>
            <div class="flex10 flex">
              <ul class="social flex100 flex">
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
            </div>
            <?php } else { ?>
              <div class="flex100">
                <ul class="menu flex">
                  <?php wp_nav_menu( array( 'container' => false, 'menu' => 'header', 'items_wrap' => '%3$s' ) ); ?>
                </ul>   
              </div>
              <?php } ?>
            </nav>
          </div>
        </div>
      </header>