<?php
/*
Template Name: Página Servicios
*/

get_header();


//Cabecera
set_query_var("servicios_fondo_de_cabecera", get_field('servicios_fondo_de_cabecera'));
set_query_var("servicios_titulo", get_field('servicios_titulo'));
set_query_var("servicios_subtitulo", get_field('servicios_subtitulo'));

//Necesitas información
set_query_var("imagen_informacion", get_field('imagen_informacion'));
set_query_var("titulo_informacion", get_field('titulo_informacion'));
set_query_var("pagina_informacion", get_field('pagina_informacion'));


// Servicios
set_query_var("servicios", get_field('servicios'));

?>

<!-- cabecera -->
<?php get_template_part('componentes/servicios/comp','cabecera');?>

<!-- Servicios -->
<?php get_template_part('componentes/servicios/comp','servicios');?>

<!-- Quienes opiniones OK -->
<?php //get_template_part('componentes/generales/comp','opiniones');?>


<!-- Últimas noticias Ok-->
<?php get_template_part('componentes/home/comp','ultimasnoticias');?>

<!-- Contactanos -->
<?php get_template_part('componentes/servicios/comp','contactanos');?>





 <?php get_footer(); ?>