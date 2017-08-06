<?php 
$args = array(
'post_type' => 'post',
'posts_per_page' => 4
);
?>

<?php $the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>
	<div class="area center">
		<h3 class="go-title light">Em Destaque</h3>
	</div>

	<div class="go-blocks go-featured">
		<div class="owl-carousel owl-featured featured-blocks">

	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			
			<div  onclick="location.href='<?php the_permalink() ?>'" class="item" style="background: url('<?php the_post_thumbnail_url() ?>');">
				
				<div class="inner">
					<div class="category">
						<i class="fa fa-tags" aria-hidden="true"></i> <?php the_category(); ?>
					</div>
					<div class="title">
						<?php the_title(); ?>
					</div>
					<div class="text hide">
						<?php echo get_the_excerpt(); ?>
					</div>
					<div class="footer">
						<div class="author footer-item">
							
							<i class="fa fa-user" aria-hidden="true"></i> <b>Por:</b> <?php the_author(); ?> |
						</div>
						<div class="date footer-item">
							<i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_date(); ?>
						</div>
					</div>
				</div>
				
			</div>
	<?php endwhile; ?>

		</div>
	</div>

<?php endif; ?>