<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php if (strlen(get_the_post_thumbnail_url()) > 0 ):  ?>
	
	<div class="single-header" data-aos="fade-down" style="
	background: url('<?php the_post_thumbnail_url() ?>')
	">
	</div>

	<?php else: ?>

	<div class="single-header" data-aos="fade-down">
	</div>

	<?php endif ?>

	<div class="single-wrapper" data-aos="fade-up">

		<div class="single-wrapper-content">
			<div class="category">
				<?php the_category( '', '', false ); ?>
			</div>

			<div class="title">
				<i class="fa fa-chevron-right" aria-hidden="true"></i>
				<?php the_title( '', '', true ); ?>
			</div>

			<div class="info">
				<div class="author item">
					<i class="fa fa-user" aria-hidden="true"></i>
					<?php the_author(); ?>
				</div>

				<div class="date item">
					<i class="fa fa-calendar" aria-hidden="true"></i>
					<?php the_date(); ?>
				</div>
			</div>

			<?php the_content(); ?>
		</div>

		
		<?php get_sidebar(); ?>

	<?php endwhile; ?>
</div>
<?php endif; ?>
<?php get_footer(); ?>