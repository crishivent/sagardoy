<?php 

$titulo=get_query_var("titulo");
$tags=get_query_var("tags");
$fecha=get_query_var("fecha");


//FALTA GANCHO DE NOTICIAS Y LOS ESPECIALISTAS
?>


<section class="section cabecera-interna-noticias cabecera">
    <a href="javascript:window.history.back();" class="btn-volver"><u><?php _e('Noticias', 'sagardoy'); ?></u></a>

    <div class="holder">
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-10">
          <div class="subtitulo"><span><b><?php if ( $tags ) {
           
            foreach ( $tags as $tag ) {
                echo '' . $tag->name . ' '; // Muestra el nombre de cada etiqueta
            }
            
        } else {
            echo '';
        }?></b></span><span><?php echo $fecha; ?></span></div>
          <div class="titulo"><?php echo $titulo;?></div>
        </div>
        <div class="col-12 col-sm-12 col-lg-2 d-lg-flex flex-column justify-content-end align-items-end">
          <div>
            <div class="label">Especialistas</div>
            <ul class="links">
              <li><a href="#">Ana Godino Reyes</a></li>
              <li><a href="#">David Isaac Tobía</a></li>
              <li><a href="#">Montserrat Alonso Paulí</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>