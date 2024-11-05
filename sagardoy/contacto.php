<?php
/*
Template Name: Página de contacto
*/

get_header();

$sedes = get_field('sedes', 'option');
$email = get_field('email_general', 'option');
$telefono = get_field('telefono_general', 'option');

 ?>

  <section class="modulo-35 pt-130 pb-130">
    <div class="desktop">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-lg-3 col-left">
            <h2 class="titulo">Contacto</h2>
            <div class="subtitulo">Nuestras Sedes</div>
            <ul class="lista">
                <?php 
                $i=1;
                foreach ($sedes as $sede) {
                    if($i==1){$activo='activo';}else{$activo='noac';}
                    echo '<li><a href="#" data-id="0'.$i.'" class="btn-link '.$activo.'">'.htmlspecialchars($sede['nombre']).'</a></li>';
                    $i++;
                }?>
              
            </ul>
            <div class="info">
              <a href="mailto:<?php echo $email;?>" class="btn-email"><?php echo $email;?></a><br>
              <a href="tel:<?php echo $telefono; ?>" class="btn-tel"><?php echo $telefono;?></a>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-lg-1"></div>
          <div class="col-12 col-sm-12 col-lg-8 col-right">
            <div class="row">
              <div class="col-12">
                <div class="imagenes-holder">
                    <?php 
                $i=1;
                foreach ($sedes as $sede) {
                    if($i==1){$activo='show';}else{$activo='noac';}
                    echo '<div class="imagen-holder '.$activo.'" id="img-0'.$i.'">
                    <div class="titulo">'.htmlspecialchars($sede['titulo_derecha']).'</div>
                    <img src="'.htmlspecialchars($sede['imagen']).'" class="img-fluid" />
                  </div>';
                    $i++;
                }?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-sm-12 col-lg-5">
                <div class="infos-holder">
                <?php 
                $i=1;
                foreach ($sedes as $sede) {
                    if($i==1){$activo='show';}else{$activo='noac';}
                    echo '<div class="info-holder '.$activo.'" id="info-0'.$i.'">
                    <div class="texto">'.htmlspecialchars($sede['descripcion']).'</div>
                    <div class="info">
                      <a href="#" class="btn-direccion">'.htmlspecialchars($sede['direccion']).'</a><br><br>
                      <a href="tel:'.htmlspecialchars($sede['telefono']).'">'.htmlspecialchars($sede['telefono']).'</a><br>
                      <a href="mailto:'.htmlspecialchars($sede['email']).'" class="btn-email">'.htmlspecialchars($sede['email']).'</a>
                    </div>
                  </div>';
                    $i++;
                }?>

                </div>
              </div>
              <div class="col-12 col-sm-12 col-lg-1"></div>
              <div class="col-12 col-sm-12 col-lg-6">
                <form>
                  <div class="row">
                    <div class="col-12 col-sm-12 col-lg-6">
                      <div class="input-holder"><input class="input" value="" placeholder="Nombre*"></input></div>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-6">
                      <div class="input-holder"><input class="input" value="" placeholder="Apellidos*"></input></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-sm-12 col-lg-6">
                      <div class="input-holder"><input class="input" value="" placeholder="Email*"></input></div>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-6">
                      <div class="input-holder"><input class="input" value="" placeholder="Teléfono"></input></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-sm-12 col-lg-6">
                      <div class="input-holder"><input class="input" value="" placeholder="Empresa*"></input></div>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-6">
                      <div class="input-holder"><input class="input" value="" placeholder="Cargo"></input></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-sm-12 col-lg-6">
                      <div class="select">
                        <select id="standard-select">
                          <option value="0" disabled selected>Asunto*</option>
                          <option value="1">Opción 1</option>
                          <option value="2">Opción 2</option>
                          <option value="3">Opción 3</option>
                          <option value="4">Opción 4</option>
                          <option value="5">Opción 5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-6">
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
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="input-textarea"><textarea class="input" placeholder="Mensaje"></textarea></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="select">
                        <select id="standard-select">
                          <option value="0" disabled selected>¿Cómo nos has conovido?*</option>
                          <option value="1">Opción 1</option>
                          <option value="2">Opción 2</option>
                          <option value="3">Opción 3</option>
                          <option value="4">Opción 4</option>
                          <option value="5">Opción 5</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="politica">
                        <label class="checkbox-holder">
                          <input type="checkbox" checked="checked">
                          <span class="checkmark"></span>
                        </label>
                        <div class="label">Enviando este formulario estoy aceptando la <a href="#">política de privacidad</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <a href="#" class="btn-enviar">Enviar</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mobile">
      <div class="layer">
        <div class="holder">
          <div class="data">
            <h2 class="titulo">Contacto</h2>
            <div class="info">
              <a href="mailto:info@sagardoy.com" class="btn-email">info@sagardoy.com</a><br>
              <a href="tel:+34914540071" class="btn-tel">+34 91 454 0071</a>
            </div>
            <div class="subtitulo">Nuestras Sedes</div>
          </div>
          <ul class="lista">
            <li><a href="#" data-id="01" class="btn-link">Madrid</a></li>
            <li><a href="#" data-id="02" class="btn-link">Barcelona</a></li>
            <li><a href="#" data-id="03" class="btn-link">Málaga</a></li>
            <li><a href="#" data-id="04" class="btn-link">Sevilla</a></li>
            <li><a href="#" data-id="05" class="btn-link">Bilbao</a></li>
            <li><a href="#" data-id="06" class="btn-link">Las Palmas</a></li>
            <li><a href="#" data-id="07" class="btn-link">Internacional</a></li>
          </ul>
        </div>
        <div class="holder">
          <div class="container">
            <div class="datas">
              <div class="data show" id="data-01">
                <div class="titulo"><a href="#" class="btn-volver"></a>Madrid</div>
                <div class="texto">Sapien arcu justo vulputate lectus nullam tempus volutpat. Lorem laoreet mollis faucibus eu neque turpis. Dui aliquam id maecenas mauris amet pretium ut amet. Donec nisi cras.</div>
                <div class="info">
                  <a href="#" class="btn-direccion">C. de Velázquez, 86, D, 2ª planta,<br>Salamanca, 28006 Madrid</a><br><br>
                  <a href="tel:+34915429040">+34 915 429 040</a><br>
                  <a href="mailto:madrid@sagardoy.com" class="btn-email">madrid@sagardoy.com</a>
                </div>
              </div>
              <div class="data" id="data-02">
                <div class="titulo"><a href="#" class="btn-volver"></a>Barcelona</div>
                <div class="texto">Sapien arcu justo vulputate lectus nullam tempus volutpat. Lorem laoreet mollis faucibus eu neque turpis. Dui aliquam id maecenas mauris amet pretium ut amet. Donec nisi cras.</div>
                <div class="info">
                  <a href="#" class="btn-direccion">C. de Velázquez, 86, D, 2ª planta,<br>Salamanca, 28006 Madrid</a><br><br>
                  <a href="tel:+34915429040">+34 915 429 040</a><br>
                  <a href="mailto:barcelona@sagardoy.com" class="btn-email">barcelona@sagardoy.com</a>
                </div>
              </div>
              <div class="data" id="data-03">
                <div class="titulo"><a href="#" class="btn-volver"></a>Málaga</div>
                <div class="texto">Sapien arcu justo vulputate lectus nullam tempus volutpat. Lorem laoreet mollis faucibus eu neque turpis. Dui aliquam id maecenas mauris amet pretium ut amet. Donec nisi cras.</div>
                <div class="info">
                  <a href="#" class="btn-direccion">C. de Velázquez, 86, D, 2ª planta,<br>Salamanca, 28006 Madrid</a><br><br>
                  <a href="tel:+34915429040">+34 915 429 040</a><br>
                  <a href="mailto:malaga@sagardoy.com" class="btn-email">malaga@sagardoy.com</a>
                </div>
              </div>
              <div class="data" id="data-04">
                <div class="titulo"><a href="#" class="btn-volver"></a>Sevilla</div>
                <div class="texto">Sapien arcu justo vulputate lectus nullam tempus volutpat. Lorem laoreet mollis faucibus eu neque turpis. Dui aliquam id maecenas mauris amet pretium ut amet. Donec nisi cras.</div>
                <div class="info">
                  <a href="#" class="btn-direccion">C. de Velázquez, 86, D, 2ª planta,<br>Salamanca, 28006 Madrid</a><br><br>
                  <a href="tel:+34915429040">+34 915 429 040</a><br>
                  <a href="mailto:sevilla@sagardoy.com" class="btn-email">sevilla@sagardoy.com</a>
                </div>
              </div>
              <div class="data" id="data-05">
                <div class="titulo"><a href="#" class="btn-volver"></a>Bilbao</div>
                <div class="texto">Sapien arcu justo vulputate lectus nullam tempus volutpat. Lorem laoreet mollis faucibus eu neque turpis. Dui aliquam id maecenas mauris amet pretium ut amet. Donec nisi cras.</div>
                <div class="info">
                  <a href="#" class="btn-direccion">C. de Velázquez, 86, D, 2ª planta,<br>Salamanca, 28006 Madrid</a><br><br>
                  <a href="tel:+34915429040">+34 915 429 040</a><br>
                  <a href="mailto:bilbao@sagardoy.com" class="btn-email">bilbao@sagardoy.com</a>
                </div>
              </div>
              <div class="data" id="data-06">
                <div class="titulo"><a href="#" class="btn-volver"></a>Las Palmas</div>
                <div class="texto">Sapien arcu justo vulputate lectus nullam tempus volutpat. Lorem laoreet mollis faucibus eu neque turpis. Dui aliquam id maecenas mauris amet pretium ut amet. Donec nisi cras.</div>
                <div class="info">
                  <a href="#" class="btn-direccion">C. de Velázquez, 86, D, 2ª planta,<br>Salamanca, 28006 Madrid</a><br><br>
                  <a href="tel:+34915429040">+34 915 429 040</a><br>
                  <a href="mailto:laspalmas@sagardoy.com" class="btn-email">laspalmas@sagardoy.com</a>
                </div>
              </div>
              <div class="data" id="data-07">
                <div class="titulo"><a href="#" class="btn-volver"></a>Internacional</div>
                <div class="texto">Sapien arcu justo vulputate lectus nullam tempus volutpat. Lorem laoreet mollis faucibus eu neque turpis. Dui aliquam id maecenas mauris amet pretium ut amet. Donec nisi cras.</div>
                <div class="info">
                  <a href="#" class="btn-direccion">C. de Velázquez, 86, D, 2ª planta,<br>Salamanca, 28006 Madrid</a><br><br>
                  <a href="tel:+34915429040">+34 915 429 040</a><br>
                  <a href="mailto:internacional@sagardoy.com" class="btn-email">internacional@sagardoy.com</a>
                </div>
              </div>
            </div>

            <form>
              <div class="row">
                <div class="col-12">
                  <div class="input-holder"><input class="input" value="" placeholder="Nombre*"></input></div>
                </div>
                <div class="col-12">
                  <div class="input-holder"><input class="input" value="" placeholder="Apellidos*"></input></div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="input-holder"><input class="input" value="" placeholder="Email*"></input></div>
                </div>
                <div class="col-12">
                  <div class="input-holder"><input class="input" value="" placeholder="Teléfono"></input></div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="input-holder"><input class="input" value="" placeholder="Empresa*"></input></div>
                </div>
                <div class="col-12">
                  <div class="input-holder"><input class="input" value="" placeholder="Cargo"></input></div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="select">
                    <select id="standard-select">
                      <option value="0" disabled selected>Asunto*</option>
                      <option value="1">Opción 1</option>
                      <option value="2">Opción 2</option>
                      <option value="3">Opción 3</option>
                      <option value="4">Opción 4</option>
                      <option value="5">Opción 5</option>
                    </select>
                  </div>
                </div>
                <div class="col-12">
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
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="input-textarea"><textarea class="input" placeholder="Mensaje"></textarea></div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="select">
                    <select id="standard-select">
                      <option value="0" disabled selected>¿Cómo nos has conovido?*</option>
                      <option value="1">Opción 1</option>
                      <option value="2">Opción 2</option>
                      <option value="3">Opción 3</option>
                      <option value="4">Opción 4</option>
                      <option value="5">Opción 5</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="politica">
                    <label class="checkbox-holder">
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                    <div class="label">Enviando este formulario estoy aceptando la <a href="#">política de privacidad</a></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <a href="#" class="btn-enviar">Enviar</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>



<!-- Newsletter -->
<?php get_template_part('componentes/generales/comp','newsletter');?>

 <?php get_footer(); ?>
