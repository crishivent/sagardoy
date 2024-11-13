
<?php
/*
Template Name: Página Nosotros
*/

get_header();

//Cabecera
set_query_var("fondo_de_cabecera", get_field('fondo_de_cabecera'));
set_query_var("nosotros_titulo", get_field('nosotros_titulo'));
set_query_var("nosotros_subtitulo", get_field('nosotros_subtitulo'));

//Quienes Somos
set_query_var("titular_quienes_somos", get_field('titular_quienes_somos'));
set_query_var("puntos_clave", get_field('puntos_clave'));
set_query_var("boton_servicios", get_field('boton_servicios'));

// Impulsa tu carrera
set_query_var("impulsa", get_field('impulsa_tu_carrera'));
set_query_var("impulsa2", get_field('impulsa_tu_carrera_2'));

//Media kit
set_query_var("titulomedia", get_field('titulo_media_kit'));
set_query_var("descripcionmedia", get_field('descripcion_media_kit'));
set_query_var("archivomedia", get_field('archivo_media_kit'));

//Historia
set_query_var("historia", get_field('historia'));

//Premios
set_query_var("premios", get_field('premios'));
set_query_var("titulopremios", get_field('titulo_premios'));

//Necesitas información
set_query_var("imagen_informacion", get_field('imagen_informacion'));
set_query_var("titulo_informacion", get_field('titulo_informacion'));
set_query_var("pagina_informacion", get_field('pagina_informacion'));


//Equipo de expertos
set_query_var("titulo_equipo_expertos", get_field('titulo_equipo_expertos'));
set_query_var("descripcion_equipo_de_expertos", get_field('descripcion_equipo_de_expertos'));
set_query_var("enlace_equipo_de_expertos", get_field('enlace_equipo_de_expertos'));
set_query_var("imagen_equipo_de_expertos", get_field('imagen_equipo_de_expertos'));


//Donde estamos
set_query_var("titulo_donde_estamos", get_field('titulo_donde_estamos'));
set_query_var("descripcion_donde_estamos", get_field('descripcion_donde_estamos'));
set_query_var("imagen_donde_estamos", get_field('imagen_donde_estamos'));
set_query_var("titulo_derecha_donde_estamos", get_field('titulo_derecha_donde_estamos'));
set_query_var("descripcion_derecha_donde_estamos", get_field('descripcion_derecha_donde_estamos'));




 ?>
<!-- Cabecera ok-->
<?php get_template_part('componentes/nosotros/comp','cabecera');?>


<!-- Quienes somos -->
<?php get_template_part('componentes/nosotros/comp','somos');?>


<!-- Quienes impulsa ok-->
<?php get_template_part('componentes/nosotros/comp','impulsa');?>

<!-- Quienes experiencia Contadores ok -->
<?php get_template_part('componentes/nosotros/comp','experiencia');?>

<!-- Quienes Premios slider ok-->
<?php get_template_part('componentes/nosotros/comp','premioslider');?>

<!-- Quienes donde estamos ok-->
<?php get_template_part('componentes/nosotros/comp','dondeestamos');?>

<!-- Quienes equipo ok-->
<?php get_template_part('componentes/nosotros/comp','equipo');?>

<!-- Quienes opiniones OK -->
<?php get_template_part('componentes/generales/comp','opiniones');?>

<!-- Contactanos -->
<?php get_template_part('componentes/nosotros/comp','contactanos');?>

<!-- Newsletter ok-->
<?php get_template_part('componentes/generales/comp','newsletter');?>

<!-- Quienes historia ok-->
<?php get_template_part('componentes/nosotros/comp','historia');?>

<!-- Quienes media kit ok-->
<?php get_template_part('componentes/nosotros/comp','mediakit');?>





   <?php get_footer(); ?>