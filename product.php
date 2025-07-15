<?php
require_once './logica/ConexionBd.php';
require_once './logica/ProductoController.php';

$productoController = new ProductoController();

$categoria_id = isset($_GET['categoria']) && is_numeric($_GET['categoria'])
  ? (int)$_GET['categoria']
  : 0;

$productos = $productoController->obtenerProductos($categoria_id);
$categorias = $productoController->obtenerCategorias();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catálogo de Productos - SportZone</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/menu.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      background: #fff;
      color: #111;
      line-height: 1.6;
    }

    .hero {
      background-image: url('https://images.unsplash.com/photo-1612872087720-bb876e2e67d1?q=80&w=1307&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
      height: 500px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      margin-bottom: 2rem;
    }

    .hero-content h1 {
      font-size: 2.5rem;
      font-weight: 300;
      margin-bottom: 0.5rem;
    }

    .hero-content p {
      font-size: 1rem;
      font-weight: 300;
    }

    .container {
      max-width: 1000px;
      margin: 0 auto;
      padding: 0 1rem;
    }

    .filter-section,
    .products-section {
      margin-bottom: 2rem;
    }

    .filter-section {
      border: 1px solid #ddd;
      padding: 1rem;
      background: #fff;
      text-align: center;
    }

    .filter-label {
      font-weight: 400;
      margin-right: 1rem;
    }

    .filter-select {
      padding: 0.5rem;
      border: 1px solid #ccc;
      background: #fff;
      color: #111;
    }

    .section-title {
      text-align: center;
      font-size: 1.8rem;
      font-weight: 300;
      margin-bottom: 2rem;
      border-bottom: 1px solid #111;
      display: inline-block;
      padding-bottom: 0.5rem;
    }

    .product-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2rem;
    }

    .product-card {
      border: 1px solid #ddd;
      background: #fff;
      padding: 1rem;
      transition: transform 0.3s ease;
    }

    .product-card:hover {
      transform: translateY(-5px);
    }

    .product-img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      margin-bottom: 1rem;
    }

    .product-title {
      font-size: 1.2rem;
      font-weight: 400;
      margin-bottom: 0.5rem;
    }

    .product-price {
      font-weight: 600;
      font-size: 1.2rem;
      margin-bottom: 0.5rem;
    }

    .product-stock {
      font-size: 0.9rem;
      color: #555;
      margin-bottom: 0.5rem;
    }

    .stock-low {
      color: #000;
      font-weight: bold;
    }

    .category-tag {
      display: inline-block;
      border: 1px solid #ccc;
      padding: 0.3rem 0.6rem;
      font-size: 0.8rem;
      margin-bottom: 0.5rem;
    }

    .add-to-cart {
      width: 100%;
      padding: 0.75rem;
      border: 1px solid #000;
      background: #000;
      color: #fff;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .add-to-cart:hover {
      background: #111;
    }

    .no-products {
      text-align: center;
      color: #666;
      padding: 2rem;
    }

    @media (max-width: 768px) {
      .hero-content h1 {
        font-size: 2rem;
      }
    }
  </style>
</head>

<body>

  <header class="navbar">
    <div class="logo">
      <span class="logo-icon"></span>
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

    </div>
  </header>

  <section class="hero">
    <div class="hero-content">
      <i class="fas fa-dumbbell hero-icon"></i>
      <h1>SportZone</h1>
      <p>Encuentra el equipo deportivo perfecto para ti</p>
    </div>
  </section>

  <div class="container">
    <section class="filter-section">
      <form method="get" action="product.php">
        <label for="categoria" class="filter-label">Categoría:</label>
        <select name="categoria" id="categoria" class="filter-select" onchange="this.form.submit()">
          <option value="0">Todas las categorías</option>
          <?php foreach ($categorias as $categoria): ?>
            <option value="<?= htmlspecialchars($categoria['id_categoria']) ?>"
              <?= $categoria_id == $categoria['id_categoria'] ? 'selected' : '' ?>>
              <?= htmlspecialchars($categoria['nombre_categoria']) ?>
            </option>
          <?php endforeach; ?>
        </select>
      </form>
    </section>

    <section class="products-section">
      <h2 class="section-title">Nuestros Productos</h2>

      <?php if (!empty($productos)): ?>
        <div class="product-grid">
          <?php foreach ($productos as $producto): ?>
            <div class="product-card">
              <img src="<?= htmlspecialchars($producto['imagen'] ?? 'img/default-product.jpg') ?>"
                alt="<?= htmlspecialchars($producto['nombre_producto']) ?>"
                class="product-img">
              <h3 class="product-title"><?= htmlspecialchars($producto['nombre_producto']) ?></h3>
              <p class="product-price">$<?= number_format($producto['precio_producto'], 2) ?></p>
              <p class="product-stock <?= $producto['cantidad_producto'] < 10 ? 'stock-low' : '' ?>">
                <?= $producto['cantidad_producto'] ?> unidades disponibles
              </p>
              <span class="category-tag">
                <?= htmlspecialchars($producto['nombre_categoria']) ?>
              </span>
              <button class="add-to-cart">Añadir al carrito</button>
            </div>
          <?php endforeach; ?>
        </div>
      <?php else: ?>
        <div class="no-products">
          <p>No se encontraron productos en esta categoría.</p>
        </div>
      <?php endif; ?>
    </section>
  </div>
</body>

</html>