  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          
          <li>
            <a <?php echo "href='?/Controlador/index/".$nomedalingua."'";?>><?php echo $locvisitar1;?></a>
          </li>
          <li><?php echo $locvisitar2;?></li>
        </ol>
        <h2><?php echo $titulovisitar;?></h2>

      </div>
    </section><!-- End Breadcrumbs -->
    
    <!-- ======= barnner ======= -->
    <section id='barnner' class='barnner'>
      <div class='container-flex'>
        <div class="row banner">
            <div class="col d-flex justify-content-center">
              <img src="public/img/banner/banner_visitar.jpg" class="img-fluid" alt="" style="">
            </div>
        </div>
      </div>
    </section><!-- End barnner -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="row">

          <div class="col-lg-4">
            <div class="testimonial-item mt-4 mt-lg-0">
              <h3><?php echo $titulofuncio;?></h3>
              <p>
                <li><?php echo $textofuncio1;?></li><br>
                <li><?php echo $textofuncio2;?></li><br> <br>
              </p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="testimonial-item mt-4 mt-lg-0">
              <h3><?php echo $titulopreco;?></h3>
              <p>
                <?php echo $textopreco1;?> <br>
                <ul>
                  <li><?php echo $textopreco2;?></li>
                  <li><?php echo $textopreco3;?></li>
                </ul>
                
                <?php echo $textopreco4;?> <br>
                <ul>
                  <li><?php echo $textopreco5;?></li>
                  <li><?php echo $textopreco6;?></li>
                </ul>
              </p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="testimonial-item mt-4 mt-lg-0">
              <h3><?php echo $tituloorientacao;?></h3>
              <p>
                <li><?php echo $textoorientacao1;?></li><br>
                <li><?php echo $textoorientacao2;?></li>
              </p>
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
          <div class="col-xl-5">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15883.266336654618!2d-37.826118!3d-5.5941!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ba5794f514f9b9%3A0xf2054f5e190c7397!2sLajedo%20de%20Soledade!5e0!3m2!1spt-BR!2sbr!4v1696384668555!5m2!1spt-BR!2sbr" width="450" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="col-xl-7 pt-4 pt-lg-0 content">
            <h3><?php echo $titulolocali;?></h3>
            <p>
              <?php echo $textolocali1;?>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    

  </main><!-- End #main -->