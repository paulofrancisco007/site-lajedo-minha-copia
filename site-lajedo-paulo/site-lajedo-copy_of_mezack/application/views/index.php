  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item transparencia active" style="background-image: url(public/img/slide/foto1.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><?php echo $titulocarrossel;?></h2>
                <h3 class="animate__animated animate__fadeInUp"><?php echo $carrosseltituloum;?></h3>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(public/img/slide/foto1.jpg)">

          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(public/img/slide/foto3.jpg)">

          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Section ======= -->

    <!-- ======= Testimonials Section ======= -->
    <section id="index" class="index pt-5">
      <div class="container">

        <div class="row">

          <div class="col-lg">
            <div class="testimonial-item mt-4 mt-lg-0">
              <h3>Lajedo de Soledade</h3>
              <p>
                <?php echo $textolajedo;?>
              </p>
              <a <?php echo "href='?/Controlador/sitio/".$nomedalingua."'";?> class="pt-5 saibamais">
                <?php echo $saibamais;?>
              </a>
            </div>
          </div>

          <div class="col-lg">
            <div class="testimonial-item mt-4 mt-lg-0">
              <h3><?php echo $titulomuseulaje;?></h3>
              <p>
                <?php echo $textomuseulaje;?>
              </p>
              <a <?php echo "href='?/Controlador/museu/".$nomedalingua."'";?> class="pt-5 saibamais">
                <?php echo $saibamais;?>
              </a>
            </div>
          </div>

          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= About Section ======= -->
    <section id="visitar" class="visitar">
      <div class="container">

        <div class="row">
          <div class="col-lg pt-4 pt-lg-0 content">
            <h3><?php echo $titulofalslaje;?></h3>
            <p>
                <?php echo $textofalslaje;?>
            </p>
            <a <?php echo "href='?/Controlador/fals/".$nomedalingua."'";?> class="pt-5 saibamais">
                <?php echo $saibamais;?>
            </a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

  </main><!-- End #main -->