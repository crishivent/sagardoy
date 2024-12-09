<?php
/*
Archive Equipo
*/

get_header();


// Cabecera
$titulo_equipo = get_field('titulo_equipo', 'option');
$fondo_equipo = get_field('fondo_equipo', 'option');

set_query_var('descripcion_equipo',get_field('descripcion_equipo', 'option'));





?>



<!-- Equipo Cabecera -->
<section class="section cabecera-interna cabecera">
    <div class="holder">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-7 col-md-7 border-left">
            <div class="label"><?php _e('Equipo', 'sagardoy'); ?></div>
            <div class="titulo"><?php echo $titulo_equipo;?></div>
          </div>
          <div class="col-12 col-sm-5 col-md-5"></div>
        </div>
      </div>
    </div>
    <img src="<?php echo $fondo_equipo; ?>" class="img-fluid" alt="" />
  </section>



<!-- Contador gris -->
<?php get_template_part('componentes/nosotros/comp','experiencia'); ?>


<!-- Filtros profesionales -->

<section class="modulo-11 pt-130 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-1"></div>
        <div class="col-12 col-sm-12 col-lg-10 text-center">
          <h2 class="titulo">Buscar abogados y profesionales</h2>
          <div class="form">
            <div class="row">
              <div class="col-12 col-sm-4 col-md-4">
                <div class="input-email">
                  <input class="input" value="" placeholder="Buscar"></input>
                  <a href="#" class="btn-link"></a>
                </div>
              </div>
              <div class="col-12 col-sm-3 col-md-3">
                <div class="select">
                  <?php do_shortcode('[facetwp facet="cargos"]');?>
                  <select id="standard-select">
                    <option value="0" disabled selected>Cargo</option>
                    <option value="1">Opción 1</option>
                    <option value="2">Opción 2</option>
                    <option value="3">Opción 3</option>
                    <option value="4">Opción 4</option>
                    <option value="5">Opción 5</option>
                  </select>
                </div>
              </div>
              <div class="col-12 col-sm-3 col-md-3">
                <div class="select">
                  <select id="standard-select">
                    <option value="0" disabled selected>Sede</option>
                    <option value="1">Opción 1</option>
                    <option value="2">Opción 2</option>
                    <option value="3">Opción 3</option>
                    <option value="4">Opción 4</option>
                    <option value="5">Opción 5</option>
                  </select>
                </div>
              </div>
              <div class="col-12 col-sm-2 col-md-2">
                <a href="#" class="btn-buscar">Buscar</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-lg-1"></div>
      </div>
    </div>
  </section>


<!-- Resultado -->
 <section class="modulo-11 pt-130 pb-130 buscador-resultado">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-4 col-lg-3 mb-5">
          <img src="images/I_igo_Sagardoy_de_Sim_n-1-color1.jpg" class="img-fluid" alt="" />
          <div class="nombre">Iñigo Sagardoy de Simón</div>
          <div class="cargo">Presidente</div>
        </div>
        <div class="col-12 col-sm-4 col-lg-3 mb-5">
          <img src="images/I_igo_Sagardoy_de_Sim_n-1-color2.jpg" class="img-fluid" alt="" />
          <div class="nombre">Juan Antonio Sagardoy Bengoechea</div>
          <div class="cargo">Presidente de Honor</div>
        </div>
        <div class="col-12 col-sm-4 col-lg-3 mb-5">
          <img src="images/I_igo_Sagardoy_de_Sim_n-1-color3.jpg" class="img-fluid" alt="" />
          <div class="nombre">Martín Godino Reyes</div>
          <div class="cargo">Socio Director</div>
        </div>
        <div class="col-12 col-sm-4 col-lg-3 mb-5">
          <img src="images/I_igo_Sagardoy_de_Sim_n-1-color4.jpg" class="img-fluid" alt="" />
          <div class="nombre">Ana Godino Reyes</div>
          <div class="cargo">Socia</div>
        </div>
        <div class="col-12 col-sm-4 col-lg-3 mb-5">
          <img src="images/I_igo_Sagardoy_de_Sim_n-1-color5.jpg" class="img-fluid" alt="" />
          <div class="nombre">Román Gil Alburquerque</div>
          <div class="cargo">Socia</div>
        </div>
        <div class="col-12 col-sm-4 col-lg-3 mb-5">
          <img src="images/I_igo_Sagardoy_de_Sim_n-1-color6.jpg" class="img-fluid" alt="" />
          <div class="nombre">Raquel Muñiz Ferrer</div>
          <div class="cargo">Socia</div>
        </div>
        <div class="col-12 col-sm-4 col-lg-3 mb-5">
          <img src="images/I_igo_Sagardoy_de_Sim_n-1-color7.jpg" class="img-fluid" alt="" />
          <div class="nombre">José Luis Fraile Quinzaños</div>
          <div class="cargo">Socia</div>
        </div>
        <div class="col-12 col-sm-4 col-lg-3 mb-5">
          <img src="images/I_igo_Sagardoy_de_Sim_n-1-color8.jpg" class="img-fluid" alt="" />
          <div class="nombre">María Jesús Herrera Duque</div>
          <div class="cargo">Socia</div>
        </div>
        <div class="col-12 col-sm-4 col-lg-3 mb-5">
          <img src="images/I_igo_Sagardoy_de_Sim_n-1-color9.jpg" class="img-fluid" alt="" />
          <div class="nombre">David Isaac Tobía</div>
          <div class="cargo">Socio</div>
        </div>
        <div class="col-12 col-sm-4 col-lg-3 mb-5">
          <img src="images/I_igo_Sagardoy_de_Sim_n-1-color10.jpg" class="img-fluid" alt="" />
          <div class="nombre">Montserrat Alonso Paulí</div>
          <div class="cargo">Socia</div>
        </div>
        <div class="col-12 col-sm-4 col-lg-3 mb-5">
          <img src="images/I_igo_Sagardoy_de_Sim_n-1-color11.jpg" class="img-fluid" alt="" />
          <div class="nombre">Bruno Álvarez Padín</div>
          <div class="cargo">Socio</div>
        </div>
        <div class="col-12 col-sm-4 col-lg-3 mb-5">
          <img src="images/I_igo_Sagardoy_de_Sim_n-1-color12.jpg" class="img-fluid" alt="" />
          <div class="nombre">Marc Carrera Domènech</div>
          <div class="cargo">Socio</div>
        </div>
      </div>
      <div class="text-center"><a href="#" class="btn-ver-mas">Ver más</a></div>
    </div>
  </section>


















   <?php get_footer(); ?>