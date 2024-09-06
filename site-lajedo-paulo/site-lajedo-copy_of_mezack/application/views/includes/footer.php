  <!-- ======= Footer ======= -->
  <footer id="footer">



    <div class="footer-top">
      <div class="container">
        <div class="row d-flex justify-content-between">
        
          <div class="col-lg-4 central aos-init aos-animate d-flex flex-column align-items-left mb-2" data-aos="zoom-out" data-aos-delay="100">
            <h4>LAJEDO DE SOLEDADE</h4>
            <p>
              <?php echo $textofooter1;?>
            <br>
              <br>
              <a href='https://wa.me/5584999119070' target="_blank" rel="noopener noreferrer"><?php echo $telefonefooter;?><br></a>
              <a href='mailto:contato@lajedodesoledade.org.br' target="_blank" rel="noopener noreferrer"><?php echo $emailfooter;?><br></a>
              <a href='https://www.instagram.com/lajedo_de_soledade?igshid=OGQ5ZDc2ODk2ZA%3D%3D' target="_blank" rel="noopener noreferrer"><?php echo $instagramfooter;?></a>
            </p>
          </div>   

         

          <div class="col-lg-4 col-md footer-links mb-2">
            <h4><?php echo $titulofooter1;?></h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a <?php echo "href='?/Controlador/index/".$nomedalingua."'";?>><?php echo $home?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a <?php echo "href='?/Controlador/visitar/".$nomedalingua."'";?>><?php echo $visitar?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a <?php echo "href='?/Controlador/sitio/".$nomedalingua."'";?>><?php echo $sitio?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a <?php echo "href='?/Controlador/museu/".$nomedalingua."'";?>><?php echo $museu?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a <?php echo "href='?/Controlador/fals/".$nomedalingua."'";?>">FALS</a></li>
              <li><i class="bx bx-chevron-right"></i> <a <?php echo "href='?/Controlador/turismo/".$nomedalingua."'";?>><?php echo $turismo?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a <?php echo "href='?/Controlador/pesquisas/".$nomedalingua."'";?>><?php echo $pesquisas?></a></li>
            </ul>
          </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>FALS</span></strong>
      </div>
      <div class="credits">
        <?php echo $textofinalfooter;?>
      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="public/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="public/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="public/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="public/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="public/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="public/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="public/js/main.js"></script>

</body>

</html>