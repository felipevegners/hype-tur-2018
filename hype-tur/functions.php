<?php
  function theme_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('script-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array (), 1.0, true);
    wp_enqueue_script('script-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', array ('script-jquery'), 1.0, true);
    wp_enqueue_script('my-custom-script', get_template_directory_uri() .'/scripts/app.js', array('jquery'), 1.0, true);
    wp_enqueue_script('script-owl-carousel', get_template_directory_uri() .'/scripts/owl.carousel.min.js', array('jquery'), 1.0, true);
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
        // 'taxonomies'         => array('category'),
        'supports'           => $supports,
    );
    register_post_type('promo-package', $args);
}
add_action('init', 'create_post_type_package');

function create_metabox_package($meta_boxes_package) {
  $meta_boxes_package[] = array(
      'title'      => __('Informações do Pacote Anunciado', 'hype-tur'),
      'post_types' => array('promo-package'),
      'fields'     => array(
          array(
              'id'   => 'place',
              'name' => __('Destino', 'hype-tur'),
              'type' => 'text',
          ),
          array(
              'id'   => 'country',
              'name' => __('País do destino', 'hype-tur'),
              'type' => 'text',
          ),
          array(
              'id'   => 'description',
              'name' => __('Breve descrição do destino', 'hype-tur'),
              'type' => 'textarea',
          ),
          array(
            'id' => 'picture_url',
            'name' => __('URL da Imagem do destino', 'hype-tur'),
            'type' => 'text'
          ),
      )
  );

    return $meta_boxes_package;
  }
  add_filter('rwmb_meta_boxes', 'create_metabox_package');
	?>
<?php
	add_theme_support( 'post-thumbnails' );
?>