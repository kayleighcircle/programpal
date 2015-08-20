
<section id="page-content">

		<section id="feature-header">
			<div class="page-wrap">
				<?php the_content(); ?>
			</div>
		</section>

		<section class="premiere-list">
			<div class="page-wrap">
				<div class="col span3 text-right">
					<h2>This week's premieres</h2>
					<p class="subtitle">Set your DVR to record</p>
					<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/calendar.png" alt="Calendar"></p>
				</div>
				<div class="col span5">
					
					<!-- Start this week's premieres -->
					<?php 
						$i = 0;
						$today = date('Y-m-d', strtotime('last week sunday'));
						$nextweek = date('Y-m-d', strtotime('this week sunday'));
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
						// Order by date: $args = array( 'post_type' => 'pp_show', 'meta_key' => 'show_sort', 'orderby' => 'meta_value', 'order' => 'ASC' );
						// Hide past shows: 'meta_compare' => '>=', 'meta_value' => $today
						$tvlist = new WP_Query( $args );
					?>

					<?php while ( $tvlist->have_posts() ) : $tvlist->the_post(); ?>
						<?php if ( get_post_meta($post->ID, 'show_sort', true) >= $today && get_post_meta($post->ID, 'show_sort', true) <= $nextweek ) : ?>
							<article class="show">
								<p class="date"><?php echo date('l, M. d',strtotime( get_post_meta($post->ID, 'show_premiere', true) )) ?></p>
								<h3 class="show-title"><?php the_title(); ?></h3> <p class="show-info"><?php echo get_post_meta($post->ID, 'show_time', true); ?> | <?php echo get_post_meta($post->ID, 'show_network', true); ?></p>
							</article>
						<?php $i++; endif; ?>
					<?php endwhile; ?>

					<?php if ($i == 0) : ?>
							<p><i>No premieres this week</i></p>
					<?php endif; ?>
					<!-- End this week's premieres -->

					<p><a href="<?php echo get_bloginfo('url') ?>/all-premieres" class="button">View all</a></p>
				</div>
			</div>
		</section>

		<section class="new-shows text-center">
			<div class="page-wrap">
				
				<?php get_template_part( 'content', 'new-shows' ); ?>

				<p><a href="/new-shows" class="button">View all</a></p>

			</div>
		</section>

	</section>
