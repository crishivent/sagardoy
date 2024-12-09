  <?php
  $contador1 = get_field('contador_1', 'option');
  $contador2 = get_field('contador_2', 'option'); 
  $contador3 = get_field('contador_3', 'option'); 
  $contador4 = get_field('contador_4', 'option');
  $titulocontador1 = get_field('titulo_contador_1', 'option');
  $titulocontador2 = get_field('titulo_contador_2', 'option');
  $titulocontador3 = get_field('titulo_contador_3', 'option');
  $titulocontador4 = get_field('titulo_contador_4', 'option');


if(!empty(get_query_var('descripcion_equipo'))){
 $descripcionequipo = get_query_var('descripcion_equipo');
}
 
  
  ?>
 
 <section class="modulo-03 pt-90 pb-90 <?php if(!empty($descripcionequipo)){echo 'bg-gris';} ?>">
    <div class="container">

    <?php 
    if (!empty($descripcion_equipo)) {
     ?>
      <div class="row">
        <div class="col-12 col-sm-7 col-md-7">
          <div class="texto-top"><?php echo $descripcionequipo; ?></div>
        </div>
        <div class="col-12 col-sm-5 col-md-5"></div>
      </div>
     <?php
    }
    ?>
   





      <div class="row">
        <div class="col-12 col-sm-3 col-md-3 text-center">
          <div class="holder">
            <div class="numero"><span class="plus">+</span><span class="counter" data-count="<?php echo $contador1;?>">0</span></div>
            <div class="texto"><?php echo $titulocontador1;?></div>
          </div>
        </div>
        <div class="col-12 col-sm-3 col-md-3 text-center">
          <div class="holder">
            <div class="numero"><span class="plus">+</span><span class="counter" data-count="<?php echo $contador2;?>">0</span></div>
            <div class="texto"><?php echo $titulocontador2;?></div>
          </div>
        </div>
        <div class="col-12 col-sm-3 col-md-3 text-center">
          <div class="holder">
            <div class="numero"><span class="counter" data-count="<?php echo $contador3;?>">0</span></div>
            <div class="texto"><?php echo $titulocontador3;?></div>
          </div>
        </div>
        <div class="col-12 col-sm-3 col-md-3 text-center">
          <div class="holder">
            <div class="numero"><span class="plus">+</span><span class="counter" data-count="<?php echo $contador4;?>">0</span></div>
            <div class="texto"><?php echo $titulocontador4;?></div>
          </div>
        </div>
      </div>
    </div>
  </section>