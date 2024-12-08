<?php 
 $titulo_selectores = get_query_var('titulo_selectores');
 $titulo_enlace_1 = get_query_var('titulo_enlace_1');
 $enlace_1 = get_query_var('enlace_1');
 $titulo_enlace_2 = get_query_var('titulo_enlace_2');
 $enlace_2 = get_query_var('enlace_2');
?>  
  
  
  <section class="modulo-01 pt-130 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-9 col-md-9">
          <h2 class="texto"><?php echo $titulo_selectores; ?></h2>
          <div class="holder"><a href="<?php echo $enlace_1; ?>" class="btn-sobre-nosotros"><?php echo $titulo_enlace_1;?></a></div>
          <div class="holder"><a href="<?php echo $enlace_2; ?>" class="btn-servicios"><?php echo $titulo_enlace_2;?></a></div>
        </div>
        <div class="col-12 col-sm-3 col-md-3"></div>
      </div>
    </div>
  </section>