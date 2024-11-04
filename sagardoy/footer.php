  <footer class="footer">
    <div class="container">
      <div class="container-top">
        <div class="row">
          <div class="col-12 col-sm-12 col-lg-4">
            <a href="#" class="logo-footer"><img src="https://sagardoy.neuronalcode.io/wp-content/uploads/2024/11/logo-alt.svg" alt="" /></a>
          </div>
          <div class="col-12 col-sm-12 col-lg-1"></div>
          <div class="col-12 col-sm-12 col-lg-7">
            <div class="row d-flex align-items-center">
              <div class="col-12 col-sm-12 col-md-8">
                <a href="tel:+34915429040" class="btn-telefono">+34 915 429 040</a><br>
                <a href="tel:+34915429040" class="btn-email">info@sagardoy.com</a>
              </div>
              <div class="col-12 col-sm-12 col-lg-4 text-end">
                <div class="btn-idioma">
                  <a href="#">Es</a>
                  <a href="#" class="activo">En</a>
                </div>
                <div class="btns-redes">
                  <a href="#" class="btn-linkedin"></a>
                  <a href="#" class="btn-youtube"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-middle">
        <div class="row">
          <div class="col-12 col-sm-12 col-lg-4">
            <div class="newletter">
              <div class="title">Newsletter</div>
              <div class="input-email">
                <input class="input" value="" placeholder="Email"></input>
                <a href="#" class="btn-link"></a>
              </div>
              <div class="politica">
                <label class="checkbox-holder">
                  <input type="checkbox" checked="checked">
                  <span class="checkmark"></span>
                </label>
                <div class="label">Enviando este formulario estoy aceptando la <a href="#">política de privacidad</a></div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-lg-1"></div>
          <div class="col-12 col-sm-12 col-lg-7">
            <div class="menu">
              <div class="row">
                <div class="col-12 col-sm-12 col-lg-6 border-top pt-3">
                  <h2 class="title">SAGARDOY</h2>
                  <ul class="btns-list">
                    <li><a href="nosotros.html">Nosotros</a></li>
                    <li><a href="servicios.html">Servicios</a></li>
                    <li><a href="equipo.html" class="activo">Equipo</a></li>
                    <li><a href="unete-al-equipo.html">Únete al equipo</a></li>
                    <li><a href="sagardoy-school.html">Sagardoy School</a></li>
                    <li><a href="contacto.html">Contacto</a></li>
                    <li><a href="noticias.html">Noticias</a></li>
                    <li><a href="publicaciones.html">Publicaciones</a></li>
                  </ul>
                </div>
                <div class="col-12 col-sm-12 col-lg-6 border-top pt-3">
                  <h2 class="title">SEDES</h2>
                  <ul class="btns-list">
                    <li><a href="contacto.html">Madrid</a></li>
                    <li><a href="contacto.html">Barcelona</a></li>
                    <li><a href="contacto.html">Málaga</a></li>
                    <li><a href="contacto.html">Sevilla</a></li>
                    <li><a href="contacto.html">Bilbao</a></li>
                    <li><a href="contacto.html">Las Palmas</a></li>
                    <li><a href="contacto.html">Internacional</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-bottom">
        <div class="row">
          <div class="col-12 col-sm-12 col-lg-4">
            <a href="#" class="logo-footer"><img src="https://sagardoy.neuronalcode.io/wp-content/uploads/2024/11/logo-footer.svg" alt="" /></a>
          </div>
          <div class="col-12 col-sm-12 col-lg-1"></div>
          <div class="col-12 col-sm-12 col-lg-7">
            <div class="row">
              <div class="col-12 col-sm-12 col-lg-9">
                  <?php
                    $menu_location = 'footer-politicas';
                    $menu_name = wp_get_nav_menu_name($menu_location);

                    if ($menu_name) {
                        $menu_items = wp_get_nav_menu_items($menu_name);
                        echo '<ul class="btns-list">';
                        foreach ($menu_items as $item) {
                            echo '<li><a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a></li>';
                        }
                        echo '</ul>';
                    } else {
                        echo 'No se ha encontrado un menú en esta ubicación.';
                    }
                    ?>
              </div>
              <div class="col-12 col-sm-12 col-lg-3 text-end">
                <div class="copy">© 2024 Sagardoy <a href="#" class="logo-footer-alt"><img src="https://sagardoy.neuronalcode.io/wp-content/uploads/2024/11/logo-footer.svg" alt="" /></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  </body>
  </html>