<?php
/*
Template Name: Página Servicios
*/

get_header();


//Necesitas información
set_query_var("imagen_informacion", get_field('imagen_informacion'));
set_query_var("titulo_informacion", get_field('titulo_informacion'));
set_query_var("pagina_informacion", get_field('pagina_informacion'));


?>

<!-- cabecera -->
<section class="section cabecera-interna cabecera">
    <div class="holder">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-lg-10 border-left">
            <div class="label">Servicios</div>
            <div class="titulo">Expertos en derecho laboral</div>
          </div>
          <div class="col-12 col-sm-12 col-lg-2"></div>
        </div>
      </div>
    </div>
    <img src="images/img-cabecera-servicios.jpg" class="img-fluid" alt="" />
  </section>

<!-- primera seccion -->
  <section class="modulo-32 pt-130 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-3">
          <h2 class="titulo">Servicios Sagardoy</h2>
          <ul class="lista">
            <li><a href="#" data-id="01" class="btn-link activo">Asesoramiento laboral y representación legal en litigios</a></li>
            <li><a href="#" data-id="02" class="btn-link">Negociación colectiva</a></li>
            <li><a href="#" data-id="03" class="btn-link">Reestructuración de empresas</a></li>
            <li><a href="#" data-id="04" class="btn-link">Compliance laboral</a></li>
            <li><a href="#" data-id="05" class="btn-link">Movilidad internacional</a></li>
            <li><a href="#" data-id="06" class="btn-link">Derecho deportivo</a></li>
            <li><a href="#" data-id="07" class="btn-link">Inspecciones de trabajo</a></li>
            <li><a href="#" data-id="08" class="btn-link">Previsión social</a></li>
            <li><a href="#" data-id="09" class="btn-link">Seguridad y salud en el trabajo</a></li>
            <li><a href="#" data-id="10" class="btn-link">Políticas de gestión de talento</a></li>
            <li><a href="#" data-id="11" class="btn-link">Tecnología y relaciones laborales</a></li>
          </ul>
          <div class="select">
            <select id="select">
              <option value="0" disabled selected>Asesoramiento laboral y representación legal en litigios</option>
              <option value="01">Opción 1</option>
              <option value="02">Opción 2</option>
              <option value="03">Opción 3</option>
              <option value="04">Opción 4</option>
              <option value="05">Opción 5</option>
              <option value="06">Opción 6</option>
              <option value="07">Opción 7</option>
              <option value="08">Opción 8</option>
              <option value="09">Opción 9</option>
              <option value="10">Opción 10</option>
              <option value="11">Opción 11</option>
            </select>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-lg-1"></div>
        <div class="col-12 col-sm-12 col-lg-8">
          <div class="contenidos">
            <div class="contenido show" id="c-01">
              <div class="titulo-alt">Asesoramiento laboral y representación legal en litigios</div>
              <img src="images/img-asesoramiento.jpg" class="img-fluid" alt="" />
              <div class="row">
                <div class="col-12 col-sm-12 col-lg-10">
                  <div class="subtitulo">Para las corporaciones, las disputas mediadas a través del sistema judicial, o litigios, pueden representar un desafío que afecte tanto a su reputación como a su viabilidad a largo plazo.</div>
                  <div class="subtexto">
                    Por esta razón, contar con una representación legal específica en este tipo de circunstancias es fundamental. Gracias a la dilatada experiencia y la atención individualizada de nuestros abogados laboralistas en Sagardoy, abordamos la resolución de estos juicios con éxito.
                    <br><br>
                    Desde hace décadas y siempre estando en la vanguardia en aquello vinculado al derecho laboral, brindamos orientación legal y respaldo a empresas de ámbito nacional e internacional, en colaboración con nuestra alianza internacional <span class="rojo">Ius Laboris</span>. Asesoramos durante todas las etapas del proceso, manteniendo nuestro compromiso con la resolución del caso.
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-2"></div>
              </div>
            </div>
            <div class="contenido" id="c-02">
              <div class="titulo-alt">2 Asesoramiento laboral y representación legal en litigios</div>
              <img src="images/img-asesoramiento.jpg" class="img-fluid" alt="" />
              <div class="row">
                <div class="col-12 col-sm-12 col-lg-10">
                  <div class="subtitulo">Para las corporaciones, las disputas mediadas a través del sistema judicial, o litigios, pueden representar un desafío que afecte tanto a su reputación como a su viabilidad a largo plazo.</div>
                  <div class="subtexto">
                    Por esta razón, contar con una representación legal específica en este tipo de circunstancias es fundamental. Gracias a la dilatada experiencia y la atención individualizada de nuestros abogados laboralistas en Sagardoy, abordamos la resolución de estos juicios con éxito.
                    <br><br>
                    Desde hace décadas y siempre estando en la vanguardia en aquello vinculado al derecho laboral, brindamos orientación legal y respaldo a empresas de ámbito nacional e internacional, en colaboración con nuestra alianza internacional <span class="rojo">Ius Laboris</span>. Asesoramos durante todas las etapas del proceso, manteniendo nuestro compromiso con la resolución del caso.
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-2"></div>
              </div>
            </div>
            <div class="contenido" id="c-03">
              <div class="titulo-alt">3 Asesoramiento laboral y representación legal en litigios</div>
              <img src="images/img-asesoramiento.jpg" class="img-fluid" alt="" />
              <div class="row">
                <div class="col-12 col-sm-12 col-lg-10">
                  <div class="subtitulo">Para las corporaciones, las disputas mediadas a través del sistema judicial, o litigios, pueden representar un desafío que afecte tanto a su reputación como a su viabilidad a largo plazo.</div>
                  <div class="subtexto">
                    Por esta razón, contar con una representación legal específica en este tipo de circunstancias es fundamental. Gracias a la dilatada experiencia y la atención individualizada de nuestros abogados laboralistas en Sagardoy, abordamos la resolución de estos juicios con éxito.
                    <br><br>
                    Desde hace décadas y siempre estando en la vanguardia en aquello vinculado al derecho laboral, brindamos orientación legal y respaldo a empresas de ámbito nacional e internacional, en colaboración con nuestra alianza internacional <span class="rojo">Ius Laboris</span>. Asesoramos durante todas las etapas del proceso, manteniendo nuestro compromiso con la resolución del caso.
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-2"></div>
              </div>
            </div>
            <div class="contenido" id="c-04">
              <div class="titulo-alt">4 Asesoramiento laboral y representación legal en litigios</div>
              <img src="images/img-asesoramiento.jpg" class="img-fluid" alt="" />
              <div class="row">
                <div class="col-12 col-sm-12 col-lg-10">
                  <div class="subtitulo">Para las corporaciones, las disputas mediadas a través del sistema judicial, o litigios, pueden representar un desafío que afecte tanto a su reputación como a su viabilidad a largo plazo.</div>
                  <div class="subtexto">
                    Por esta razón, contar con una representación legal específica en este tipo de circunstancias es fundamental. Gracias a la dilatada experiencia y la atención individualizada de nuestros abogados laboralistas en Sagardoy, abordamos la resolución de estos juicios con éxito.
                    <br><br>
                    Desde hace décadas y siempre estando en la vanguardia en aquello vinculado al derecho laboral, brindamos orientación legal y respaldo a empresas de ámbito nacional e internacional, en colaboración con nuestra alianza internacional <span class="rojo">Ius Laboris</span>. Asesoramos durante todas las etapas del proceso, manteniendo nuestro compromiso con la resolución del caso.
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-2"></div>
              </div>
            </div>
            <div class="contenido" id="c-05">
              <div class="titulo-alt">5 Asesoramiento laboral y representación legal en litigios</div>
              <img src="images/img-asesoramiento.jpg" class="img-fluid" alt="" />
              <div class="row">
                <div class="col-12 col-sm-12 col-lg-10">
                  <div class="subtitulo">Para las corporaciones, las disputas mediadas a través del sistema judicial, o litigios, pueden representar un desafío que afecte tanto a su reputación como a su viabilidad a largo plazo.</div>
                  <div class="subtexto">
                    Por esta razón, contar con una representación legal específica en este tipo de circunstancias es fundamental. Gracias a la dilatada experiencia y la atención individualizada de nuestros abogados laboralistas en Sagardoy, abordamos la resolución de estos juicios con éxito.
                    <br><br>
                    Desde hace décadas y siempre estando en la vanguardia en aquello vinculado al derecho laboral, brindamos orientación legal y respaldo a empresas de ámbito nacional e internacional, en colaboración con nuestra alianza internacional <span class="rojo">Ius Laboris</span>. Asesoramos durante todas las etapas del proceso, manteniendo nuestro compromiso con la resolución del caso.
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-2"></div>
              </div>
            </div>
            <div class="contenido" id="c-06">
              <div class="titulo-alt">6 Asesoramiento laboral y representación legal en litigios</div>
              <img src="images/img-asesoramiento.jpg" class="img-fluid" alt="" />
              <div class="row">
                <div class="col-12 col-sm-12 col-lg-10">
                  <div class="subtitulo">Para las corporaciones, las disputas mediadas a través del sistema judicial, o litigios, pueden representar un desafío que afecte tanto a su reputación como a su viabilidad a largo plazo.</div>
                  <div class="subtexto">
                    Por esta razón, contar con una representación legal específica en este tipo de circunstancias es fundamental. Gracias a la dilatada experiencia y la atención individualizada de nuestros abogados laboralistas en Sagardoy, abordamos la resolución de estos juicios con éxito.
                    <br><br>
                    Desde hace décadas y siempre estando en la vanguardia en aquello vinculado al derecho laboral, brindamos orientación legal y respaldo a empresas de ámbito nacional e internacional, en colaboración con nuestra alianza internacional <span class="rojo">Ius Laboris</span>. Asesoramos durante todas las etapas del proceso, manteniendo nuestro compromiso con la resolución del caso.
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-2"></div>
              </div>
            </div>
            <div class="contenido" id="c-07">
              <div class="titulo-alt">7 Asesoramiento laboral y representación legal en litigios</div>
              <img src="images/img-asesoramiento.jpg" class="img-fluid" alt="" />
              <div class="row">
                <div class="col-12 col-sm-12 col-lg-10">
                  <div class="subtitulo">Para las corporaciones, las disputas mediadas a través del sistema judicial, o litigios, pueden representar un desafío que afecte tanto a su reputación como a su viabilidad a largo plazo.</div>
                  <div class="subtexto">
                    Por esta razón, contar con una representación legal específica en este tipo de circunstancias es fundamental. Gracias a la dilatada experiencia y la atención individualizada de nuestros abogados laboralistas en Sagardoy, abordamos la resolución de estos juicios con éxito.
                    <br><br>
                    Desde hace décadas y siempre estando en la vanguardia en aquello vinculado al derecho laboral, brindamos orientación legal y respaldo a empresas de ámbito nacional e internacional, en colaboración con nuestra alianza internacional <span class="rojo">Ius Laboris</span>. Asesoramos durante todas las etapas del proceso, manteniendo nuestro compromiso con la resolución del caso.
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-2"></div>
              </div>
            </div>
            <div class="contenido" id="c-08">
              <div class="titulo-alt">8 Asesoramiento laboral y representación legal en litigios</div>
              <img src="images/img-asesoramiento.jpg" class="img-fluid" alt="" />
              <div class="row">
                <div class="col-12 col-sm-12 col-lg-10">
                  <div class="subtitulo">Para las corporaciones, las disputas mediadas a través del sistema judicial, o litigios, pueden representar un desafío que afecte tanto a su reputación como a su viabilidad a largo plazo.</div>
                  <div class="subtexto">
                    Por esta razón, contar con una representación legal específica en este tipo de circunstancias es fundamental. Gracias a la dilatada experiencia y la atención individualizada de nuestros abogados laboralistas en Sagardoy, abordamos la resolución de estos juicios con éxito.
                    <br><br>
                    Desde hace décadas y siempre estando en la vanguardia en aquello vinculado al derecho laboral, brindamos orientación legal y respaldo a empresas de ámbito nacional e internacional, en colaboración con nuestra alianza internacional <span class="rojo">Ius Laboris</span>. Asesoramos durante todas las etapas del proceso, manteniendo nuestro compromiso con la resolución del caso.
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-2"></div>
              </div>
            </div>
            <div class="contenido" id="c-09">
              <div class="titulo-alt">9 Asesoramiento laboral y representación legal en litigios</div>
              <img src="images/img-asesoramiento.jpg" class="img-fluid" alt="" />
              <div class="row">
                <div class="col-12 col-sm-12 col-lg-10">
                  <div class="subtitulo">Para las corporaciones, las disputas mediadas a través del sistema judicial, o litigios, pueden representar un desafío que afecte tanto a su reputación como a su viabilidad a largo plazo.</div>
                  <div class="subtexto">
                    Por esta razón, contar con una representación legal específica en este tipo de circunstancias es fundamental. Gracias a la dilatada experiencia y la atención individualizada de nuestros abogados laboralistas en Sagardoy, abordamos la resolución de estos juicios con éxito.
                    <br><br>
                    Desde hace décadas y siempre estando en la vanguardia en aquello vinculado al derecho laboral, brindamos orientación legal y respaldo a empresas de ámbito nacional e internacional, en colaboración con nuestra alianza internacional <span class="rojo">Ius Laboris</span>. Asesoramos durante todas las etapas del proceso, manteniendo nuestro compromiso con la resolución del caso.
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-2"></div>
              </div>
            </div>
            <div class="contenido" id="c-10">
              <div class="titulo-alt">10 Asesoramiento laboral y representación legal en litigios</div>
              <img src="images/img-asesoramiento.jpg" class="img-fluid" alt="" />
              <div class="row">
                <div class="col-12 col-sm-12 col-lg-10">
                  <div class="subtitulo">Para las corporaciones, las disputas mediadas a través del sistema judicial, o litigios, pueden representar un desafío que afecte tanto a su reputación como a su viabilidad a largo plazo.</div>
                  <div class="subtexto">
                    Por esta razón, contar con una representación legal específica en este tipo de circunstancias es fundamental. Gracias a la dilatada experiencia y la atención individualizada de nuestros abogados laboralistas en Sagardoy, abordamos la resolución de estos juicios con éxito.
                    <br><br>
                    Desde hace décadas y siempre estando en la vanguardia en aquello vinculado al derecho laboral, brindamos orientación legal y respaldo a empresas de ámbito nacional e internacional, en colaboración con nuestra alianza internacional <span class="rojo">Ius Laboris</span>. Asesoramos durante todas las etapas del proceso, manteniendo nuestro compromiso con la resolución del caso.
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-2"></div>
              </div>
            </div>
            <div class="contenido" id="c-11">
              <div class="titulo-alt">11 Asesoramiento laboral y representación legal en litigios</div>
              <img src="images/img-asesoramiento.jpg" class="img-fluid" alt="" />
              <div class="row">
                <div class="col-12 col-sm-12 col-lg-10">
                  <div class="subtitulo">Para las corporaciones, las disputas mediadas a través del sistema judicial, o litigios, pueden representar un desafío que afecte tanto a su reputación como a su viabilidad a largo plazo.</div>
                  <div class="subtexto">
                    Por esta razón, contar con una representación legal específica en este tipo de circunstancias es fundamental. Gracias a la dilatada experiencia y la atención individualizada de nuestros abogados laboralistas en Sagardoy, abordamos la resolución de estos juicios con éxito.
                    <br><br>
                    Desde hace décadas y siempre estando en la vanguardia en aquello vinculado al derecho laboral, brindamos orientación legal y respaldo a empresas de ámbito nacional e internacional, en colaboración con nuestra alianza internacional <span class="rojo">Ius Laboris</span>. Asesoramos durante todas las etapas del proceso, manteniendo nuestro compromiso con la resolución del caso.
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-2"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



<!-- Quienes opiniones OK -->
<?php get_template_part('componentes/generales/comp','opiniones');?>

<!-- Contactanos -->
<?php get_template_part('componentes/servicios/comp','contactanos');?>





 <?php get_footer(); ?>