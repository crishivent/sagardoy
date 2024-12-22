<?php
/*
Template Name: Unete al equipo
*/

get_header();

//Cabecera
set_query_var("fondo_de_cabecera", get_field('fondo_de_cabecera'));
set_query_var("unete_titulo", get_field('unete_titulo'));
set_query_var("unete_subtitulo", get_field('unete_subtitulo'));



//Bloque Impulso
set_query_var("texto_entrada_unete", get_field('texto_entrada_unete'));
set_query_var("titulo_unete_bloque_1", get_field('titulo_unete_bloque_1'));
set_query_var("enlaces_unete", get_field('enlaces_unete'));
set_query_var("imagen_unete_bloque_1", get_field('imagen_unete_bloque_1'));
set_query_var("boton_unete_bloque_1", get_field('boton_unete_bloque_1'));
set_query_var("enlace_unete_bloque_1", get_field('enlace_unete_bloque_1'));




 ?>


<!-- Cabecera -->
  <?php get_template_part('componentes/unetealequipo/comp','cabecera');?>

<!-- Bloque Impulso -->
  <?php get_template_part('componentes/unetealequipo/comp','impulso');?>


<!-- Bloque 2 con foto -->
<?php get_template_part('componentes/unetealequipo/comp','opi');?>
  

<!-- Formulario -->
 <?php get_template_part('componentes/unetealequipo/comp','formulario');?>





  <?php get_footer(); ?>