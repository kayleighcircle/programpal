<?php
/*
	Template name: Upcoming
*/
?>

<?php get_header(); ?>

<section id="page-content">
	<div class="page-wrap">

		<section id="page-title" class="wrap">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/calendar.svg" alt="Calendar" class="title-icon">
			<section class="title">
				<h1>Upcoming Premieres</h1>
				<span class="subtitle">View the premieres for the next two weeks</span>
			</section>
		</section>

		<?php the_content(); ?>

		<?php 
			$i = 0;
			$today = date('Y-m-d', strtotime('last week sunday'));
			$nextweek = date('Y-m-d', strtotime('next week sunday'));
			$args = array( 
				'post_type' => 'pp_show',
				// 'orderby' => 'title',
				'meta_key' => 'show_sort',
				'orderby' => 'meta_value',
				'order' => 'ASC',
				'tax_query'	=> array(
			        array(
			            'taxonomy'  => 'show_category',
			            'field'     => 'slug',
			            'terms'     => 'tba',
			            'operator'  => 'NOT IN'
		            )
			    ) );
			$tvlist = new WP_Query( $args );
		?>

		<section class="premiere-list">
			<?php while ( $tvlist->have_posts() ) : $tvlist->the_post(); ?>
				<?php if ( get_post_meta($post->ID, 'show_sort', true) >= $today && get_post_meta($post->ID, 'show_sort', true) <= $nextweek ) : ?>
					<article class="show">
						<p class="date"><?php echo date('l, M. d',strtotime( get_post_meta($post->ID, 'show_premiere', true) )) ?></p>
						<h3 class="show-title"><?php the_title(); ?></h3> <p class="show-info"><?php echo get_post_meta($post->ID, 'show_time', true); ?> | <?php echo get_post_meta($post->ID, 'show_network', true); ?></p>
					</article>
				<?php $i++; endif; ?>
			<?php endwhile; ?>

			<?php if ($i == 0) : ?>
					<p><i>No upcoming premieres</i></p>
			<?php endif; ?>
		</section>

	</div>
</section>

<?php get_footer(); ?>