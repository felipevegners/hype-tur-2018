<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
    <?php bloginfo('name'); ?>
  </title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <div class="container">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
          <h1 class="-logo">
            <?php bloginfo('name')?>
          </h1>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarSupportedContent"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav mt-2 mt-lg-0 ml-auto" onclick="myFunction(event);">
            <li class="nav-item">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Serviços</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about-us">Quem Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
            <li class="nav-item">
              <a class="social-icon" href="#"><img src="<?php echo get_template_directory_uri();?>/images/icons/hype-facebook.svg" alt="Acesse nosso Facebook"></a>
            </li>
            <li class="nav-item">
              <a class="social-icon" href="#"><img src="<?php echo get_template_directory_uri();?>/images/icons/hype-instagram.svg" alt="Acesse nosso Instagram"></a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!--
        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        <p><?php bloginfo('description'); ?></p>
        -->
    <!-- <nav>
      <?php wp_nav_menu(); ?>
    </nav> -->
  </header>
