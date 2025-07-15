<?php include 'cargarDatos.php'; ?>
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
  <link rel="stylesheet" href="css\deportes.css" />
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
      <a href="Deportes.php">Deportes</a>
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
        <button class="btn btn-outline" onclick="window.location.href='product.php'">Ofertas Especiales</button>
      </div>
    </div>
  </section>

  <main class="container">
    <!-- Sección de Resultados Recientes -->
    <section class="results-section">
      <div class="section-header collapsible-header" onclick="toggleSection('results-content')">
        <i class="fas fa-trophy"></i>
        <h2>Resultados Recientes</h2>
      </div>
      <div class="results-grid">
        <div class="result-card">
          <div class="result-header">
            <span class="badge laliga">La Liga</span>
            <div class="date">
              <i class="fas fa-calendar"></i>
              <span>15/01/2024</span>
            </div>
          </div>
          <div class="result-content">
            <div class="team winner">
              <p class="team-name">Real Madrid</p>
              <p class="score">2</p>
            </div>
            <div class="vs">VS</div>
            <div class="team">
              <p class="team-name">Barcelona</p>
              <p class="score">1</p>
            </div>
          </div>
        </div>

        <div class="result-card">
          <div class="result-header">
            <span class="badge premier">Premier League</span>
            <div class="date">
              <i class="fas fa-calendar"></i>
              <span>14/01/2024</span>
            </div>
          </div>
          <div class="result-content">
            <div class="team winner">
              <p class="team-name">Manchester City</p>
              <p class="score">3</p>
            </div>
            <div class="vs">VS</div>
            <div class="team">
              <p class="team-name">Liverpool</p>
              <p class="score">2</p>
            </div>
          </div>
        </div>

        <div class="result-card">
          <div class="result-header">
            <span class="badge ligue1">Ligue 1</span>
            <div class="date">
              <i class="fas fa-calendar"></i>
              <span>13/01/2024</span>
            </div>
          </div>
          <div class="result-content">
            <div class="team winner">
              <p class="team-name">PSG</p>
              <p class="score">1</p>
            </div>
            <div class="vs">VS</div>
            <div class="team">
              <p class="team-name">Marseille</p>
              <p class="score">0</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Sección de Noticias con Carrusel -->
    <section class="news-section">
      <div class="section-header">
        <i class="fas fa-newspaper"></i>
        <h2>Últimas Noticias</h2>
      </div>

      <div class="carousel-container">
        <div class="carousel-wrapper">
          <button class="carousel-btn carousel-btn-prev" onclick="moveCarousel(-1)">
            <i class="fas fa-chevron-left"></i>
          </button>

          <div class="carousel-track-container">
            <div class="news-grid carousel-track" id="newsCarousel">
              <article class="news-card carousel-slide" onclick="window.location.href='messi-contrato.html'">
                <div class="news-image">
                  <img src="/placeholder.svg?height=200&width=300" alt="Messi renueva contrato">
                  <span class="category-badge futbol">Fútbol</span>
                </div>
                <div class="news-content">
                  <h3>Messi renueva contrato con Inter Miami hasta 2026</h3>
                  <p>El astro argentino extiende su estadía en la MLS con una cláusula especial que incluye participación en ingresos.</p>
                  <div class="news-meta">
                    <div class="meta-left">
                      <span class="author">Carlos Rodríguez</span>
                      <div class="reading-time">
                        <i class="fas fa-clock"></i>
                        <span>3 min</span>
                      </div>
                    </div>
                    <span class="date">15/01/2024</span>
                  </div>
                </div>
              </article>

              <article class="news-card carousel-slide" onclick="window.location.href='champions-sorteo.html'">
                <div class="news-image">
                  <img src="/placeholder.svg?height=200&width=300" alt="Champions League sorteo">
                  <span class="category-badge futbol">Fútbol</span>
                </div>
                <div class="news-content">
                  <h3>Sorteo de Octavos de Final de Champions League</h3>
                  <p>Los equipos españoles tendrán rivales complicados en la siguiente fase de la competición europea.</p>
                  <div class="news-meta">
                    <div class="meta-left">
                      <span class="author">María González</span>
                      <div class="reading-time">
                        <i class="fas fa-clock"></i>
                        <span>4 min</span>
                      </div>
                    </div>
                    <span class="date">14/01/2024</span>
                  </div>
                </div>
              </article>

              <article class="news-card carousel-slide" onclick="window.location.href='nba-allstar.html'">
                <div class="news-image">
                  <img src="/placeholder.svg?height=200&width=300" alt="NBA All-Star votaciones">
                  <span class="category-badge baloncesto">Baloncesto</span>
                </div>
                <div class="news-content">
                  <h3>Comienzan las votaciones para el NBA All-Star 2024</h3>
                  <p>Los fanáticos ya pueden votar por sus jugadores favoritos para el juego de las estrellas en Indianapolis.</p>
                  <div class="news-meta">
                    <div class="meta-left">
                      <span class="author">Diego Martín</span>
                      <div class="reading-time">
                        <i class="fas fa-clock"></i>
                        <span>2 min</span>
                      </div>
                    </div>
                    <span class="date">13/01/2024</span>
                  </div>
                </div>
              </article>

              <article class="news-card carousel-slide" onclick="window.location.href='australian-open.html'">
                <div class="news-image">
                  <img src="/placeholder.svg?height=200&width=300" alt="Australian Open preview">
                  <span class="category-badge tenis">Tenis</span>
                </div>
                <div class="news-content">
                  <h3>Australian Open 2024: Previa del primer Grand Slam</h3>
                  <p>Djokovic busca su décimo título en Melbourne mientras Swiatek defiende su corona femenina.</p>
                  <div class="news-meta">
                    <div class="meta-left">
                      <span class="author">Ana López</span>
                      <div class="reading-time">
                        <i class="fas fa-clock"></i>
                        <span>5 min</span>
                      </div>
                    </div>
                    <span class="date">12/01/2024</span>
                  </div>
                </div>
              </article>

              <article class="news-card carousel-slide" onclick="window.location.href='formula1-2024.html'">
                <div class="news-image">
                  <img src="/placeholder.svg?height=200&width=300" alt="Fórmula 1 temporada 2024">
                  <span class="category-badge automovilismo">Automovilismo</span>
                </div>
                <div class="news-content">
                  <h3>Fórmula 1: Las claves de la temporada 2024</h3>
                  <p>Verstappen parte como favorito, pero Ferrari y McLaren prometen dar batalla en el nuevo campeonato.</p>
                  <div class="news-meta">
                    <div class="meta-left">
                      <span class="author">Roberto Silva</span>
                      <div class="reading-time">
                        <i class="fas fa-clock"></i>
                        <span>6 min</span>
                      </div>
                    </div>
                    <span class="date">11/01/2024</span>
                  </div>
                </div>
              </article>

              <article class="news-card carousel-slide" onclick="window.location.href='paris-olimpiadas.html'">
                <div class="news-image">
                  <img src="/placeholder.svg?height=200&width=300" alt="París 2024 Olimpiadas">
                  <span class="category-badge olimpiadas">Olimpiadas</span>
                </div>
                <div class="news-content">
                  <h3>París 2024: Los preparativos finales para los Juegos Olímpicos</h3>
                  <p>La capital francesa ultima detalles para recibir a los mejores atletas del mundo en julio.</p>
                  <div class="news-meta">
                    <div class="meta-left">
                      <span class="author">Laura Fernández</span>
                      <div class="reading-time">
                        <i class="fas fa-clock"></i>
                        <span>4 min</span>
                      </div>
                    </div>
                    <span class="date">10/01/2024</span>
                  </div>
                </div>
              </article>
            </div>
          </div>

          <button class="carousel-btn carousel-btn-next" onclick="moveCarousel(1)">
            <i class="fas fa-chevron-right"></i>
          </button>
        </div>

        <!-- Indicadores -->
        <div class="carousel-indicators">
          <button class="indicator active" onclick="goToSlide(0)"></button>
          <button class="indicator" onclick="goToSlide(1)"></button>
          <button class="indicator" onclick="goToSlide(2)"></button>
          <button class="indicator" onclick="goToSlide(3)"></button>
        </div>
      </div>
    </section>
  </main>

  <script type="text/javascript" src="js\scrip.js"></script>
  <script type="text/javascript" src="js/carousel.js"></script>
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