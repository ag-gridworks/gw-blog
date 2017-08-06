<div data-aos="fade-up" data-aos-offset="200" class="__item item-full" onclick="location.href='<?php the_permalink() ?>'">
	<div class="thumb thumb-full" style="background: url('<?php the_post_thumbnail_url() ?>');">
	</div>
	
	<div class="content">
		<div class="category">
			<i class="fa fa-tags" aria-hidden="true"></i> <?php the_category( '', '', false ); ?>
		</div>
		<div class="title item">
			<?php the_title(); ?>
		</div>
		<div class="text item">
			<?php the_excerpt() ?>
		</div>
		<div class="footer">
			<div class="author item">
				<img src="http://localhost/blog/wp-content/uploads/2017/08/da18f942a44319ccaaac96842e7b34af.700x700x1.png" alt="">
				<b>Por:</b> <?php the_author(); ?> |
			</div>
			<div class="date item">
				<i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_date(); ?>
			</div>
		</div>
	</div>
</div>