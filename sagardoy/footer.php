  <?php 
   $logofooter = get_field('logo_footer', 'option');
   $copyright = get_field('copyright', 'option');
   $telefonofooter = get_field('telefono_footer', 'option');
   $mailfooter = get_field('mail_footer', 'option');
   $logopequeño = get_field('logo_pequeno', 'option');
   $linkedin = get_field('redes_link', 'option');
   $youtube = get_field('redes_youtube', 'option');



  ?>
  <footer class="footer">
    <div class="container">
      <div class="container-top">
        <div class="row">
          <div class="col-12 col-sm-12 col-lg-4">
            <a href="#" class="logo-footer"><img src="<?php echo $logofooter; ?>" alt="" /></a>
          </div>
          <div class="col-12 col-sm-12 col-lg-1"></div>
          <div class="col-12 col-sm-12 col-lg-7">
            <div class="row d-flex align-items-center">
              <div class="col-12 col-sm-12 col-md-8">
                <a href="tel:<?php echo $telefonofooter;?>" class="btn-telefono"><?php echo $telefonofooter;?></a><br>
                <a href="mailto:<?php echo $mailfooter;?>" class="btn-email"><?php echo $mailfooter;?></a>
              </div>
              <div class="col-12 col-sm-12 col-lg-4 text-end">
                <div class="btn-idioma">
                    <?php
                    // Obtener los idiomas activos
                    $languages = apply_filters('wpml_active_languages', NULL, array('skip_missing' => 0, 'orderby' => 'id'));

                    if (!empty($languages)) :
                        foreach ($languages as $language) :
                            // Determinar si el idioma es el activo
                            $is_active = $language['active'] ? 'activo' : '';
                    ?>
                            <a href="<?php echo esc_url($language['url']); ?>" class="<?php echo $is_active; ?>">
                                <?php echo strtoupper($language['language_code']); ?>
                            </a>
                    <?php
                        endforeach;
                    endif;
                    ?>
                </div>

                <div class="btns-redes">
                  <a href="<?php echo $linkedin; ?>" class="btn-linkedin"></a>
                  <a href="<?php echo $youtube; ?>" class="btn-youtube"></a>
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
              <div class="title"><?php _e('Suscríbete a nuestra newsletter', 'sagardoy'); ?></div>
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
                  <h2 class="title"><?php _e('SAGARDOY', 'sagardoy'); ?></h2>
                  <?php 
                 $menu_name = 'sagardoy';
                    if ($menu_name) {
                        $menu_items = wp_get_nav_menu_items($menu_name);
                        echo '<ul class="btns-list">';
                        foreach ($menu_items as $item) {
                            echo '<li><a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a></li>';
                        }
                        echo '</ul>';
                    } else {
                        echo 'No se ha encontrado menú.';
                    }
                    ?>
                </div>
                <div class="col-12 col-sm-12 col-lg-6 border-top pt-3">
                  <h2 class="title"><?php _e('SEDES', 'sagardoy'); ?></h2>
                 <?php 
                 $menu_name = 'sedes';
                    if ($menu_name) {
                        $menu_items = wp_get_nav_menu_items($menu_name);
                        echo '<ul class="btns-list">';
                        foreach ($menu_items as $item) {
                            echo '<li><a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a></li>';
                        }
                        echo '</ul>';
                    } else {
                        echo 'No se ha encontrado menú.';
                    }
                    ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-bottom">
        <div class="row">
          <div class="col-12 col-sm-12 col-lg-4">
            <a href="#" class="logo-footer"><img src="<?php echo $logopequeño;?>" alt="" /></a>
          </div>
          <div class="col-12 col-sm-12 col-lg-1"></div>
          <div class="col-12 col-sm-12 col-lg-7">
            <div class="row">
              <div class="col-12 col-sm-12 col-lg-9">
                  <?php
                    $menu_name = 'footer-politicas';
                    if ($menu_name) {
                        $menu_items = wp_get_nav_menu_items($menu_name);
                        echo '<ul class="btns-list">';
                        foreach ($menu_items as $item) {
                            echo '<li><a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a></li>';
                        }
                        echo '</ul>';
                    } else {
                        echo 'No se ha encontrado menú.';
                    }
                    ?>
              </div>
              <div class="col-12 col-sm-12 col-lg-3 text-end">
                <div class="copy"><?php echo $copyright;?> <a href="#" class="logo-footer-alt"><img src="<?php echo $logopequeño;?>" alt="" /></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
<?php wp_footer(); ?>
  </body>
  </html>