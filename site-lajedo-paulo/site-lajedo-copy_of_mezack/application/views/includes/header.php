<!DOCTYPE html>
<html lang="pt-br" <?php echo "lang='".$nomedalingua."'";?>>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Lajedo de Soledade</title>
  <meta content="Sítio e museu arqueológico" name="description">
  <meta content="Sítio arqueológico, Lajedo de Soledade, Museu, Apodi/RN" name="keywords">

  <!-- Favicons -->
  <link href="public/img/icone_museu2.png" rel="icon">
  <link href="public/img/icone_museu2.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="public/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="public/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="public/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="public/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="public/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="public/css/style.css" rel="stylesheet">

  <script async src="https://www.googletagmanager.com/gtag/js?id=G-8B287FFTDR"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-8B287FFTDR');
  </script>
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-right justify-content-md-between">
      
      <div class="contact-info d-flex align-items-center">
        <a href="?/Controlador/<?php echo $pag?>/portugues"><img src="public/img/brasil.png" class="flag"></a>
        <a href="?/Controlador/<?php echo $pag?>/english"><img src="public/img/estados-unidos.png" class="flag"></a>
        <a href="?/Controlador/<?php echo $pag?>/espanol"><img src="public/img/espanha.png" class="flag"></a>
      </div>
      
      <div class="social-links d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contato@lajedodesoledade.org.br">contato@lajedodesoledade.org.br</a></i>
        <a href="https://wa.me/5584999119070" target="_blank" rel="noopener noreferrer" class="instagram"><i class="bi bi-whatsapp"></i></a>
        <a href="https://www.instagram.com/lajedo_de_soledade?igshid=OGQ5ZDc2ODk2ZA%3D%3D" target="_blank" rel="noopener noreferrer" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <a <?php echo "href='?/Controlador/index/".$nomedalingua."'";?>><img src="public/img/logo_lajedo.png" alt="" class="mb-1"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li>
            <a class="<?php echo $acindex?>" <?php echo "href='?/Controlador/index/".$nomedalingua."'";?>>
              <?php echo $home?>
            </a>
          </li>
          <li>
            <a class="<?php echo $acvisitar?>" <?php echo "href='?/Controlador/visitar/".$nomedalingua."'";?>>
              <?php echo $visitar;?>
            </a>
          </li>
          <li>
            <a class="<?php echo $acsitio?>" <?php echo "href='?/Controlador/sitio/".$nomedalingua."'";?>>
              <?php echo $sitio;?>
            </a>
          </li>
          <li>
            <a class="<?php echo $acmuseu?>" <?php echo "href='?/Controlador/museu/".$nomedalingua."'";?>>
              <?php echo $museu;?>
            </a>
          </li>
          <li>
            <a class="<?php echo $acfals?>" <?php echo "href='?/Controlador/fals/".$nomedalingua."'";?>>
              FALS
            </a>
          </li>
          <li>
            <a class="<?php echo $acturismo?>" <?php echo "href='?/Controlador/turismo/".$nomedalingua."'";?>>
              <?php echo $turismo;?>
            </a>
          </li>
          <li>
            <a class="<?php echo $acpublicacoes?>" <?php echo "href='?/Controlador/pesquisas/".$nomedalingua."'";?>>
              <?php echo $pesquisas;?>
            </a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->