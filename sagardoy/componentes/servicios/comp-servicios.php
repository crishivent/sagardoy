<?php 
$servicios = get_query_var('servicios');

?>

  <section class="modulo-32 pt-130 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-3">
          <h2 class="titulo"><?php _e('Servicios Sagardoy', 'sagardoy'); ?></h2>
          <ul class="lista">

          <?php 
              $a=1;
              foreach ($servicios as $elemento) {
                $titulo = $elemento['elementos_servicio']['titulo_servicio'];
                  if($a==1){$acti="activo";}else{$acti='';}
                  echo '<li><a href="#" data-id="0'.$a.'" class="btn-link '.$acti.'">'.$titulo.'</a></li>';
                  $a++;
              }
            ?>
          </ul>
          <div class="select">
            <select id="select">
              <option value="0" disabled selected><?php _e('Seleccionar...', 'sagardoy'); ?></option>
              <?php 
              $b=1;
              foreach ($servicios as $elemento) {
                $titulo = $elemento['elementos_servicio']['titulo_servicio'];
                  echo '<option value="0'.$b.'">'.$titulo.'</option>';
                  $b++;
              }
            ?>
            </select>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-lg-1"></div>
        <div class="col-12 col-sm-12 col-lg-8">
          <div class="contenidos">
           <?php 
              $c=1;
              foreach ($servicios as $elemento) {
                $titulo = $elemento['elementos_servicio']['titulo_servicio'];
                $imagen = $elemento['elementos_servicio']['imagen_servicio'];
                $descripcion = $elemento['elementos_servicio']['descripcion_servicio'];
                $descripcion2 = $elemento['elementos_servicio']['descripcion_dos_servicios'];
                if($c==1){$show='show';}else{$show='';}
                  echo '<div class="contenido '.$show.'" id="c-0'.$c.'">
                            <div class="titulo-alt">'.$titulo.'</div>
                                <img src="'.$imagen.'" class="img-fluid" alt="" />
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-lg-10">
                                        <div class="subtitulo">'.$descripcion.'</div>
                                        <div class="subtexto">
                                            '.$descripcion2.'
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-lg-2"></div>
                                </div>
                            </div>
                        </div>';
                  $c++;
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>