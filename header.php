<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, inital-scale=1.0">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>
<body>
	<header class="w3-container w3-teal">
	  	<div class="w3-row">
		  <div class="w3-col m9 l9">
		    <h1><?php bloginfo('name'); ?></h1>
		  </div>
		  <div class="w3-col m3 l3">
		    <form method="get" action="<?php esc_url(home_url('/')); ?>">
		    	<input type="text" name="s" class="w3-input" placeholder="Search...">
		    </form>
		  </div>
		</div>
	</header>


	<div class="w3-row">
		<div class="w3-col m3 l3">
			<?php if(is_active_sidebar('categories')): ?>
				<?php dynamic_sidebar('categories'); ?>
			<?php endif; ?>
		</div>

		<div class="w3-col m9 l9">