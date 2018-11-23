<?php   get_header(); ?>

<!-- <div class="owl-carousel owl-theme promo-package"> -->
<div class="promo-package">
  <?php
    $args = array(
    'post_type'	  => 'promo-package',
    'post_status' => 'publish',
    'nopaging' => true,
    'orderby' => 'meta_value_num',
    'order' => 'ASC'
    );
    $query = new WP_Query($args);
    $packages = $query->posts;
    foreach ($packages as $package) {
    $package_meta = get_post_meta($package->ID, '', true);
  ?>
  <div class="promo-package-wrapper">
    <section class="destination-section" style="background:url(<?php echo $package_meta['picture_url'][0] ?>) top center/cover no-repeat;">
      <div class="container">
        <div class="row">
          <div class="destination-detail">
            <h1><?php echo $package_meta['place'][0] ?></h1>
            <small><?php echo $package_meta['country'][0] ?></small>
            <p><?php echo $package_meta['intro'][0] ?></p>
            <p><?php echo $package_meta['testmonial'][0] ?></p>
            <button class="more-info-btn">Quero saber mais!</button>
          </div>
        </div>
      </div>
    </section>
    <section class="destination-about">
      <div class="container">
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <h1><?php echo $package_meta['package_title'][0] ?></h1>
            <p><?php echo $package_meta['package_description'][0] ?></p>
          </div>
        </div>
        <div class="row destination-price">
          <div class="col-md-5 offset-md-1">
            <div class="row">
              <div class="col-md-4 package-icon">
                <?php echo $package_meta['package_includes'][0] ?>
                <span class="icon-wrapper">
                  <img class="icon" src="<?php echo get_template_directory_uri();?>/images/icons/air-ticket.svg">
                </span>
                <p class="icon-label">AÉREO</p>
              </div>
              <div class="col-md-4 package-icon">
                <span class="icon-wrapper">
                  <img class="icon" src="<?php echo get_template_directory_uri();?>/images/icons/hotel-bed.svg">
                </span>
                <p class="icon-label">HOTEL</p>
              </div>
              <div class="col-md-4 package-icon">
                <span class="icon-wrapper">
                  <img class="icon -car" src="<?php echo get_template_directory_uri();?>/images/icons/car-rent.svg">
                </span>
                <p class="icon-label">TERRESTRE</p>
              </div>
            </div>
            <div class="row">
              <p class="col-md-12">
                Fixie tote bag ethnic keytar. Neutra vinyl American Apparel kale chips tofu art party, cardigan raw denim quinoa. Apparel
                kale chips tofu art party, cardigan raw denim quinoa.
              </p>
            </div>
          </div>
          <div class="col-md-5 inset-md-1 package-price">
            <div class="row">
              <div class="col-md-12">
                <h1>Valor do Pacote</h1>
                <p>O valor do pacote inclui todas as tarifas e taxas, inclusive as hospedagens.</p>
                <h1>R$ 4.659,90*</h1>
                <small>
                  *por passageiro (incluso taxas) em até 10x sem juros no cartão de crédito. Valor sujeito à variação cambial.
                </small>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <button class="buy-package">Quero fechar este pacote</button>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <!-- BOOTSTRAP TABS -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">HOME</div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">PROFILE</div>
              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">CONTACT</div>
            </div>
            <!-- JS BUTTON TABS -->
            <div class="w3-bar w3-black">
              <button class="w3-bar-item w3-button" onclick="openCity('London')">London</button>
              <button class="w3-bar-item w3-button" onclick="openCity('Paris')">Paris</button>
              <button class="w3-bar-item w3-button" onclick="openCity('Tokyo')">Tokyo</button>
            </div>

            <div id="London" class="w3-container city" style="border:1px solid red">
              <h2>London</h2>
              <p>London is the capital city of England.</p>
            </div>

            <div id="Paris" class="w3-container city" style="display:none; border:1px solid red">
              <h2>Paris</h2>
              <p>Paris is the capital of France.</p> 
            </div>

            <div id="Tokyo" class="w3-container city" style="display:none; border:1px solid red">
              <h2>Tokyo</h2>
              <p>Tokyo is the capital of Japan.</p>
            </div>
            <!-- PURE CSS TABS -->
            <div class="pc-tab">
              <input id="tab1" type="radio" name="pct" checked />
              <input id="tab2" type="radio" name="pct" />
              <input id="tab3" type="radio" name="pct" />
              <nav>
                <ul>
                  <li class="tab1">
                    <label for="tab1">First Tab</label>
                  </li>
                  <li class="tab2">
                    <label for="tab2">Second Tab</label>
                  </li>
                  <li class="tab3">
                    <label for="tab3">Third Tab</label>
                  </li>
                </ul>
              </nav>
              <section>
                <div class="tab1">
                  <h2>First</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus itaque quidem minus nostrum, voluptatem accusamus aspernatur quia harum ratione, officia laudantium inventore autem doloribus atque labore numquam non. Hic, animi.</p>
                </div>
                <div class="tab2">
                  <h2>Second</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum nesciunt ipsum dolore error repellendus officiis aliquid a, vitae reprehenderit, accusantium vero, ad. Obcaecati numquam sapiente cupiditate. Praesentium eaque, quae error!</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, maiores.</p>
                </div>
                <div class="tab3">
                  <h2>Third</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, nobis culpa rem, vitae earum aliquid.</p>
                </div>
              </section>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- END CAROUSEL -->
<?php
  }
?>
</div>

<!-- SERVICES -->
<section class="services">
  <div class="container">
    <h1 class="section-title">Serviços</h1>
    <div class="col-md-12">
      <div class="row align-items-center services-wrapper">
        <div class="col-md-3 text-center">
          <img src="<?php echo get_template_directory_uri();?>/images/icons/service-category-1.svg" alt="">
          <h3>A Hype Tur atende clientes que desejam viajar seja para turismo ou negócios </h3>
        </div>
        <div class="col-md-4 offset-md-1">
          <div class="row align-items-center service-icon-wrapper">
            <div class="col-md-3 text-center">
              <img src="<?php echo get_template_directory_uri();?>/images/icons/service-ticket.svg" alt="">
            </div>
            <div class="col-md-9">
              <p>Passagens Aéreas</p>
            </div>
          </div>
          <div class="row align-items-center service-icon-wrapper">
            <div class="col-md-3 text-center">
              <img src="<?php echo get_template_directory_uri();?>/images/icons/service-train.svg" alt="">
            </div>
            <div class="col-md-9">
              <p>Bilhetes de Trens</p>
            </div>
          </div>
          <div class="row align-items-center service-icon-wrapper">
            <div class="col-md-3 text-center">
              <img src="<?php echo get_template_directory_uri();?>/images/icons/service-hotel.svg" alt="">
            </div>
            <div class="col-md-9">
              <p>Reservas de Hotéis</p>
            </div>
          </div>
          <div class="row align-items-center service-icon-wrapper">
            <div class="col-md-3 text-center">
              <img src="<?php echo get_template_directory_uri();?>/images/icons/service-resort.svg" alt="">
            </div>
            <div class="col-md-9">
              <p>Spa & Resorts</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row align-items-center service-icon-wrapper">
            <div class="col-md-3 text-center">
              <img src="<?php echo get_template_directory_uri();?>/images/icons/service-car.svg" alt="">
            </div>
            <div class="col-md-9">
              <p>Locação de Veículos</p>
            </div>
          </div>
          <div class="row align-items-center service-icon-wrapper">
            <div class="col-md-3 text-center">
              <img src="<?php echo get_template_directory_uri();?>/images/icons/service-boat.svg" alt="">
            </div>
            <div class="col-md-9">
              <p>Cruzeiros Marítimos e Fluviais</p>
            </div>
          </div>
          <div class="row align-items-center service-icon-wrapper">
            <div class="col-md-3 text-center">
              <img src="<?php echo get_template_directory_uri();?>/images/icons/service-park-ticket.svg" alt="">
            </div>
            <div class="col-md-9">
              <p>Parques, Shows e Atrações</p>
            </div>
          </div>
          <div class="row align-items-center service-icon-wrapper">
            <div class="col-md-3 text-center">
              <img src="<?php echo get_template_directory_uri();?>/images/icons/service-landmark.svg" alt="">
            </div>
            <div class="col-md-9">
              <p>Passeios Turísticos</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row align-items-center services-wrapper">
        <div class="col-md-3 text-center">
          <img src="<?php echo get_template_directory_uri();?>/images/icons/service-category-2.svg" alt="">
          <h3>Pacotes Especiais para Datas Especiais</h3>
        </div>
        <div class="col-md-4 offset-md-1">
          <div class="row align-items-center service-icon-wrapper">
            <div class="col-md-3 text-center">
              <img src="<?php echo get_template_directory_uri();?>/images/icons/service-honeymoon.svg" alt="">
            </div>
            <div class="col-md-9">
              <p>Lua de Mel e Bodas</p>
            </div>
          </div>
          <div class="row align-items-center service-icon-wrapper">
            <div class="col-md-3 text-center">
              <img src="<?php echo get_template_directory_uri();?>/images/icons/service-wedding.svg" alt="">
            </div>
            <div class="col-md-9">
              <p>Destination Wedding</p>
            </div>
          </div>
          <div class="row align-items-center service-icon-wrapper">
            <div class="col-md-3 text-center">
              <img src="<?php echo get_template_directory_uri();?>/images/icons/service-wine.svg" alt="">
            </div>
            <div class="col-md-9">
              <p>Viagens Gastronômicas</p>
            </div>
          </div>
          <div class="row align-items-center service-icon-wrapper">
            <div class="col-md-3 text-center">
              <img src="<?php echo get_template_directory_uri();?>/images/icons/service-golf.svg" alt="">
            </div>
            <div class="col-md-9">
              <p>Golf</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row align-items-center service-icon-wrapper">
            <div class="col-md-3 text-center">
              <img src="<?php echo get_template_directory_uri();?>/images/icons/service-ski.svg" alt="">
            </div>
            <div class="col-md-9">
              <p>Ski & Snowboard</p>
            </div>
          </div>
          <div class="row align-items-center service-icon-wrapper">
            <div class="col-md-3 text-center">
              <img src="<?php echo get_template_directory_uri();?>/images/icons/service-sports.svg" alt="">
            </div>
            <div class="col-md-9">
              <p>Eventos Esportivos</p>
            </div>
          </div>
          <div class="row align-items-center service-icon-wrapper">
            <div class="col-md-3 text-center">
              <img src="<?php echo get_template_directory_uri();?>/images/icons/service-guide.svg" alt="">
            </div>
            <div class="col-md-9">
              <p>Viagens com Guias</p>
            </div>
          </div>
          <div class="row align-items-center service-icon-wrapper">
            <div class="col-md-3 text-center">
              <img src="<?php echo get_template_directory_uri();?>/images/icons/service-interchange.svg" alt="">
            </div>
            <div class="col-md-9">
              <p>Intercâmbio</p>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<!-- ABOUT US -->
<section id="about-us" class="about-us">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="section-title">Quem Somos</h1>
      </div>
    </div>
    <div class="row about-wrapper">
      <div class="col-12">
        <?php
          // query for the page
          $page_query = new WP_Query( 'pagename=quem-somos' );
          // "loop" through query (even though it's just one page) 
          while ( $page_query->have_posts() ) : $page_query->the_post();
              the_content();
          endwhile;
          // reset post data (important!)
          wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>
</section>
<!-- TESTMONIALS -->
<section class="testmonials">
  <div class="container">
    <div class="owl-carousel owl-theme single-testimonial">
      <div class="row">
        <div class="col-md-3 offset-md-1 text-right">
          <img src="<?php echo get_template_directory_uri();?>/images/testmonial-avatar.png" alt="" style="display:inline-block !important; width:auto !important;">
        </div>
        <div class="col-md-5 inset-md-1">
          <h4 class="quotes-icon"></h4>
          <p>A Hype Tur cuidou de tudo quando resolvi conhecer a Europa e realmente a viagem foi perfeita! Agora estou planejando
            um mochilão pela Ásia e com certeza viajarei com as meninas de novo. Obrigado!</p>
          <h5>Cléo Pires, 35 anos - Atriz</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 offset-md-1 text-right">
          <img src="<?php echo get_template_directory_uri();?>/images/testmonial-avatar.png" alt="" style="display:inline-block !important; width:auto !important;">
        </div>
        <div class="col-md-5 inset-md-1">
          <h4 class="quotes-icon"></h4>
          <p>Lorem Ipsum sit dolor amet, dolor sit amet lorem ipsum ipsum</p>
          <h5>Tania Pachedo, 35 anos - Empresária</h5>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- BLOG SECTION -->
<section class="blog-section">
  <div class="container">
    <h1 class="section-title">Blog Hype Tur</h1>
    <div class="row">
      <div class="col-md-12">
        <p>Fixie tote bag ethnic keytar. Neutra vinyl American Apparel kale chips tofu art party, cardigan raw denim quinoa. Cray
          paleo tattooed, Truffaut skateboard street art PBR jean shorts.</p>
      </div>
      <div class="col-md-5 last-post-column">
        <h5><em>Último Post</em></h5>
        <hr>
        <?php
            query_posts('showposts=1');
            if(have_posts()):
              while(have_posts()): the_post(); 
        ?>
          <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
          <span class="post-author">por <?php the_author();?> em <?php the_time("d/m/Y"); ?></span>
          <?php the_post_thumbnail(); ?>
          <?php the_excerpt(); ?>
          <button type="button" class="show-full-post">
            <a href="<?php the_permalink(); ?>">Continuar lendo</a>
          </button>
          <?php endwhile;
            else:
              echo '<p>Nenhum post encontrado</p>';
            endif;
          ?>
      </div>
      <div class="col-md-5 offset-1 most-liked-tags">
        <h5>Os termos mais buscados em nosso blog</h5>
        <hr>
        <p>Fixie tote bag ethnic keytar. Neutra vinyl American Apparel kale chips tofu art party.</p>
        <div class="row">
          <div class="col-md-12">
            <?php if ( function_exists( 'wp_tag_cloud' ) ) : ?>
              <ul class="tag-cloud">
              <li><?php wp_tag_cloud( 'smallest=14&largest=16&number=10&orderby=count' ); ?></li>
              </ul>
              <?php endif; ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
          <button type="button" class="show-full-post">
            <a href="/blog">Ver todos os posts</a>
          </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- CONTACT-US -->
<section class="contact-section">
  <div class="container">
      <h1 class="section-title">Fale conosco</h1>
    <div class="row">
      <div class="col-md-6">
        <p>Fixie tote bag ethnic keytar. Neutra vinyl American Apparel kale chips tofu art party, cardigan raw denim quinoa.</p>
        <form>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Seu nome">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Seu melhor e-mail">
          </div>
          <div class="form-row">
            <div class="form-group col-md-2">
              <input type="text" class="form-control" placeholder="DDD">
            </div>
            <div class="form-group col-md-4">
              <input type="text" class="form-control" placeholder="Telefone">
            </div>
            <div class="form-group col-md-6">
              <div class="form-check">
                <input type="checkbox" name="" id="msgMeWpp" class="form-check-input">
                <label for="msgMeWpp">Contacte-me pelo Whatsapp</label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="" id="" rows="4" class="form-control"></textarea>
          </div>
          <div class="form-check">
            <input type="checkbox" name="" id="emailMe" class="form-check-input">
            <label for="emailMe">Desejo receber novidades e promoções por e-mail</label>
          </div>
          <a href="#" class="mt-4 btn">Enviar mensagem</a>
        </form>
      </div>
      <div class="col-md-5 offset-md-1">
        <img src="<?php bloginfo('template_url');?>/images/jundiai-map.png" alt="" width="100%">
        <div class="row mt-4">
          <div class="col-md-3">
            <img src="<?php bloginfo('template_url');?>/images/brand/normal-brand.svg" alt="" width="100%">
          </div>
          <div class="col-md-9 company-info">
            <p class="mb-0">A.O. PACHECO VIAGENS E TURISMO - ME</p>
            <p class="mb-0">CNPJ 08.345.543/0001-78</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p class="my-4">
              Av. Nove de Julho, 2575 - Sala 210 - Ed. Maxime
              <br>Anhangabaú - Jundiaí / SP
              <br>CEP 13208-056
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <a href="#" class="mt-4 btn debit-form">Autorização de Débito</a>
            <small>*Faça o download e preencha corretamente os campos para autorizar o débito das despesas de sua viagem.</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>