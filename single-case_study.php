<?php /* Template Name: Resources */ ?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="content_page case_study">

<?php get_template_part('partials/hero'); ?>

<section class="case_study__categories">
	<div class="container">
		<ul>
			<li><a href="#" class="active">All Case Studies</a></li>
			<li><a href="#">Profit Improvement</a></li>
			<li><a href="#">Sales &amp; Marketing</a></li>
			<li><a href="#">Exploring Alternatives</a></li>
			<li><a href="#">Mergers &amp; Acquisitions</a></li>
		</ul>
	</div>
</section>

<section class="case_study__intro">
	<div class="container">
		<div class="case_study__intro__title" style="background-image: url('<?= get_the_post_thumbnail_url(); ?>');">
			<div class="overlay"></div>
			<h1><?php the_title(); ?></h1>
		</div>
		<div class="case_study__intro__text">
			<?= get_field('intro_text') ?>
		</div>
	</div>
</section>


<section class="case_study__content content">
	<div class="container">
		<?php the_content() ?>
	</div>
</section>


</div>



<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>