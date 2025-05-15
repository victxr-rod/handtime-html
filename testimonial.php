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

  <title>HandTime</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/menu.css" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

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

<section class="client_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>Dejanos tu opinión</h2>
      <p>Queremos saber qué opinas sobre nuestra página y nuestros productos.</p>
    </div>
    <div class="feedback_form_container">
      <form action="submit_feedback.php" method="POST">
        <div class="form-group">
          <label for="name">Nombre:</label>
          <input type="text" id="name" name="name" class="form-control" placeholder="Ingresa tu nombre" required>
        </div>
        <div class="form-group">
          <label for="email">Correo Electrónico:</label>
          <input type="email" id="email" name="email" class="form-control" placeholder="Ingresa tu correo" required>
        </div>
        <div class="form-group">
          <label for="opinion">Tu Opinión:</label>
          <textarea id="opinion" name="opinion" class="form-control" rows="4" placeholder="¿Qué te pareció nuestra página y productos?" required></textarea>
        </div>
        <div class="form-group">
          <label for="rating">Calificación:</label>
          <select id="rating" name="rating" class="form-control">
            <option value="5">Excelente</option>
            <option value="4">Muy Bueno</option>
            <option value="3">Bueno</option>
            <option value="2">Regular</option>
            <option value="1">Malo</option>
          </select>
        </div>
        <div class="form-group">
          <button type="submit" class="btn">Enviar Opinión</button>
        </div>
      </form>
    </div>
  </div>
</section>

  <!-- client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          <br><br><br><br>Testimonos.
        </h2>
      </div>
    </div>
    <div id="customCarousel2" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="https://i.pinimg.com/736x/1c/b1/63/1cb163a977f7fd14411b3137cbac2f2d.jpg" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="client_info">
                      <div class="client_name">
                        <h5>
                          Love sosa
                        </h5>
                        <h6>
                          Customer
                        </h6>
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      Era mi primera vez comprando un reloj automático y el equipo me ayudó a elegir el mejor modelo para mi estilo y presupuesto. Estoy feliz con mi Seiko Prospex, ¡se siente premium!
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="https://i.pinimg.com/736x/5b/eb/02/5beb02767f8b32efdab4a2a22c213c69.jpg" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="client_info">
                      <div class="client_name">
                        <h5>
                          Mariano rivera.
                        </h5>
                        <h6>
                          Customer
                        </h6>
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      "Encontré el Tissot PRX a un excelente precio y con envío gratuito. El diseño es elegante y se ve aún mejor en persona. Sin duda volveré por otro modelo."
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="https://i.pinimg.com/736x/d4/c8/f2/d4c8f23efcc3ba17ec281d3fbe110639.jpg" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="client_info">
                      <div class="client_name">
                        <h5>
                          Hector Casagrande
                        </h5>
                        <h6>
                          Customer
                        </h6>
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      "Compré el Omega Speedmaster como regalo para mi esposa y quedó fascinado. La atención al cliente fue impecable, y el reloj llegó en perfecto estado, justo a tiempo. ¡Recomiendo esta tienda al 100%!"
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <ol class="carousel-indicators">
        <li data-target="#customCarousel2" data-slide-to="0" class="active"></li>
        <li data-target="#customCarousel2" data-slide-to="1"></li>
        <li data-target="#customCarousel2" data-slide-to="2"></li>
      </ol>
    </div>


    
  </section>

  
  <!-- end client section -->


  <!-- info section -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="info_logo">
        <h2>
          Información
        </h2>
      </div>
      <div class="row">

        <div class="col-md-3">
          <div class="info_contact">
            <h5>
              Sobre la tienda
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
                +507 63874291
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/envelope-white.png" width="18px" alt="">
              </div>
              <p>
                Javier.reyes2@utp.ac.pa
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_info">

          </div>
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
                      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9m9M94Mz4g3N4nqdMadwqNYD_LgBiA6WmMw&s" alt="">
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="info_form ">
            <h5>
              Escribenos!
            </h5>
            <form action="">
              <input type="email" placeholder="Ingrese su correo">
              <button>
                Suscribete
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

  <!-- end info_section -->

  <!-- footer section -->
  <section class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </section>
  <!-- footer section -->

  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
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