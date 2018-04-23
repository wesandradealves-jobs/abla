<?php

// CPT

$links_uteis_labels = array(
    'name' => _x('Links úteis', 'post type general name'),
    'singular_name' => _x('Link útil', 'post type singular name'),
    'add_new' => _x('Add New', 'Links úteis '),
    'add_new_item' => __('Add New Link útil '),
    'edit_item' => __('Edit Link útil '),
    'new_item' => __('New Link util '),
    'view_item' => __('View Link útil '),
    'search_items' => __('Search Links úteis'),
    'not_found' =>  __('Nothing found'),
    'not_found_in_trash' => __('Nothing found in Trash'),
    'parent_item_colon' => ''
);

$links_uteis = array(
        'labels' => $links_uteis_labels,
        'public'             => false,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'links_uteis', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => -5,
        'supports'           => array( 'title', 'thumbnail', 'custom-fields')
);

register_post_type( 'links_uteis', $links_uteis );

$setor_labels = array(
    'name' => _x('Dados do Setor', 'post type general name'),
    'singular_name' => _x('Dados do Setor', 'post type singular name'),
    'add_new' => _x('Add New', 'Dados do Setor '),
    'add_new_item' => __('Add New Dados do Setor '),
    'edit_item' => __('Edit Dados do Setor '),
    'new_item' => __('New Dados do Setor '),
    'view_item' => __('View Dados do Setor '),
    'search_items' => __('Search Dados do Setor'),
    'not_found' =>  __('Nothing found'),
    'not_found_in_trash' => __('Nothing found in Trash'),
    'parent_item_colon' => ''
);

$setor = array(
        'labels' => $setor_labels,
        'public'             => false,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'setor', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => -5,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields')
);

register_post_type( 'setor', $setor );

$imprensas_labels = array(
    'name' => _x('Imprensa', 'post type general name'),
    'singular_name' => _x('Imprensa', 'post type singular name'),
    'add_new' => _x('Add New', 'Imprensa '),
    'add_new_item' => __('Add New Imprensa '),
    'edit_item' => __('Edit Imprensa '),
    'new_item' => __('New Imprensa '),
    'view_item' => __('View Imprensa '),
    'search_items' => __('Search Imprensa'),
    'not_found' =>  __('Nothing found'),
    'not_found_in_trash' => __('Nothing found in Trash'),
    'parent_item_colon' => ''
);

$imprensas = array(
        'labels' => $imprensas_labels,
        'public'             => false,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'imprensas', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => -5,
        'supports'           => array( 'title', 'editor', 'custom-fields')
);

register_post_type( 'imprensas', $imprensas );

$contatos_labels = array(
    'name' => _x('Contatos', 'post type general name'),
    'singular_name' => _x('Contatos', 'post type singular name'),
    'add_new' => _x('Add New', 'Contatos '),
    'add_new_item' => __('Add New Contatos '),
    'edit_item' => __('Edit Contatos '),
    'new_item' => __('New Contatos '),
    'view_item' => __('View Contatos '),
    'search_items' => __('Search Contatos'),
    'not_found' =>  __('Nothing found'),
    'not_found_in_trash' => __('Nothing found in Trash'),
    'parent_item_colon' => ''
);

$contatos = array(
        'labels' => $contatos_labels,
        'public'             => false,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'contatos', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => -5,
        'supports'           => array( 'title', 'editor')
);

register_post_type( 'contatos', $contatos );

$anuario_labels = array(
    'name' => _x('Anuário', 'post type general name'),
    'singular_name' => _x('Anuário', 'post type singular name'),
    'add_new' => _x('Add New', 'Anuário '),
    'add_new_item' => __('Add New Anuário '),
    'edit_item' => __('Edit Anuário '),
    'new_item' => __('New Anuário '),
    'view_item' => __('View Anuário '),
    'search_items' => __('Search Anuário'),
    'not_found' =>  __('Nothing found'),
    'not_found_in_trash' => __('Nothing found in Trash'),
    'parent_item_colon' => ''
);

$anuario = array(
        'labels' => $anuario_labels,
        'public'             => false,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'anuario', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 0,
        'supports'           => array( 'title', 'thumbnail', 'custom-fields')
);

register_post_type( 'anuario', $anuario );

$webdoor_labels = array(
    'name' => _x('Destaque', 'post type general name'),
    'singular_name' => _x('Destaque', 'post type singular name'),
    'add_new' => _x('Add New', 'Destaque '),
    'add_new_item' => __('Add New Destaque '),
    'edit_item' => __('Edit Destaque '),
    'new_item' => __('New Destaque '),
    'view_item' => __('View Destaque '),
    'search_items' => __('Search Destaque'),
    'not_found' =>  __('Nothing found'),
    'not_found_in_trash' => __('Nothing found in Trash'),
    'parent_item_colon' => ''
);

$webdoor = array(
        'labels' => $webdoor_labels,
        'public'             => false,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'webdoor', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 0,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields')
);

register_post_type( 'webdoor', $webdoor );

$artigos_labels = array(
    'name' => _x('Artigos', 'post type general name'),
    'singular_name' => _x('Artigos', 'post type singular name'),
    'add_new' => _x('Add New', 'Artigos '),
    'add_new_item' => __('Add New Artigos '),
    'edit_item' => __('Edit Artigos '),
    'new_item' => __('New Artigos '),
    'view_item' => __('View Artigos '),
    'search_items' => __('Search Artigos'),
    'not_found' =>  __('Nothing found'),
    'not_found_in_trash' => __('Nothing found in Trash'),
    'parent_item_colon' => ''
);

$artigos = array(
        'labels' => $artigos_labels,
        'public'             => false,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'artigos', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 0,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields')
);

register_post_type( 'artigos', $artigos );

register_post_type( 'publicacoes',
    array(
      'labels' => array(
        'name' => __( 'Publicações' ),
        'singular_name' => __( 'Publicação' ),
        'add_new' => __( 'Nova Publicação' )
        ),
      'public' => true,
      'has_archive' => true,
      'show_in_nav_menus' => true,
      'taxonomies'        => array( 'publicacoes_categories' ),  
      'supports' => array( 'title', 'excerpt', 'thumbnail', 'custom-fields' )
      )
    );

function abla_register_taxonomies() {
     
    // register a taxonomy called 'Animal Family'
    register_taxonomy( 'publicacoes_categories', 'publicacoes',
        array(
            'labels' => array(
                'name'              => 'Tipo de Publicação',
                'singular_name'     => 'Tipo de Publicação',
                'search_items'      => 'Procurar Tipo de Publicação',
                'all_items'         => 'Todos os tipos',
                'edit_item'         => 'Editar Tipo de Publicação',
                'update_item'       => 'Atualizar Tipo de Publicação',
                'add_new_item'      => 'Adicionar Novo Tipo de Publicação',
                'new_item_name'     => 'Novo Tipo de Publicação',
                'menu_name'         => 'Tipo de Publicação',
            ),
            'hierarchical' => true,
            'sort' => true,
            'args' => array( 'orderby' => 'term_order' ),
            'rewrite' => array( 'slug' => 'diretoriacat' ),
            'show_admin_column' => true
        )
    );
}

add_action( 'init', 'abla_register_taxonomies' );

$cursos_labels = array(
    'name'              => _x( 'Cursos', 'taxonomy general name' ),
    'singular_name'     => _x( 'Curso', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Cursos' ),
    'all_items'         => __( 'All Cursos' ),
    'parent_item'       => __( 'Parent Cursos' ),
    'parent_item_colon' => __( 'Parent Cursos:' ),
    'edit_item'         => __( 'Edit Cursos' ),
    'update_item'       => __( 'Update Cursos' ),
    'add_new_item'      => __( 'Add New Cursos' ),
    'new_item_name'     => __( 'New Cursos Name' ),
    'menu_name'         => __( 'Cursos' ),
);

$cursos = array(
        'labels'            => $cursos_labels,
        'public'             => false,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'cursos', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => -3,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields')
);

register_post_type( 'cursos', $cursos );

$depoimentos_labels = array(
    'name' => _x('Depoimentos', 'post type general name'),
    'singular_name' => _x('Depoimento', 'post type singular name'),
    'add_new' => _x('Add New', 'Depoimentos '),
    'add_new_item' => __('Add New Depoimentos '),
    'edit_item' => __('Edit Depoimentos '),
    'new_item' => __('New Depoimentos '),
    'view_item' => __('View Depoimentos '),
    'search_items' => __('Search Depoimentos'),
    'not_found' =>  __('Nothing found'),
    'not_found_in_trash' => __('Nothing found in Trash'),
    'parent_item_colon' => ''
);

$depoimentos = array(
        'labels' => $depoimentos_labels,
        'public'             => false,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'depoimentos', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => -5,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields')
);

register_post_type( 'depoimentos', $depoimentos );

$videos_labels = array(
    'name' => _x('Vídeos', 'post type general name'),
    'singular_name' => _x('Vídeo', 'post type singular name'),
    'add_new' => _x('Add New', 'Vídeo '),
    'add_new_item' => __('Add New Vídeo '),
    'edit_item' => __('Edit Vídeo '),
    'new_item' => __('New Vídeo '),
    'view_item' => __('View Vídeo '),
    'search_items' => __('Search Vídeo'),
    'not_found' =>  __('Nothing found'),
    'not_found_in_trash' => __('Nothing found in Trash'),
    'parent_item_colon' => ''
);

$videos = array(
        'labels' => $videos_labels,
        'public'             => false,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'videos', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => -3,
        'supports'           => array( 'title', 'excerpt', 'custom-fields')
);

register_post_type( 'videos', $videos );

function diretoria() {
    $labels = array(
        'name' => _x('Diretoria', 'post type general name'),
        'singular_name' => _x('Diretoria', 'post type singular name'),
        'add_new' => _x('Add New', 'Diretoria '),
        'add_new_item' => __('Add New Diretoria '),
        'edit_item' => __('Edit Diretoria '),
        'new_item' => __('New Diretoria '),
        'view_item' => __('View Diretoria '),
        'search_items' => __('Search Diretoria'),
        'not_found' =>  __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => -5,
        'supports' => array('title','thumbnail', 'custom-fields')
    ); 
    register_post_type( 'diretoria' , $args );
}

add_action('init', 'diretoria');

function wptp_register_taxonomies() {
     
    // register a taxonomy called 'Animal Family'
    register_taxonomy( 'diretoria_categories', 'diretoria',
        array(
            'labels' => array(
                'name'              => 'Categoria',
                'singular_name'     => 'Categoria',
                'search_items'      => 'Search Categorias',
                'all_items'         => 'All Categorias',
                'edit_item'         => 'Edit Categorias',
                'update_item'       => 'Update Categoria',
                'add_new_item'      => 'Add New Categoria',
                'new_item_name'     => 'New Categoria Name',
                'menu_name'         => 'Categoria',
            ),
            'hierarchical' => true,
            'sort' => true,
            'args' => array( 'orderby' => 'term_order' ),
            'rewrite' => array( 'slug' => 'diretoriacat' ),
            'show_admin_column' => true
        )
    );
}
add_action( 'init', 'wptp_register_taxonomies' );

// Handle the post_type parameter given in get_terms function
function df_terms_clauses($clauses, $taxonomy, $args) {
    if (!empty($args['post_type'])) {
        global $wpdb;

        $post_types = array();

        foreach($args['post_type'] as $cpt) {
            $post_types[] = "'".$cpt."'";
        }

        if(!empty($post_types)) {
            $clauses['fields'] = 'DISTINCT '.str_replace('tt.*', 'tt.term_taxonomy_id, tt.term_id, tt.taxonomy, tt.description, tt.parent', $clauses['fields']).', COUNT(t.term_id) AS count';
            $clauses['join'] .= ' INNER JOIN '.$wpdb->term_relationships.' AS r ON r.term_taxonomy_id = tt.term_taxonomy_id INNER JOIN '.$wpdb->posts.' AS p ON p.ID = r.object_id';
            $clauses['where'] .= ' AND p.post_type IN ('.implode(',', $post_types).')';
            $clauses['orderby'] = 'GROUP BY t.term_id '.$clauses['orderby'];
        }
    }
    return $clauses;
}
add_filter('terms_clauses', 'df_terms_clauses', 10, 3);


// 

function add_taxonomies_to_pages() {
 register_taxonomy_for_object_type( 'category', 'page' );
 }
add_action( 'init', 'add_taxonomies_to_pages' );

if ( ! is_admin() ) {
   add_action( 'pre_get_posts', 'category_and_tag_archives' );
   
}
function category_and_tag_archives( $wp_query ) {
    $my_post_array = array('post','page');
    
    if ( $wp_query->get( 'category_name' ) || $wp_query->get( 'cat' ) )
       $wp_query->set( 'post_type', $my_post_array );
   
   if ( $wp_query->get( 'tag' ) )
       $wp_query->set( 'post_type', $my_post_array );
}

// 

function themeslug_theme_customizer( $wp_customize ) {
    // panels
    $wp_customize->add_panel( 'sidebar', array(
        'priority'       => 53,
        'capability'     => 'edit_theme_options',
        'title'          => __('Sidebar', 'themeslug')
    ));
    $wp_customize->add_panel( 'header', array(
        'priority'       => 55,
        'capability'     => 'edit_theme_options',
        'title'          => __('Header', 'themeslug')
    ));
    $wp_customize->add_panel( 'footer', array(
        'priority'       => 56,
        'capability'     => 'edit_theme_options',
        'title'          => __('Rodapé', 'themeslug')
    ));        
    // Midia kit
    $wp_customize->add_section( 'midia_kit' , array(
        'title'       => __( 'Mídia Kit', 'themeslug' ),
        'priority'    => 1,
        'panel' => 'sidebar'
    ));  
    $wp_customize->add_setting( 'midia_kit_url' );
    $wp_customize->add_control('midia_kit_url',  array(
        'label' => 'URL',
        'section' => 'midia_kit',
        'type' => 'text',
        'sanitize_callback' => 'esc_url_raw',
        'settings' => 'midia_kit_url'
    ));
    $wp_customize->add_setting( 'midia_kit_email' );
    $wp_customize->add_control('midia_kit_email',  array(
        'label' => 'E-mail',
        'section' => 'midia_kit',
        'type' => 'text',
        'sanitize_callback' => 'esc_url_raw',
        'settings' => 'midia_kit_email'
    ));
    $wp_customize->add_setting( 'midia_kit_telefone_ddd' );
    $wp_customize->add_control('midia_kit_telefone_ddd',  array(
        'label' => 'DDD',
        'section' => 'midia_kit',
        'type' => 'text',
        'sanitize_callback' => 'esc_url_raw',
        'settings' => 'midia_kit_telefone_ddd'
    ));
    $wp_customize->add_setting( 'midia_kit_telefone' );
    $wp_customize->add_control('midia_kit_telefone',  array(
        'label' => 'Telefone',
        'section' => 'midia_kit',
        'type' => 'text',
        'sanitize_callback' => 'esc_url_raw',
        'settings' => 'midia_kit_telefone'
    ));
    // logo
    $wp_customize->add_section( 'logo_section' , array(
        'title'       => __( 'Logo', 'themeslug' ),
        'priority'    => 1,
        'panel' => 'header',
        'description' => 'Suba a logo do Site'
    ));
    $wp_customize->add_setting( 'logo' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo', array(
        'label'    => __( 'Logo', 'themeslug' ),
        'section'  => 'logo_section',
        'settings' => 'logo'
    )));   
    // social
    $wp_customize->add_section( 'redes_sociais', array(
        'title' => 'Redes Sociais',
        'priority' => 1,
        'panel' => 'header'
    ));

    $wp_customize->add_setting( 'rss' );

    $wp_customize->add_control('rss',  array(
        'label' => 'RSS',
        'section' => 'redes_sociais',
        'type' => 'text',
        'sanitize_callback' => 'esc_url_raw',
        'settings' => 'rss'
    ));

    $wp_customize->add_setting( 'facebook' );

    $wp_customize->add_control('facebook',  array(
        'label' => 'Facebook',
        'section' => 'redes_sociais',
        'type' => 'text',
        'sanitize_callback' => 'esc_url_raw',
        'settings' => 'facebook'
    ));

    $wp_customize->add_setting( 'twitter' );

    $wp_customize->add_control('twitter',  array(
        'label' => 'Twitter',
        'section' => 'redes_sociais',
        'type' => 'text',
        'sanitize_callback' => 'esc_url_raw',
        'settings' => 'twitter'
    ));

    $wp_customize->add_setting( 'instagram' );

    $wp_customize->add_control('instagram',  array(
        'label' => 'Instagram',
        'section' => 'redes_sociais',
        'type' => 'text',
        'sanitize_callback' => 'esc_url_raw',
        'settings' => 'instagram'
    ));

    $wp_customize->add_setting( 'youtube' );

    $wp_customize->add_control('youtube',  array(
        'label' => 'Youtube',
        'section' => 'redes_sociais',
        'type' => 'text',
        'sanitize_callback' => 'esc_url_raw',
        'settings' => 'youtube'
    ));
}

add_action( 'customize_register', 'themeslug_theme_customizer' );

function remove_customizer_settings( $wp_customize ){
  $wp_customize->remove_panel('nav_menus');
  $wp_customize->remove_section('static_front_page');
}
add_action( 'customize_register', 'remove_customizer_settings', 20 );

// 

function get_the_category_bytax( $id = false, $tcat = 'category' ) {
    $categories = get_the_terms( $id, $tcat );
    if ( ! $categories )
        $categories = array();

    $categories = array_values( $categories );

    foreach ( array_keys( $categories ) as $key ) {
        _make_cat_compat( $categories[$key] );
    }

    // Filter name is plural because we return alot of categories (possibly more than #13237) not just one
    return apply_filters( 'get_the_categories', $categories );
}

// 

function get_custom_field_data($key, $echo = false) {
    global $post;
    $value = get_post_meta($post->ID, $key, true);
    if($echo == false) {
        return $value;
    } else {
        echo $value;
    }
}

//

function hide_admin_bar() {
    wp_add_inline_style('admin-bar', '<style> html { margin-top: 0 !important; } </style>');
    return false;
}

add_filter( 'show_admin_bar', 'hide_admin_bar' );

//

function menu() {
  register_nav_menus(
    array(
      'header' => __( 'Header' )
    )
  );
}

add_action( 'init', 'menu' );

//

function updateNumbers() {
    global $wpdb;
    $querystr = "SELECT $wpdb->posts.* FROM $wpdb->posts WHERE $wpdb->posts.post_status = 'publish' AND $wpdb->posts.post_type = 'post' ";
    $pageposts = $wpdb->get_results($querystr, OBJECT);
    $counts = 0 ;
    if ($pageposts):
    foreach ($pageposts as $post):
    setup_postdata($post);
    $counts++;
    add_post_meta($post->ID, 'incr_number', $counts, true);
    update_post_meta($post->ID, 'incr_number', $counts);
    endforeach;
    endif;
}
 
add_action ( 'publish_post', 'updateNumbers' );
add_action ( 'deleted_post', 'updateNumbers' );
add_action ( 'edit_post', 'updateNumbers' );

// 

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 600, 600 );

// if (class_exists('MultiPostThumbnails')) {
//     for ($i=1;$i<5;$i++) {
//         new MultiPostThumbnails(
//             array(
//                 'label' => 'Image '.$i,
//                 'id' => 'featured-image-'.$i,
//                 'post_type' => 'page'
//             )
//         ); 
//     }
// }

update_option( 'siteurl', 'http://www.abla.com.br/hml/' );

update_option( 'home', 'http://www.abla.com.br/hml/' );

require_once('class-tgm-plugin-activation.php');

function register_required_plugins() {
    $plugins = array(
        // This is an example of how to include a plugin pre-packaged with a theme.
        array(
            'name' => 'wysija-newsletters.2.7.4', // The plugin name.
            'slug' => 'wysija-newsletters.2.7.4', // The plugin slug (typically the folder name).
            'source' => get_template_directory_uri() . '/plugins/wysija-newsletters.2.7.4.zip', // The plugin source.
            'required' => true, // If false, the plugin is only 'recommended' instead of required.
            'version' => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation' => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url' => '', // If set, overrides default API URL and points to an external URL.
        ),
        array(
            'name' => 'wp-mail-smtp.0.9.6', // The plugin name.
            'slug' => 'wp-mail-smtp.0.9.6', // The plugin slug (typically the folder name).
            'source' => get_template_directory_uri() . '/plugins/wp-mail-smtp.0.9.6.zip', // The plugin source.
            'required' => true, // If false, the plugin is only 'recommended' instead of required.
            'version' => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation' => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url' => '', // If set, overrides default API URL and points to an external URL.
        ),
        array(
            'name' => 'contact-form-7.4.4.2', // The plugin name.
            'slug' => 'contact-form-7.4.4.2', // The plugin slug (typically the folder name).
            'source' => get_template_directory_uri() . '/plugins/contact-form-7.4.4.2.zip', // The plugin source.
            'required' => true, // If false, the plugin is only 'recommended' instead of required.
            'version' => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation' => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url' => '', // If set, overrides default API URL and points to an external URL.
        ),
        array(
            'name' => 'MultiPostThumbnails', // The plugin name.
            'slug' => 'multiple-post-thumbnails', // The plugin slug (typically the folder name).
            'source' => get_template_directory_uri() . '/plugins/multiple-post-thumbnails.zip', // The plugin source.
            'required' => true, // If false, the plugin is only 'recommended' instead of required.
            'version' => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation' => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url' => '', // If set, overrides default API URL and points to an external URL.
        ),
        array(
            'name' => 'Yoast SEO', // The plugin name.
            'slug' => 'wordpress-seo', // The plugin slug (typically the folder name).
            'source' => get_template_directory_uri() . '/plugins/wordpress-seo.3.2.5.zip', // The plugin source.
            'required' => true, // If false, the plugin is only 'recommended' instead of required.
            'version' => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation' => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url' => '', // If set, overrides default API URL and points to an external URL.
        ),
    );

    /**
    * Array of configuration settings. Amend each line as needed.
    * If you want the default strings to be available under your own theme domain,
    * leave the strings uncommented.
    * Some of the strings are added into a sprintf, so see the comments at the
    * end of each line for what each argument will be.
    */
    $config = array(
        'default_path' => '', // Default absolute path to pre-packaged plugins.
        'menu' => 'tgmpa-install-plugins', // Menu slug.
        'has_notices' => true, // Show admin notices or not.
        'dismissable' => true, // If false, a user cannot dismiss the nag message.
        'dismiss_msg' => '', // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false, // Automatically activate plugins after installation or not.
        'message' => '', // Message to output right before the plugins table.
        'strings' => array(
        'page_title' => __( 'Install Required Plugins', 'tgmpa' ),
        'menu_title' => __( 'Install Plugins', 'tgmpa' ),
        'installing' => __( 'Installing Plugin: %s', 'tgmpa' ), // %s = plugin name.
        'oops' => __( 'Something went wrong with the plugin API.', 'tgmpa' ),
        'notice_can_install_required' => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s).
        'notice_can_install_recommended' => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s).
        'notice_cannot_install' => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s).
        'notice_can_activate_required' => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).
        'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).
        'notice_cannot_activate' => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s).
        'notice_ask_to_update' => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s).
        'notice_cannot_update' => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s).
        'install_link' => _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
        'activate_link' => _n_noop( 'Begin activating plugin', 'Begin activating plugins' ),
        'return' => __( 'Return to Required Plugins Installer', 'tgmpa' ),
        'plugin_activated' => __( 'Plugin activated successfully.', 'tgmpa' ),
        'complete' => __( 'All plugins installed and activated successfully. %s', 'tgmpa' ), // %s = dashboard link.
        'nag_type' => 'updated' // Determines admin notice type – can only be 'updated', 'update-nag' or 'error'.
        )
    );

    tgmpa( $plugins, $config );
}

add_action( 'tgmpa_register', 'register_required_plugins');

// 

add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if(is_category() || is_tag()) {
    $post_type = get_query_var('post_type');
    if($post_type)
        $post_type = $post_type;
    else
        $post_type = array('nav_menu_item','post','articles');
    $query->set('post_type',$post_type);
    return $query;
    }
}

// 

function custom_pagination($numpages = '', $pagerange = '', $paged='') {

  if (empty($pagerange)) {
    $pagerange = 2;
  }

  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   * 
   * It's good because we can now override default pagination
   * in our theme, and use this function in default quries
   * and custom queries.
   */
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }

  /** 
   * We construct the pagination arguments to enter into our paginate_links
   * function. 
   */
  $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => False,
    'prev_text'       => __('&laquo;'),
    'next_text'       => __('&raquo;'),
    'type'            => 'plain',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);

  if ($paginate_links) {
    echo "<nav class='custom-pagination'>";
      echo $paginate_links;
    echo "</nav>";
  }

}

function my_formatter($content) {
 $new_content = '';
 $pattern_full = '{(\[raw\].*?\[/raw\])}is';
 $pattern_contents = '{\[raw\](.*?)\[/raw\]}is';
 $pieces = preg_split($pattern_full, $content, -1, PREG_SPLIT_DELIM_CAPTURE);
 
 foreach ($pieces as $piece) {
 if (preg_match($pattern_contents, $piece, $matches)) {
 $new_content .= $matches[1];
 } else {
 $new_content .= wptexturize(wpautop($piece));
 }
 }
 
 return $new_content;
}
add_filter('the_content', 'my_formatter', 99);

// 



?>
