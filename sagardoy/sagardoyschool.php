<?php
/*
Template Name: Sagardoy School
*/


get_header();


//Cabecera
set_query_var("fondo_school", get_field('fondo_school'));
set_query_var("titulo_school", get_field('titulo_school'));
set_query_var("link_school", get_field('link_school'));

//Opiniones
set_query_var("opiniones", get_field('opiniones'));


// Futuro
set_query_var("titulo_futuro", get_field('titulo_futuro'));
set_query_var("descripcion_futuro", get_field('descripcion_futuro'));
set_query_var("imagen_futuro", get_field('imagen_futuro'));
set_query_var("titulo_imagen_futuro", get_field('titulo_imagen_futuro'));
set_query_var("descripcion_imagen_futuro", get_field('descripcion_imagen_futuro'));

// Áreas
set_query_var("descripcion_areas", get_field('descripcion_areas'));
set_query_var("imagen_areas", get_field('imagen_areas'));
set_query_var("titulo_areas", get_field('titulo_areas'));
set_query_var("lista_areas", get_field('lista_areas'));

// Open Company
set_query_var("open_company", get_field('open_company'));
set_query_var("in_company", get_field('in_company'));

// Alturas
set_query_var("imagen_alturas", get_field('imagen_alturas'));
set_query_var("titulo_alturas", get_field('titulo_alturas'));
set_query_var("enlace_alturas", get_field('enlace_alturas'));
set_query_var("direccion_alturas", get_field('direccion_alturas'));
set_query_var("email_alturas", get_field('email_alturas'));
set_query_var("telefono_alturas", get_field('telefono_alturas'));
set_query_var("enlace_maps_alturas", get_field('enlace_maps_alturas'));



?>

<!-- Quienes Cabecera OK-->
<?php get_template_part('componentes/sagardoyschool/comp','cabecera');?>

<!-- Quienes Areas Ok-->
<?php get_template_part('componentes/sagardoyschool/comp','areas');?>

<!-- Quienes Open Company Ok-->
<?php get_template_part('componentes/sagardoyschool/comp','opencompany');?>

<!-- Quienes Futuro OK-->
<?php get_template_part('componentes/sagardoyschool/comp','futuro');?>

<!-- Quienes opiniones OK -->
<?php get_template_part('componentes/sagardoyschool/comp','opiniones');?>

<!-- Quienes Alturas -->
<?php get_template_part('componentes/sagardoyschool/comp','alturas');?>


  
<?php get_footer(); ?>