<?php
/*
	Template name: Midseason
*/
?>

<?php get_header(); ?>

<section id="page-content">
	<div class="page-wrap">

		<section id="page-title" class="wrap">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/calendar.svg" alt="Calendar" class="title-icon">
			<section class="title">
				<h1>Midseason Premieres</h1>
				<span class="subtitle">View all midseason premieres</span>
			</section>
		</section>

		<?php the_content(); ?>

		<?php
			$i = 0;
			$args = array( 
				'post_type' => 'pp_show',
				'meta_key' => 'show_sort',
				'orderby' => 'title',
				'order' => 'ASC',
				'tax_query'	=> array(
			        array(
			            'taxonomy'  => 'show_category',
			            'field'     => 'slug',
			            'terms'     => 'midseason',
			            'operator'  => 'IN'
		            )
			    ) );
			$tvlist = new WP_Query( $args );
		?>

		<section class="premiere-list">
			<?php while ( $tvlist->have_posts() ) : $tvlist->the_post(); ?>
				<article class="show">
					<p class="date"><?php echo date('l, M. d',strtotime( get_post_meta($post->ID, 'show_premiere', true) )) ?></p>
					<h3 class="show-title"><?php the_title(); ?></h3> <p class="show-info"><?php echo get_post_meta($post->ID, 'show_time', true); ?> | <?php echo get_post_meta($post->ID, 'show_network', true); ?></p>
				</article>
			<?php $i++; endwhile; ?>
			<?php if ($i == 0) : ?>
				<p><i>No midseason premieres</i></p>
			<?php endif; ?>
		</section>

	</div>
</section>

<?php get_footer(); ?>