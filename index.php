<?php include 'cargarDatos.php';

?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>SportZone</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/index.css" />
  <link rel="stylesheet" href="css/menu.css"/>
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>

<body>

  <header class="navbar">
    <div class="logo">
      <span class="logo-icon">👜</span>
      <span class="logo-text">SportZone</span>
    </div>
    <nav class="menu">
      <a href="index.php">Inicio</a>
      <a href="product.php">Productos</a>
      <a href="#">Deportes</a>
      <a href="contact.php">Contacto</a>
      <a href="testimonial.php">Testimonios</a>
    </nav>
    <div class="acciones">
      <button class="btn btn-outline">Iniciar Sesión</button>
      <button class="btn btn-black">Comprar Ahora</button>
    </div>
  </header>

  <!-- HERO SECTION -->
 <section class="hero">
    <div class="hero-content">
      <h1>Equípate para la victoria</h1>
      <p>Todo lo que necesitas para destacar en tu deporte favorito.<br>
      Equipamiento profesional, ropa deportiva y accesorios.</p>
      <div class="hero-buttons">
        <button class="btn btn-black" onclick="window.location.href='product.php'">Ver Catálogo</button>
        <button class="btn btn-outline" onclick="window.location.href='product.php'">Ofertas Especiales</button>
      </div>
    </div>
  </section>

  <div class="container">
        <section class="about-section">
            <div class="about-content">
                <h1>Sobre SportZone</h1>
                <p>SportZone es tu destino completo para todo lo relacionado con deportes. Ofrecemos una amplia gama de productos deportivos de alta calidad, desde equipamiento profesional hasta ropa y accesorios para todos los niveles.</p>
                <p>Además de nuestra tienda, somos apasionados por los deportes y te mantenemos informado con los últimos resultados, noticias y eventos para que nunca te pierdas nada importante en el mundo deportivo.</p>
                
                <div class="divider"></div>
                
            </div>
            
            <div class="about-images">
                <img src="https://th.bing.com/th/id/R.d183820cf0b0b5248e32fdcae6123def?rik=jKG%2bCGG%2fKUrxqQ&riu=http%3a%2f%2fimg.staticdj.com%2f70d6306889c3cec8e80f4560a52c0271.jpg&ehk=7tgdnoM%2bOH6NXfzCEa%2bozmPGlrZ6%2bwBOVkk8jNLONBU%3d&risl=&pid=ImgRaw&r=0" alt="Equipamiento deportivo">
                <img src="https://fansedge.frgimages.com/FFImage/thumb.aspx?i=/productImages/_491000/ff_491925_full.jpg" alt="Ropa deportiva">
                <img src="https://media.futbolmania.com/media/catalog/product/cache/1/9df78eab33525d08d6e5fb8d27136e95/D/N/DN3611-379_espinilleras-color-verde-nike-mercurial-lite_1_completa-frontal.jpg" alt="Accesorios">
                <img src="https://i.ytimg.com/vi/raVaNYpuGss/hq720.jpg" alt="Eventos deportivos">
            </div>
        </section>
    </div>

  <!-- SECCION DE NOTICIAS -->

  <section class="seccion-resultados">
    <div class="container">
      <div class="product_heading">
        <h2>Resultados</h2>
      </div>


      <div class="product_container">
        <div class="carousel">
          <?php

          renderizarResultados("data/JsonIndex/Futbol.json");
          ?>

        </div>
      </div>


      <!-- BASKUETBALL-->
      <div class="product_container">
        <div class="carousel">
          <?php

          renderizarResultados("data/JsonIndex/Basketball.json");
          ?>

        </div>
      </div>

      <!-- BASEBALL-->
      <div class="product_container">
        <div class="carousel">
          <?php

          renderizarResultados("data/JsonIndex/Baseball.json");
          ?>

        </div>
      </div>




    </div>
  </section>




  <!-- SECCION DE ULTIMA HORA-->
  <section class="seccion-resultados">
    <div class="container">

      <div class="product_heading">
        <div class="red"></div>
        <h2>Última Hora</h2>

      </div>
      <div class="product_container">
        <div class="carousel">
          <?php

          renderizarResultados("data/JsonIndex/UltimaHora.json");
          ?>

        </div>

      </div>
    </div>


    </div>
  </section>



  <!--  SECCION DE APUESTAS Y PRONOSTICOS-->
  <section class="seccion-resultados">
    <div class="container">
      <div class="product_heading">
        <div class="green"></div>
        <h2>Apuestas y Pronosticos</h2>
      </div>
      <div class="product_container">
        <div class="carousel">
          <?php

          renderizarApuestasDeportivas("data/JsonIndex/apuestasDeportivas.json");
          ?>
        </div>
      </div>

    </div>
  </section>


  

  <!-- info section -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="info_logo">
        <h2>
          G&SPORTS
        </h2>
      </div>
      <div class="row">

        <div class="col-md-3">
          <div class="info_contact">
            <h5>
              ABOUT US
            </h5>
            <div>
              <div class="img-box">
                <img src="images/location-white.png" width="18px" alt="">
              </div>
              <p>
                San Miguelito
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/telephone-white.png" width="12px" alt="">
              </div>
              <p>
                +01 1234567890
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/envelope-white.png" width="18px" alt="">
              </div>
              <p>
                kevin.linares1@utp.ac.pa
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3">

        </div>

        <div class="col-md-3">
          <div class="info_insta">
            <h5>
              Instagram
            </h5>
            <div class="insta_container">
              <div class="row m-0">
                <div class="col-4 px-0">
                  <a href="">
                    <div class="insta-box b-1">
                      <img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9m9M94Mz4g3N4nqdMadwqNYD_LgBiA6WmMw&s"
                        alt="">
                    </div>
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="info_form ">
            <h5>
              Newsletter
            </h5>
            <form action="">
              <input type="email" placeholder="Enter your email">
              <button>
                Subscribe
              </button>
            </form>
            <div class="social_box">
              <a href="">
                <img src="images/fb.png" alt="">
              </a>
              <a href="">
                <img src="images/twitter.png" alt="">
              </a>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
              <a href="">
                <img src="images/youtube.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>