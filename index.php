<?php include 'cargarDatos.php';

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="images/fevicon/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>SportZone</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <link href="css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/index.css" />
  <link rel="stylesheet" href="css/menu.css" />
  <link rel="stylesheet" href="css/indexMain.css">
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
      <button class="btn btn-black" onclick="window.location.href='html/login.html'">Iniciar sesion</button>
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
      </div>
    </div>
  </section>

  <section class="about">
    <div class="container">
      <div class="about-content">
        <h2 class="section-title">Sobre SportZone</h2>
        <p class="about-text">
          SportZone es tu destino completo para todo lo relacionado con deportes. Ofrecemos una amplia gama de
          productos deportivos de alta calidad, desde equipamiento profesional hasta ropa y accesorios para
          todos los niveles.
        </p>
        <p class="about-text">
          Además de nuestra tienda, somos apasionados por los deportes y te mantenemos informado con los últimos
          resultados, noticias y eventos para que nunca te pierdas nada importante en el mundo deportivo.
        </p>
        <div class="about-features">
          <div class="about-feature">
            <div class="about-feature-icon blue">
              <i class="fas fa-bullseye"></i>
            </div>
            <h3>Calidad Premium</h3>
            <p>Productos de las mejores marcas deportivas</p>
          </div>
          <div class="about-feature">
            <div class="about-feature-icon green">
              <i class="fas fa-users"></i>
            </div>
            <h3>Comunidad</h3>
            <p>Una comunidad apasionada por el deporte</p>
          </div>
          <div class="about-feature">
            <div class="about-feature-icon orange">
              <i class="fas fa-medal"></i>
            </div>
            <h3>Experiencia</h3>
            <p>Años de experiencia en el sector deportivo</p>
          </div>
        </div>
      </div>
    </div>
  </section>

 
  <section class="features">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">¿Qué puedes hacer en SportZone?</h2>
        <p class="section-description">
          Descubre todas las funcionalidades que tenemos para ofrecerte en tu experiencia deportiva
        </p>
      </div>
      <div class="features-grid">
        <div class="feature-card">
          <div class="feature-icon blue">
            <i class="fas fa-shopping-bag"></i>
          </div>
          <h3>Comprar Productos</h3>
          <p>Amplia gama de productos deportivos de alta calidad, desde equipamiento profesional hasta ropa y accesorios.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon green">
            <i class="fas fa-trophy"></i>
          </div>
          <h3>Resultados Deportivos</h3>
          <p>Mantente al día con los últimos resultados de tus deportes favoritos en tiempo real.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon orange">
            <i class="fas fa-newspaper"></i>
          </div>
          <h3>Noticias Deportivas</h3>
          <p>Las últimas noticias y eventos del mundo deportivo para que nunca te pierdas nada importante.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon purple">
            <i class="fas fa-comments"></i>
          </div>
          <h3>Testimonios</h3>
          <p>Comparte tu experiencia y lee las opiniones de otros deportistas de nuestra comunidad.</p>
        </div>
      </div>
    </div>
  </section>


  <section id="testimonios" class="testimonials">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Lo que dicen nuestros clientes</h2>
        <p class="section-description">
          Testimonios reales de deportistas que confían en SportZone
        </p>
      </div>
      <div class="testimonials-grid">
        <div class="testimonial-card">
          <div class="testimonial-header">
            <div class="testimonial-avatar">M</div>
            <div class="testimonial-info">
              <h4>María González</h4>
              <p>Running</p>
            </div>
          </div>
          <div class="testimonial-content">
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p>"Excelente calidad en todos sus productos. Mi equipo de running ha mejorado considerablemente."</p>
          </div>
        </div>
        <div class="testimonial-card">
          <div class="testimonial-header">
            <div class="testimonial-avatar">C</div>
            <div class="testimonial-info">
              <h4>Carlos Rodríguez</h4>
              <p>Fútbol</p>
            </div>
          </div>
          <div class="testimonial-content">
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p>"Gran variedad de productos y precios competitivos. Siempre encuentro lo que necesito."</p>
          </div>
        </div>
        <div class="testimonial-card">
          <div class="testimonial-header">
            <div class="testimonial-avatar">A</div>
            <div class="testimonial-info">
              <h4>Ana Martínez</h4>
              <p>Tenis</p>
            </div>
          </div>
          <div class="testimonial-content">
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p>"El servicio al cliente es excepcional. Me ayudaron a elegir la raqueta perfecta."</p>
          </div>
        </div>
      </div>
      <div class="testimonials-cta">
        <button class="btn btn-outline btn-lg" onclick="window.location.href='testimonial.php'">
          <i class="fas fa-comments"></i>
          Deja tu testimonio
        </button>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="cta">
    <div class="container">
      <div class="cta-content">
        <h2>¿Listo para comenzar tu aventura deportiva?</h2>
        <p>Únete a miles de deportistas que ya confían en SportZone para alcanzar sus metas</p>
        <div class="cta-buttons">
          <button class="btn btn-secondary btn-lg">Explorar Productos</button>
          <button class="btn btn-outline-white btn-lg">Crear Cuenta Gratis</button>
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