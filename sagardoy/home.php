<?php 
get_header();

?>


<?php 
get_footer();


// Cabecera
set_query_var("titulo_home", get_field('titulo_home'));
set_query_var("subtitulo_home", get_field('subtitulo_home'));
set_query_var("imagen_fondo_home", get_field('imagen_fondo_home'));

// Selectores
set_query_var("titulo_selectores", get_field('titulo_selectores'));
set_query_var("titulo_enlace_1", get_field('titulo_enlace_1'));
set_query_var("enlace_1", get_field('enlace_1'));
set_query_var("titulo_enlace_2", get_field('titulo_enlace_2'));
set_query_var("enlace_2", get_field('enlace_2'));


// Premios
set_query_var("titulo_premios", get_field('titulo_premios'));
set_query_var("premios", get_field('premios'));


// Impulsa
set_query_var("imagen_impulsa", get_field('imagen_impulsa'));
set_query_var("titulo_impulsa", get_field('titulo_impulsa'));
set_query_var("subtitulo_impulsa", get_field('subtitulo_impulsa'));
set_query_var("enlace_impulsa", get_field('enlace_impulsa'));
set_query_var("link_impulsa", get_field('link_impulsa'));


//Necesitas información
set_query_var("imagen_informacion", get_field('imagen_informacion'));
set_query_var("titulo_informacion", get_field('titulo_informacion'));
set_query_var("pagina_informacion", get_field('pagina_informacion'));


//Donde estamos
set_query_var("titulo_donde_estamos", get_field('titulo_donde_estamos'));
set_query_var("descripcion_donde_estamos", get_field('descripcion_donde_estamos'));
set_query_var("imagen_donde_estamos", get_field('imagen_donde_estamos'));
set_query_var("titulo_derecha_donde_estamos", get_field('titulo_derecha_donde_estamos'));
set_query_var("descripcion_derecha_donde_estamos", get_field('descripcion_derecha_donde_estamos'));


?>

<!-- Cabecera Ok-->
<?php get_template_part('componentes/home/comp','cabecera');?>


<!-- Selectores Ok-->
<?php get_template_part('componentes/home/comp','selectores');?>



<!-- Slider Premios Ok-->
<?php get_template_part('componentes/home/comp','premios');?>



<!-- Quienes experiencia Contadores ok -->
<?php get_template_part('componentes/nosotros/comp','experiencia');?>




<!-- Últimas noticias Ok-->
<?php get_template_part('componentes/home/comp','ultimasnoticias');?>



<!-- Publicaciones destacadas Ok-->
<?php get_template_part('componentes/home/comp','destacados');?>


<!-- Quienes donde estamos ok-->
<?php get_template_part('componentes/nosotros/comp','dondeestamos');?>


<!-- Impulsa tu carrera Ok-->
<?php get_template_part('componentes/home/comp','impulsa');?>


  <!-- Opiniones Ok-->
<?php get_template_part('componentes/generales/comp','opiniones');?>


<!-- Contactanos Ok-->
<?php get_template_part('componentes/nosotros/comp','contactanos');?>


<!-- Newsletter Ok-->
<?php get_template_part('componentes/generales/comp','newsletter');?>