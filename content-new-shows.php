<div class="wrap nomargin-cols">
	<div class="col span4">
		<h2>This season's new shows</h2>
		<p class="subtitle">Find your new favorite show</p>
	</div>
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
		            'terms'     => 'new-show-2015'
	            )
		    ) );
		$tvlist = new WP_Query( $args );
	?>

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
			if ( $i != 0 && $i % 2 == 0 ) {
				echo '</div>';
				echo '<div class="wrap nomargin-cols">';
			}
		?>
	<?php $i++; endwhile; ?>
</div>