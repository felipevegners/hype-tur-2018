<?php

  function theme_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('script-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array (), 1.0, true);
    wp_enqueue_script('script-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', array ('script-jquery'), 1.0, true);
    wp_enqueue_script('my-custom-script', get_template_directory_uri() .'/scripts/app.js', array('jquery'), 1.0, true);
    // wp_enqueue_script('script-owl-carousel', get_template_directory_uri() .'/scripts/owl.carousel.min.js', array('jquery'), 1.0, true);
  }
  add_action('wp_enqueue_scripts', 'theme_resources');
  
  // Meta Box creates Admin Custom Menu
  function create_post_type_package() {
    $labels = array(
        'name'                => __('Pacotes Promocionais | Home Page', 'hype-tur'),
        'singular_name'       => __('Pacotes', 'hype-tur'),
        'add_new'             => __('Adicionar pacote', 'hype-tur'),
        'add_new_item'        => __('Adicionar pacote', 'hype-tur'),
        'edit_item'           => __('Editar Pacote', 'hype-tur'),
        'new_item'            => __('Novo Pacote', 'hype-tur'),
        'all_items'           => __('Todos os pacotes', 'hype-tur'),
        'view_item'           => __('Visualizar pacote', 'hype-tur'),
        'search_items'        => __('Buscar pacote', 'hype-tur'),
        'not_found'           => __('Nenhum pacote encontrado', 'hype-tur'),
        'not_found_in_trash'  => __('Nenhum pacote no lixo', 'hype-tur'),
        'menu_name'           => __('Pacotes Promocionais', 'hype-tur'),
    );

    $supports = array('title', 'thumbnail');
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'hype-tur'),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 4,
        'supports'           => $supports,
    );
    register_post_type('promo-package', $args);
}
add_action('init', 'create_post_type_package');

// CREATES METABOX LOOP
function create_metabox_package($meta_boxes_package) {
  $meta_boxes_package[] = array(
      'title'      => __('Informações do Pacote Anunciado', 'hype-tur'),
      'post_types' => array('promo-package'),
      'fields'     => array(
          array(
              'id'   => 'place',
              'name' => __('Destino:', 'hype-tur'),
              'type' => 'text',
          ),
          array(
              'id'   => 'country',
              'name' => __('País do destino:', 'hype-tur'),
              'type' => 'text',
          ),
          array(
              'id'   => 'intro',
              'name' => __('Breve introdução do destino:', 'hype-tur'),
              'type' => 'textarea',
          ),
          array(
            'id' => 'picture_url',
            'name' => __('URL da Imagem do destino:', 'hype-tur'),
            'type' => 'text'
          ),
          array(
            'id' => 'package_title',
            'name' => __('Título do Pacote Promocional:', 'hype-tur'),
            'type' => 'text'
          ),
          array(
            'id' => 'package_description',
            'name' => __('Descrição do Pacote Promocional:', 'hype-tur'),
            'type' => 'textarea'
          ),
          array(
            'id' => 'package_includes',
            'name' => __('O pacote inclui:', 'hype-tur'),
            'type' => 'checkbox_list',
            'options' => array(
                'Aéreo' => 'Inclui aéreo',
                'hotel' => 'Inclui hotel',
                'terrestre' => 'Inclui terrestre',
            ),
            'inline' => true,
          ),
      )
  );

    return $meta_boxes_package;
  }
  add_filter('rwmb_meta_boxes', 'create_metabox_package');

  // Custom Excerpts
    function hypeturwp_index($length) // Create 20 Word Callback for Index page Excerpts, call using hypeturwp_excerpt('hypeturwp_index');
    {
        return 20;
    }

    // Create 40 Word Callback for Custom Post Excerpts, call using hypeturwp_excerpt('hypeturwp_custom_post');
    function hypeturwp_custom_post($length)
    {
        return 40;
    }

    // Create the Custom Excerpts callback
    function hypeturwp_excerpt($length_callback = '', $more_callback = '')
    {
        global $post;
        if (function_exists($length_callback)) {
            add_filter('excerpt_length', $length_callback);
        }
        if (function_exists($more_callback)) {
            add_filter('excerpt_more', $more_callback);
        }
        $output = get_the_excerpt();
        $output = apply_filters('wptexturize', $output);
        $output = apply_filters('convert_chars', $output);
        $output = '<p>' . $output . '</p>';
        echo $output;
    }

    // Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
    function hypeturwp_pagination()
    {
        global $wp_query;
        $big = 999999999;
        echo paginate_links(array(
            'base' => str_replace($big, '%#%', get_pagenum_link($big)),
            'format' => '?paged=%#%',
            'current' => max(1, get_query_var('paged')),
            'total' => $wp_query->max_num_pages
        ));
    }

?>
<?php
	add_theme_support( 'post-thumbnails' );
?>