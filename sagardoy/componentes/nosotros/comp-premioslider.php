<?php 
 $premios = get_query_var('premios');
 $titulopremios = get_query_var('titulopremios');
?>


<section class="modulo-27 pt-130 pb-65">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-9">
          <h2 class="titulo"><?php echo $titulopremios; ?></h2>
        </div>
        <div class="col-12 col-sm-12 col-lg-3 d-flex align-items-end justify-content-end">
          <div id="btns_slider_01" class="btns-slider">
            <a href="#" class="icons ico-flecha-left btn-prev"></a>
            <a href="#" class="icons ico-flecha-right btn-next"></a>
          </div>
        </div>
      </div>
      <div id="slider_01" class="slider-premios">
        <div class="slick-slider" data-sizes="100vw">

        <?php 
              foreach ($premios as $premio) {
                $imagen = $premio['premios']['imagen_premio'];
                $texto = $premio['premios']['texto_premio'];
                  echo '<div>
                          <a href="#">
                            <div class="line-border">
                              <img src="'.$imagen.'" class="img-fluid" alt="">
                              <div class="texto">'.$texto.'</div>
                            </div>
                          </a>
                        </div>';
              }
        ?>

        </div>
      </div>
    </div>
  </section>