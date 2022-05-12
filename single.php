<?php get_header();?>
		<section>
			<div class="container">
				<h6><?php the_field('resumen');?></h6>
				
					<center><div class="imagen">
		 			<?php the_post_thumbnail("largue"); ?>
					</div></center>
				<h4><?php the_title(); ?></h4>

				<?php the_content(); ?>
			
				<h6>Fuente: <?php the_field('fuente');?></h6>
			</div>

		</section>
<?php get_footer();?>