<?php /* Template Name: Resources */ ?>
<?php get_header(); ?>



<div class="content_page">

<?php get_template_part('partials/hero'); ?>

<section id="case_studies" class="content_page__boxes archive">
	<div class="container">
		<?php get_template_part('partials/cs_categories'); ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="content_page__boxes__box">
			<div class="img">
				<img src="<?= get_the_post_thumbnail_url() ?>">
			</div>
			<h3><?php the_title(); ?></h3>
			<?= get_field('intro_text') ?>
			<div class="cta">
				<a href="<?php the_permalink(); ?>" class="read_more">Read More</a>
			</div>
		</div>


		<?php endwhile; ?>
		<?php endif; ?>
		
	</div>
</section>



</div>





<?php get_footer(); ?>