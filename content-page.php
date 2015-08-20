<section id="page-content">
	<div class="page-wrap">

		<section id="page-title" class="wrap">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/calendar.svg" alt="Calendar" class="title-icon">
			<section class="title">
				<h1><?php the_title(); ?></h1>
				<?php if(get_field('subtitle')) :?>
					<span class="subtitle"><?php the_field('subtitle'); ?></span>
				<?php endif; ?>
			</section>
		</section>

		<?php the_content(); ?>

	</div>
</section>