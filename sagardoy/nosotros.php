
<?php
/*
Template Name: Página Nosotros
*/

get_header();

//Cabecera
$fondocabecera = get_field('fondo_de_cabecera');
$titulo = get_field('nosotros_titulo');
$subtitulo = get_field('nosotros_subtitulo');

//Quienes Somos
$tituloquienes = get_field('titular_quienes_somos');
$puntosclave = get_field('puntos_clave');
$enlacebtn = get_field('boton_servicios');

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






 ?>
<!-- Cabecera -->
<?php get_template_part('componentes/nosotros/comp','cabecera');?>


<!-- Quienes somos -->
<?php get_template_part('componentes/nosotros/comp','somos');?>


<!-- Quienes impulsa ok-->
<?php get_template_part('componentes/nosotros/comp','impulsa');?>

<!-- Quienes experiencia Contadores ok -->
<?php get_template_part('componentes/nosotros/comp','experiencia');?>

<!-- Quienes Premios slider ok-->
<?php get_template_part('componentes/nosotros/comp','premioslider');?>

<!-- Quienes donde estamos -->
<?php get_template_part('componentes/nosotros/comp','dondeestamos');?>

<!-- Quienes equipo -->
<?php get_template_part('componentes/nosotros/comp','equipo');?>

<!-- Quienes opiniones OK -->
<?php get_template_part('componentes/generales/comp','opiniones');?>

<!-- Contactanos -->
<?php get_template_part('componentes/generales/comp','contactanos');?>

<!-- Newsletter ok-->
<?php get_template_part('componentes/generales/comp','newsletter');?>

<!-- Quienes historia ok-->
<?php get_template_part('componentes/nosotros/comp','historia');?>

<!-- Quienes media kit ok-->
<?php get_template_part('componentes/nosotros/comp','mediakit');?>





   <?php get_footer(); ?>