<?php
/*
	Template name: All premieres
*/
?>

<?php get_header(); ?>

<section id="page-content">
	<div class="page-wrap">

		<section id="page-title" class="wrap">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/calendar.svg" alt="Calendar" class="title-icon">
			<section class="title">
				<h1>All Premieres</h1>
				<span class="subtitle">View all the premieres for this season</span>
			</section>
		</section>

		<?php the_content(); ?>

		<?php 
			$sortOption = $_GET['sort_option'];
			if(!$sortOption) {
				$sortOption = 'meta_value';
			}
		?>

		<section class="sort">
			<a href="/all-premieres/?sort_option=meta_value" class="button<?php if($sortOption=='meta_value'){echo ' active';} ?>">Sort by date</a> 
			<a href="/all-premieres/?sort_option=title" class="button<?php if($sortOption == 'title'){echo ' active';} ?>">Sort by title</a>
		</section>

		<?php

			$args = array( 
				'post_type' => 'pp_show',
				'meta_key' => 'show_sort',
				'orderby' => $sortOption,
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
				<article class="show">
					<p class="date"><?php echo date('l, M. d',strtotime( get_post_meta($post->ID, 'show_premiere', true) )) ?></p>
					<h3 class="show-title"><?php the_title(); ?></h3> <p class="show-info"><?php echo get_post_meta($post->ID, 'show_time', true); ?> | <?php echo get_post_meta($post->ID, 'show_network', true); ?></p>
				</article>
			<?php endwhile; ?>
		</section>

	</div>
</section>

<?php get_footer(); ?>