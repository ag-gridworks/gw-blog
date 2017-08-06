<?php 

if ( have_posts() ) : the_post();

	if ( get_query_var('paged') ) {
		$paged = get_query_var('paged');
	} elseif ( get_query_var('page') ) {
		$paged = get_query_var('page');
	} else {
	   $paged = 1;
	}

	$args = array(
	'post_type' => 'post',
	'posts_per_page' => 5,
	'paged' => $paged
	);
?>

<?php $the_query = new WP_Query( $args ); ?>

	<?php if ( $the_query->have_posts() ) : ?>

		<div class="area center">
			<h3 class="go-title">Úlitmas Postagens</h3>
		</div>

		<div class="go-blocks-full">

		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>	
		
			<?php get_template_part( 'partials/part', 'post' ); ?>

		<?php endwhile; ?>
			<nav class="pagination col-xs-12 text-center">
				<?php
					$big = 999999999;
						echo paginate_links( array(
							'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format' => '?paged=%#%',
							'current' => max( 1, $paged ),
							'total' => $the_query->max_num_pages,
							'next_text' => '<i class="fa fa-chevron-right" aria-hidden="true"></i>',
							'prev_text' => '<i class="fa fa-chevron-left" aria-hidden="true"></i>'
						) );
				?>	
			</nav>
		</div>

	<?php endif; ?>

<?php endif; ?>

<div class="clear"></div>