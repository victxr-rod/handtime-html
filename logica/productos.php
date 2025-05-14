<?php
// Leer productos desde el archivo JSON
$productosJson = file_get_contents('data/JsonProductos/productos.json');
if ($productosJson === false) {
  die('Error al leer el archivo de productos.');
}
$productos = json_decode($productosJson, true); // Convertir a arreglo

// Obtener filtros del formulario
$categoriaSeleccionada = $_GET['categoria'] ?? 'todos';
$precioMax = $_GET['precio_max'] ?? 9999;

// Filtrar productos
$productosFiltrados = array_filter($productos, function ($producto) use ($categoriaSeleccionada, $precioMax) {
  $cumpleCategoria = ($categoriaSeleccionada === 'todos') || ($producto['categoria'] === $categoriaSeleccionada);
  $cumplePrecio = $producto['precio'] <= $precioMax;
  return $cumpleCategoria && $cumplePrecio;
});
?>
