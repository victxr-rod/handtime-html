
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
  <link rel="stylesheet"  href="css/productos.css" />
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
      <a href="contact.php">Contact</a>
      <a href="testimonial.php">Testimonios</a>
    </nav>
    <div class="acciones">
      <button class="btn btn-outline">Iniciar Sesión</button>
    </div>
  </header>

  <div class="hero-banner">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <h1>Equipamiento Deportivo Premium</h1>
            <p>Descubre nuestra colección exclusiva de productos deportivos de las mejores marcas</p>
            <div class="search-container">
                <input type="search" placeholder="Buscar productos...">
                <button type="submit" class="search-button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </div>
  <!-- seccion de productos -->
   <?php include 'logica/productos.php'; ?>
   <div class="container my-5">
  <h2 class="mb-4">Nuestros Productos</h2>

  <!-- Filtros -->
  <form method="GET" class="mb-4">
    <div class="row">
      <div class="col-md-4">
        <label for="categoria">Categoría:</label>
        <select name="categoria" id="categoria" class="form-control">
          <option value="todos">Todas</option>
          <?php
          // Extraer todas las categorías únicas
          $categorias = array_unique(array_column($productos, 'categoria'));
          foreach ($categorias as $categoria) {
            $selected = ($categoriaSeleccionada == $categoria) ? 'selected' : '';
            echo "<option value='$categoria' $selected>$categoria</option>";
          }
          ?>
        </select>
      </div>

      <div class="col-md-4">
        <label for="precio_max">Precio máximo:</label>
        <input type="number" name="precio_max" id="precio_max" step="0.01" class="form-control"
               value="<?= htmlspecialchars($precioMax) ?>">
      </div>

      <div class="col-md-4 align-self-end">
        <button type="submit" class="btn btn-primary w-100">Aplicar Filtros</button>
      </div>
    </div>
  </form>

  <!-- Mostrar productos -->
  <div class="row">
    <?php if (empty($productosFiltrados)) : ?>
      <div class="col-12">
        <p>No se encontraron productos con los filtros aplicados.</p>
      </div>
    <?php else : ?>
      <?php foreach ($productosFiltrados as $producto) : ?>
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img src="<?= $producto['imagen'] ?>" class="card-img-top" alt="<?= $producto['nombre'] ?>">
            <div class="card-body">
              <h5 class="card-title"><?= $producto['nombre'] ?></h5>
              <p class="card-text"><strong>Categoría:</strong> <?= $producto['categoria'] ?></p>
              <p class="card-text"><strong>Precio:</strong> $<?= number_format($producto['precio'], 2) ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</div>

</body>

</html>