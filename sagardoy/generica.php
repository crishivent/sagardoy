<?php
/*
Template Name: Página generica
*/

get_header();

?>
<section class="section cabecera-home cabecera">
  
  </section>
<section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12">
            <?php the_title();?>
          <?php the_content();?>
            
        </div>
      </div>
    </div>
  </section>


<?php get_footer(); ?>