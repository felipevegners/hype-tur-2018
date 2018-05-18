<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
      <header>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2"><h1>Hype Tur Logo</h1></div>
            <div class="col-md-6 offset-md-4">
              <ul>
                <li>Home</li>
                <li>Serviços</li>
                <li>Quem somos</li>
                <li>Blog</li>
                <li>Contato</li>
                <li>Facebook</li>
                <li>Instagram</li>
                <li>PT</li>
                <li>EN</li>
              </ul>
            </div>
          </div>
        </div>
        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        <p><?php bloginfo('description'); ?></p>
        <nav>
          <!-- <?php wp_nav_menu(); ?> -->
        </nav>
      </header>
