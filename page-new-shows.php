<?php
/*
	Template name: New shows
*/
?>

<?php get_header(); ?>

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

		<?php
			$i = 0;
			$args = array(
				'post_type' => 'pp_show',
				'orderby' => 'title',
				'order' => 'ASC',
				'tax_query'	=> array(
			        array(
			            'taxonomy'  => 'show_category',
			            'field'     => 'slug',
			            'terms'     => 'new-show-2015',
			            'operator'  => 'IN'
		            ),
			        array(
			            'taxonomy'  => 'show_category',
			            'field'     => 'slug',
			            'terms'     => 'tba',
			            'operator'  => 'NOT IN'
		            )
			    ) );
			$tvlist = new WP_Query( $args );
			$showCount = $tvlist->post_count;
		?>

		<section class="new-shows new-show-list">
			<div class="wrap">
				<?php while ( $tvlist->have_posts() ) : $tvlist->the_post(); ?>
					<div class="col span4">
						<article class="show">
							<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="icon">
							<h3><?php the_title(); ?></h3>
							<p><?php echo date('l, M. d',strtotime( get_post_meta($post->ID, 'show_premiere', true) )) ?> | <?php echo get_post_meta($post->ID, 'show_time', true); ?> | <?php echo get_post_meta($post->ID, 'show_network', true); ?></p>
							<?php the_content(); ?>
						</article>
					</div>
					<?php
						if ( $i != 0 && $i % 2 != 0 ) {
							if ( $i != ($showCount - 1) ) {
								echo '</div>';
								echo '<div class="wrap">';
							}
						}
					?>
				<?php $i++; endwhile; ?>
			</div>
		</section>

	</div>
</section>

<?php get_footer(); ?>