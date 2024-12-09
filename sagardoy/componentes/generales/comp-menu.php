 <?php 
 $logomenu = get_field('logo_menu', 'option');
 
 ?>
 
 <nav class="navbar navbar-expand-lg">
    <div class="menu-content">
      <a class="navbar-brand d-block d-lg-none" href="#"><img src="<?php echo $logomenu; ?>" class="logo" alt="" /></a>
      <div id="main-nav" class="collapse navbar-collapse">
        <div class="navbar-nav">
          <div class="col-left">
            <a class="navbar-brand" href="#"><img src="<?php echo $logomenu; ?>" class="logo" alt="" /></a>
          </div>
          <div class="col-right">

          <?php 
                 $menu_name = 'main';
                    if ($menu_name) {
                        $menu_items = wp_get_nav_menu_items($menu_name);
                        echo '<ul class="btns-link">';
                        foreach ($menu_items as $item) {

                          if ($item->title=='Equipo') {
                              $btnn='btn-equipo';
                          }
                          if ($item->title=='Actualidad') {
                              $btnn='btn-actualidad';
                          }



                            echo '<li class="btn-link_ '.$btnn.'"><a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';

                            if ($item->title=='equipo') {
                              get_template_part('componentes/generales/comp','submenuequipo');
                            }

                            if ($item->title=='actualidad') {
                              get_template_part('componentes/generales/comp','submenuactualidad');
                            }
                            
                            echo '</li>';

                        }
                        echo '</ul>';
                    } else {
                        echo 'No se ha encontrado menú.';
                    }
                ?>
            <div class="idioma-dropdown-menu">
              <a class="btn-idioma" href="#" data-bs-toggle="dropdown">Es</a>
              <ul class="dropdown-menu">
                <li><a href="#">Es</a></li>
                <li class="linea"></li>
                <li><a href="#">En</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="navbar-nav-mobile d-block d-lg-none">
          <?php 
                 $menu_name = 'main';
                    if ($menu_name) {
                        $menu_items = wp_get_nav_menu_items($menu_name);
                        if ($item->title=='equipo') {
                              $btnn='btn-equipo';
                          }
                          if ($item->title=='actualidad') {
                              $btnn='btn-actualidad';
                          }
                        
                        foreach ($menu_items as $item) {
                            echo '<a href="' . esc_url($item->url) . '" class="btn-link '.$btnn .'">' . esc_html($item->title) . '</a></li>';

                        }
                    } else {
                        echo 'No se ha encontrado menú.';
                    }
                ?>
          <div class="btn-idiomas">
            <a href="#" class="btn-idioma">Español</a>
            <a href="#" class="btn-idioma activo">English</a>
          </div>
          <a href="#" class="btn-contacto">Contacto</a>
          <div class="holder-equipo">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="titulo"><a href="#" class="btn-volver"></a>Equipo</div>
                  <div class="form">
                    <div class="subtitulo">Buscar abogado</div>
                    <div class="input-email">
                      <input class="input" value="" placeholder="Buscar"></input>
                      <a href="#" class="btn-lupa"></a>
                    </div>
                    <div class="select">
                      <select id="standard-select">
                        <option value="0" disabled selected>Cargo</option>
                        <option value="1">Opción 1</option>
                        <option value="2">Opción 2</option>
                        <option value="3">Opción 3</option>
                        <option value="4">Opción 4</option>
                        <option value="5">Opción 5</option>
                      </select>
                    </div>
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
                    <a href="#" class="btn-buscar">Buscar</a>
                  </div>
                  <ul class="btns">
                    <li><a href="equipo.html">Conoce a nuestro equipo</a></li>
                    <li><a href="unete-al-equipo.html">Únete al equipo</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="holder-actualidad">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="titulo"><a href="#" class="btn-volver"></a>Actualidad</div>
                  <ul class="btns">
                    <li><a href="noticias.html">Noticias</a></li>
                    <li><a href="publicaciones.html">Publicaciones</a></li>
                  </ul>
                  <div class="subtitulo">Últimas noticias y publicaciones</div>
                  <div class="noticias">
                    <div class="noticia">
                      <div class="row">
                        <div class="col-9">
                          <div class="top">
                            <div class="categoria">NOTICIAS</div>
                            <div class="fecha">25.12.2024</div>
                          </div>
                          <a href="#" class="titulo">Dolor magna diam nunc sed in sit leo. Nec netus a dui ipsum sit diam quam. Erat massa.</a>
                        </div>
                        <div class="col-3">
                          <a href="#"><img src="images/img-publicaciones-06.jpg" class="image" alt="" /></a>
                        </div>
                      </div>
                    </div>
                    <div class="noticia">
                      <div class="row">
                        <div class="col-9">
                          <div class="top">
                            <div class="categoria">NOTICIAS</div>
                            <div class="fecha">25.12.2024</div>
                          </div>
                          <a href="#" class="titulo">Dolor magna diam nunc sed in sit leo. Nec netus a dui ipsum sit diam quam. Erat massa.</a>
                        </div>
                        <div class="col-3">
                          <a href="#"><img src="images/img-publicaciones-07.jpg" class="image" alt="" /></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"  aria-expanded="false" aria-label="" title="navbar-toggler"><i class="ico-menu"></i><i class="ico-cerrar"></i></button>
    </div>
  </nav>



