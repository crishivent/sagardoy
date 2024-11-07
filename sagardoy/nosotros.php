
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




 ?>
<!-- Cabecera -->
<?php get_template_part('componentes/nosotros/comp','cabecera');?>


<!-- Quienes somos -->
<?php get_template_part('componentes/nosotros/comp','somos');?>


<!-- Quienes impulsa -->
<?php get_template_part('componentes/nosotros/comp','impulsa');?>

<!-- Quienes experiencia Contadores ok -->
<?php get_template_part('componentes/nosotros/comp','experiencia');?>

<!-- Quienes Premios slider -->
<?php get_template_part('componentes/nosotros/comp','premioslider');?>

<!-- Quienes donde estamos -->
<?php get_template_part('componentes/nosotros/comp','dondeestamos');?>

<!-- Quienes equipo -->
<?php get_template_part('componentes/nosotros/comp','equipo');?>

<!-- Quienes opiniones OK -->
<?php get_template_part('componentes/generales/comp','opiniones');?>

<!-- Contactanos -->
<?php get_template_part('componentes/generales/comp','contactanos');?>

<!-- Newsletter -->
<?php get_template_part('componentes/generales/comp','newsletter');?>

<!-- Quienes historia -->
<?php get_template_part('componentes/nosotros/comp','historia');?>

<!-- Quienes media kit -->
<?php get_template_part('componentes/nosotros/comp','mediakit');?>





   <?php get_footer(); ?>