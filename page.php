<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php if ( is_front_page() ) : ?>

		<?php get_template_part( 'content', 'home' ); ?>

	<?php else : ?>

		<?php get_template_part( 'content', 'page' ); ?>

	<?php endif; ?>

<?php endwhile; endif; // end loop ?>

<?php get_footer(); ?>
