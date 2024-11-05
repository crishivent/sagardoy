<?php
/**
 * Header
 *
 * Contiene apertura body y apartura y cierre header
 */

?>
<!DOCTYPE html>


<html class="no-js" lang="<?php echo $lang; ?>">

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
      <?php //get_template_part('componentes/globales/comp','menu'); ?>