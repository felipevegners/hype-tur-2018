<?php   get_header(); ?>
<div class="container">
  <div class="row">
      <div class="col-md-4">
        <h1>Taj Mahal</h1>
        <small>Índia</small>
        <p>Um mausoléu situado em Agra, é o mais conhecido dos monumentos do país. Classificado pela UNESCO como Patrimônio da Humanidade e anunciado em 2007 como uma das Sete Maravilhas do Mundo.</p>
        <button>Quero saber mais!</button>
      </div>
      <div class="col-md-8 col-md-inset-3">
        <img src="https://source.unsplash.com/random/960x620" alt="" width="920px" height="614px">
      </div>
  </div>
</div>
<!-- <?php
  if(have_posts()):
    while(have_posts()): the_post(); ?>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <p><?php the_content(); ?></p>
<?php endwhile;
  else:
    echo '<p>No content found</p>';
  endif;
?> -->
<?php get_footer(); ?>
