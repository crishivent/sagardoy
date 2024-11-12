
<?php 
 $historia = get_query_var('historia');
?>
<section class="modulo-30 pt-130 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-4">
          <h2 class="titulo">Historia</h2>
          <ul class="lista">
            <?php 
              $a=1;
              foreach ($historia as $elemento) {
                $titulo = $elemento['elementos_historia']['titulo_historia'];
                  echo '<li><a href="#" data-id="0$a" class="btn-link activo">$titulo</a></li>';
                  $a++;
              }
            ?>
          </ul>
          <div class="select">
            <select id="select">
              <option value="0" disabled selected>Seleccionar...</option>
              <?php 
              $b=1;
              foreach ($historia as $elemento) {
                $titulo = $elemento['elementos_historia']['titulo_historia'];
                  echo '<option value="0$a">$titulo</option>';
                  $b++;
              }
            ?>
            </select>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-lg-1"></div>
        <div class="col-12 col-sm-12 col-lg-7">
          <div class="contenidos">

          <?php 
              $c=1;
              foreach ($historia as $elemento) {
                $titulo = $elemento['elementos_historia']['titulo_historia'];
                $imagen = $elemento['elementos_historia']['imagen_historia'];
                $descripcion = $elemento['elementos_historia']['descripcion_historia'];
                $enlace = $elemento['elementos_historia']['enlace_leer_mas'];
                if($c==1){$show='show';}
                  echo '<div class="contenido $show" id="c-0$c">
                        <img src="$imagen" class="img-fluid" alt="" />
                        <p class="texto">$descripcion</p>
                        ';
                  if (!empty($enlace)) {
                      echo "<a href='$enlace' class='btn-link'>Leer más</a>";
                  }

                        
                    echo '</div>;';
                  $c++;
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
