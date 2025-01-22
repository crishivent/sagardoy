 <?php $opiniones = get_query_var("opiniones"); ?>
 
 <section class="modulo-08 pt-130 pb-130">
    <div class="container">
      <div class="btns-slider-testimonios">
        <a href="#" class="icons ico-flecha-left btn-prev"></a>
        <a href="#" class="icons ico-flecha-right btn-next"></a>
      </div>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-10">
          <div class="slider-testimonios">
            <div class="slick-slider" data-sizes="100vw">
              <?php 
                $i=1;
                foreach ($opiniones as $opinion) {
                  echo '<div>
                          <h2 class="texto">'.htmlspecialchars($opinion['opinion']).'</h2>
                        </div>';
                }?>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-2 col-md-2"></div>
      </div>
    </div>
  </section>