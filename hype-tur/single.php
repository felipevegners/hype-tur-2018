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
  <section class="blog-section">
    <div class="container">
      <h1 class="section-title">Blog Hype Tur</h1>
      <?php
        query_posts('showposts=10');
          if(have_posts()):
          while(have_posts()): the_post();
      ?>
      <div class="row">
        <div class="col-md-10 offset-1">
          <h2><?php the_title();?></h2>
          <span class="post-author">por <?php the_author();?> em <?php the_time("d/m/Y"); ?></span>
          <?php if ( has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
              <?php the_post_thumbnail(); ?>
            </a>
          <?php endif; ?>
          <p><?php the_content();?></p>

        </div>
      </div>
      <?php endwhile;
        else:
          echo '<p>Nenhum post encontrado</p>';
        endif;
      ?>
    </div>
  </section>

</body>
</html>

