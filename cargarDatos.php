<?php


function renderizarResultados($futbolJSON)
{
  $products = json_decode(file_get_contents($futbolJSON), true);

  foreach ($products as $product) {
    echo '                <article class="news-card" onclick=\'window.location.href="Informacion.php"\'>
                    <div class="news-image">
                        <img src="' . $product['img'] . '" alt="' . $product['descripcionImagen'] . '">
                        <span class="category-badge futbol">' . $product['categoria'] . '</span>
                    </div>
                    <div class="news-content">
                        <h3>' . $product['titulo'] . '</h3>
                        <p>' . $product['descripcionCorta'] . '</p>
                        <div class="news-meta">
                            <div class="meta-left">
                                <span class="author">RODK</span>
                                <div class="reading-time">
                                    <i class="fas fa-clock"></i>
                                    <span>3 min</span>
                                </div>
                            </div>
                            <span class="date">' . $product['date'] . '</span>
                        </div>
                    </div>
                </article>';
  }
}
