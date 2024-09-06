  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li>
            <a <?php echo "href='?/Controlador/index/".$nomedalingua."'";?>><?php echo $locsitio1;?></a>
          </li>
          <li><?php echo $locsitio2;?></li>
        </ol>
        <h2><?php echo $titulositio;?></h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= barnner ======= -->
    <section id='barnner' class='barnner'>
      <div class='container-flex'>
        <div class="row banner">
            <div class="col d-flex justify-content-center">
              <img src="public/img/banner/banner_sitio.jpg" class="img-fluid" alt="" style="">
            </div>
        </div>
      </div>
    </section><!-- End barnner -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">
        <div class="row">

          <div class="col-lg">
            <div class="testimonial-item mt-4 mt-lg-0">
              <h3><?php echo $titulosobresitio;?></h3>

              <p>
              <?php echo $textosobresitio1;?>
              </p>
              <p>
              <?php echo $textosobresitio2;?>
              </p>
              <p>
              <?php echo $textosobresitio3;?>
              </p>
              <p>
              <?php echo $textosobresitio4;?>
              </p>
              
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= mapa ======= -->
    <section id="mapa" class="mapa">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3><?php echo $titulomapa;?></h3>
            <p>
            <?php echo $textomapa1;?>
            </p>
            <p>
              <?php echo $textomapa2;?> <br>
              <?php echo $textomapa3;?> <br>
              <?php echo $textomapa4;?> <br>
              <?php echo $textomapa5;?> <br>
              <?php echo $textomapa6;?> <br>
              <?php echo $textomapa7;?> <br>
              <?php echo $textomapa8;?> <br>
            </p>
          </div>
          <div class="col-lg-6">
            <img src="public/img/mapa_site3.png" class="img-fluid" alt="" height="500px" width="500px">
          </div>
        </div>

      </div>
    </section><!-- End mapa Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
        <div class="container">

          <h3><?php echo $titulogaleria;?></h3>

          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todas</li>
              <li data-filter=".filter-rochosas">Formações rochosas</li>
              <li data-filter=".filter-vege">Vegetação</li>
              <li data-filter=".filter-pinturas">Pinturas</li>
            </ul>
          </div>

          <div class="row portfolio-container">

            <div class="col-lg-4 col-md-6 portfolio-item filter-vege">
              <div class="portfolio-wrap">
                <img src="public/img/galeria_fotos/vegetação/vege1.jpg" class="img-fluid" alt="">
                <a href="public/img/galeria_fotos/vegetação/vege1.jpg" data-gallery="portfolioGallery" class="portfolio-info portfolio-lightbox filter-rochosas" <?php echo "title='".$itemgaleria1."'";?>></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-rochosas">
              <div class="portfolio-wrap">
                <img src="public/img/galeria_fotos/formações_rochosas/rocho1.jpg" class="img-fluid" alt="">
                <a href="public/img/galeria_fotos/formações_rochosas/rocho1.jpg" data-gallery="portfolioGallery" class="portfolio-info portfolio-lightbox" <?php echo "title='".$itemgaleria2."'";?>></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-rochosas">
              <div class="portfolio-wrap">
                <img src="public/img/galeria_fotos/formações_rochosas/rocho2.jpg" class="img-fluid" alt="">
                <a href="public/img/galeria_fotos/formações_rochosas/rocho2.jpg" data-gallery="portfolioGallery" class="portfolio-info portfolio-lightbox" <?php echo "title='".$itemgaleria3."'";?>></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-rochosas">
              <div class="portfolio-wrap">
                <img src="public/img/galeria_fotos/formações_rochosas/rocho3.jpg" class="img-fluid" alt="">
                <a href="public/img/galeria_fotos/formações_rochosas/rocho3.jpg" data-gallery="portfolioGallery" class="portfolio-info portfolio-lightbox" <?php echo "title='".$itemgaleria4."'";?>></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-vege">
              <div class="portfolio-wrap">
                <img src="public/img/galeria_fotos/vegetação/vege2.jpg" class="img-fluid" alt="">
                <a href="public/img/galeria_fotos/vegetação/vege2.jpg" data-gallery="portfolioGallery" class="portfolio-info portfolio-lightbox" <?php echo "title='".$itemgaleria5."'";?>></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-rochosas">
              <div class="portfolio-wrap">
                <img src="public/img/galeria_fotos/formações_rochosas/rocho4.jpg" class="img-fluid" alt="">
                <a href="public/img/galeria_fotos/formações_rochosas/rocho4.jpg" data-gallery="portfolioGallery" class="portfolio-info portfolio-lightbox" <?php echo "title='".$itemgaleria6."'";?>></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-pinturas">
              <div class="portfolio-wrap">
                <img src="public/img/galeria_fotos/rupestres/rupes1.jpg" class="img-fluid" alt="">
                <a href="public/img/galeria_fotos/rupestres/rupes1.jpg" data-gallery="portfolioGallery" class="portfolio-info portfolio-lightbox" <?php echo "title='".$itemgaleria7."'";?>"></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-pinturas">
              <div class="portfolio-wrap">
                <img src="public/img/galeria_fotos/rupestres/rupes2.jpg" class="img-fluid" alt="">
                <a href="public/img/galeria_fotos/rupestres/rupes2.jpg" data-gallery="portfolioGallery" class="portfolio-info portfolio-lightbox" <?php echo "title='".$itemgaleria8."'";?>></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-vege">
              <div class="portfolio-wrap">
                <img src="public/img/galeria_fotos/vegetação/vege3.jpg" class="img-fluid" alt="">
                <a href="public/img/galeria_fotos/vegetação/vege3.jpg" data-gallery="portfolioGallery" class="portfolio-info portfolio-lightbox" <?php echo "title='".$itemgaleria9."'";?>></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-pinturas">
              <div class="portfolio-wrap">
                <img src="public/img/galeria_fotos/rupestres/rupes3.jpg" class="img-fluid" alt="">
                <a href="public/img/galeria_fotos/rupestres/rupes3.jpg" data-gallery="portfolioGallery" class="portfolio-info portfolio-lightbox" <?php echo "title='".$itemgaleria7."'";?>"></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-rochosas">
              <div class="portfolio-wrap">
                <img src="public/img/galeria_fotos/formações_rochosas/rocho5.jpg" class="img-fluid" alt="">
                <a href="public/img/galeria_fotos/formações_rochosas/rocho5.jpg" data-gallery="portfolioGallery" class="portfolio-info portfolio-lightbox" <?php echo "title='".$itemgaleria8."'";?>></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-vege">
              <div class="portfolio-wrap">
                <img src="public/img/galeria_fotos/vegetação/vege4.jpg" class="img-fluid" alt="">
                <a href="public/img/galeria_fotos/vegetação/vege4.jpg" data-gallery="portfolioGallery" class="portfolio-info portfolio-lightbox" <?php echo "title='".$itemgaleria9."'";?>></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-vege">
              <div class="portfolio-wrap">
                <img src="public/img/galeria_fotos/vegetação/vege5.jpg" class="img-fluid" alt="">
                <a href="public/img/galeria_fotos/vegetação/vege5.jpg" data-gallery="portfolioGallery" class="portfolio-info portfolio-lightbox" <?php echo "title='".$itemgaleria7."'";?>"></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-pinturas">
              <div class="portfolio-wrap">
                <img src="public/img/galeria_fotos/rupestres/rupes4.jpg" class="img-fluid" alt="">
                <a href="public/img/galeria_fotos/rupestres/rupes4.jpg" data-gallery="portfolioGallery" class="portfolio-info portfolio-lightbox" <?php echo "title='".$itemgaleria8."'";?>></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-pinturas">
              <div class="portfolio-wrap">
                <img src="public/img/galeria_fotos/rupestres/rupes5.jpg" class="img-fluid" alt="">
                <a href="public/img/galeria_fotos/rupestres/rupes5.jpg" data-gallery="portfolioGallery" class="portfolio-info portfolio-lightbox" <?php echo "title='".$itemgaleria9."'";?>></a>
              </div>
            </div>

          </div>

        </div>
    </section><!-- End Portfolio Section -->
    
  </main><!-- End #main -->