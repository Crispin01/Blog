<?php get_header();?>
		<section>
			<div class="container">
				<h4><?php the_title(); ?></h4>
				
					<center><div class="imagen">
		 			<?php the_post_thumbnail("thumbnail"); ?>
					</div></center>
				<?php the_content(); ?>
			
			</div>

		</section>
<?php get_footer();?>