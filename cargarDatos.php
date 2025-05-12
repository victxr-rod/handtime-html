<?php

function renderizarResultados($futbolJSON)
{

  $products = json_decode(file_get_contents($futbolJSON), true);


  foreach ($products as $product) {
    echo '



          <a href="https://www.google.com/">
            <div class="box">
              <div class="box-content">
                <div class="img-box">
                  <img
                    src="' . $product['img'] . '"
                    alt="">
                </div>
                <div class="detail-box">
                  <div class="text">
                    <p>' . $product['resultado'] . '</p>
                    <h5>' . date("d/m/Y").'<br>'  . $product['descripcion'] . '</h5>
                  </div>
                </div>
              </div>
            </div>
          </a>


        
        ';
  }
}



function renderizarApuestasDeportivas($apuestas)
{

  $info = json_decode(file_get_contents($apuestas), true);


  foreach ($info as $info) {
    echo '


          <a href="https://www.google.com/">
            <div class="box">
              <div class="box-content">
                <div class="img-box">
                  <img
                    src="' . $info['imagen'] . '"
                    alt="">
                </div>
                <div class="detail-box">
                  <div class="text">
                    <p>' . $info['evento'] . '</p>
                    <p>' . $info['competicion'] . $info['fecha'] . '</p>
                    <h5>' . date("d/m/Y").'<br>' .$info['descripcion'] . '</h5>
                    
                  </div>


                </div>
              </div>
            </div>
          </a>

          
          


        
        ';
  }
}


function renderizarNoticias($noticias)
{

  $info = json_decode(file_get_contents($noticias), true);


  foreach ($info as $info) {
    echo '

     
            <div class="box">
              <div class="box-content">

                <a href="https://www.google.com/" class = "carrousel-item">

                    <div class="detail-box">
                      <div class="text">
          
                        <h5> ⁋ ' . $info['descripcion'] . ' </h5>
                        <br>
                        <h5>' . date("d/m/Y") .'</h5>
                      </div>
                    </div>

                </a>
              </div>
            </div>
     
        
        ';
  }
}

?>


