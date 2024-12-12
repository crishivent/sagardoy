<?php
/**
 * Header
 *
 * Contiene apertura body y apartura y cierre header
 */

$favicon = get_field('favicon', 'option');

?>
<!DOCTYPE html>


<html class="no-js" lang="<?php echo $lang; ?>">

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link rel="icon" type="image/png" href="<?php echo $favicon; ?>" sizes="32x32">
		<link rel="icon" type="image/png" href="<?php echo $favicon; ?>" sizes="16x16">
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
      <?php get_template_part('componentes/generales/comp','menu'); ?>