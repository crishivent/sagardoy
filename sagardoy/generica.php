<?php
/*
Template Name: Página generica
*/

get_header();

?>
<section class="section cabecera-genericas">
  
  </section>
<section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12">
            <h1><?php the_title();?></h1>
          <?php the_content();?>
            
        </div>
      </div>
    </div>
  </section>


<?php get_footer(); ?>