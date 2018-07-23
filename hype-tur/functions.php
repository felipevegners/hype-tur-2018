<?php
  function theme_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('my-custom-script', get_template_directory_uri() .'/scripts/app.js', array('jquery'), 1.0, true);
  }
  add_action('wp_enqueue_scripts', 'theme_resources');
	?>
<?php
	add_theme_support( 'post-thumbnails' );
?>