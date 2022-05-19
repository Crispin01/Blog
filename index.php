<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PERRITO</title>

	<?php wp_head();?>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/estilos.css">


</head>	
<body>
	<div class="container">
		<img src="<?php bloginfo('template_url'); ?>/logo.jpg" width="90" class="logo">
	</div>
	<header class="container-flip">
		<center>
			<h1> <?php bloginfo('name');?>	</h1>
		<img src="<?php bloginfo('template_url'); ?>/mini.png" width="700" height="350">
	</header>
		<nav>
			<ul>
				<button>
				<li class="menu"><a href="#">Cuidados</a></li>
				<li class="menu"><a href="#">Razas</a></a></li>
				<li class="menu"><a href="#">Fotos</a></li>
				<li class="menu"><a href="#">Adopte</a></li>
				</button>
			</ul>
		</nav>	
		</center>

	<section class="container">

		<?php $articulos = new WP_Query([
			'showposts' => 3,
			'post_type' => 'empleos'
		]);
		while ($articulos->have_posts()) {
				$articulos->the_post(); ?>
		


		<div class="row caja">
			<div class="col-sm-3 imagen">
		 		<?php the_post_thumbnail("thumbnail"); ?>
			</div>  

			<div class="col-sm-9">	
		 		<h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
		 		<p>Publicado por <?php the_author();?> el <?php the_time("d/m/Y");?></p>
		 		<?php the_excerpt(); ?>
			</div>
		</div>		





		<?php } ?>



		<img src="<?php bloginfo('template_url'); ?>/mini1.jpg" width="400" class="foto">

		<h4><a href="">
		Perro perdido de la Molina</h4></a>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		<img src="<?php bloginfo('template_url'); ?>/mini2.jpg" width="400" class="foto">

		<h5><a href="">
		Perro con Sed</h5></a>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		<img src="<?php bloginfo('template_url'); ?>/mini3.jpg" width="400" class="foto">

		<h6><a href="">
		Pareja de perros</h6></a>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</section>

	<footer class="container-flip">
		<ul class="final">
			<li><a href="*">SOBRE NOSOTROS</a></li>
			<li><a href="*">GUIA</a></li>
			<li><a href="*">LIBRO DE RECLAMOS</a></li>
		</ul>
	</footer>

	<?php wp_footer();?>

</body>
</html>