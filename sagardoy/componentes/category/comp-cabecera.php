<section class="section cabecera-interna-publicaciones cabecera">
    <a href="javascript:window.history.back();" class="btn-volver"><u><?php _e('Publicaciones', 'sagardoy'); ?></u></a>
    <div class="holder">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-lg-8">
            <!-- Título de la categoría actual -->
            <div class="titulo"><?php single_cat_title(); ?></div>
          </div>
          <div class="col-12 col-sm-12 col-lg-4"></div>
        </div>
        <div class="row">
          <div class="col-12 col-sm-12 col-lg-6 catedescri">
            <!-- Descripción de la categoría actual -->
            <?php echo category_description(); ?>
          </div>
          <div class="col-12 col-sm-12 col-lg-6"></div>
        </div>
      </div>
    </div>
</section>
