<?php /* Template Name: How We Can Help */ ?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="content_page">

<?php get_template_part('partials/hero'); ?>

<section class="content_page__intro">
	<div class="container">
		<h3>Doing more of the same just won’t work any more.</h3>
		<h2>Let’s get results – soon!</h2>
		<h3>It’s not rocket science, and don’t let anyone tell you it is.</h3>
	</div>
</section>

<section class="content_page__numbered">

<div class="container">
	<div class="content_page__numbered__box">
		<span class="num">1.</span>
		<h2>Complicated solutions aren’t required.</h2>
		<p>You already know your business and what it needs. You just need to focus on the right things – things that are easy to understand, and easy to do. </p>
	</div>
	<div class="content_page__numbered__box">
		<span class="num">2.</span>
		<h2>Step by step. That’s the plan. </h2>
		<p>There’s no need for a lengthy timeline. You have lots of important changes to make, and you can get started as soon as you’ve chosen your priorities.</p>
	</div>
	<div class="content_page__numbered__box">
		<span class="num">3.</span>
		<h2>Don’t be patient about seeing results.</h2>
		<p>Small changes add up, and you’ll see progress quickly – in weeks and months, not years. You’ll need persistence, but you won’t need much patience.</p>
	</div>
</div>

</section>


<section class="content_page__posts">

	<div class="container">

	<?php

	$args = array(
		'post_type'=>'hwch',
		'posts_per_page'=>6
		);

	$hwch = new WP_Query($args);

	if($hwch->have_posts()):
		while ( $hwch->have_posts() ) : $hwch->the_post();
	?>
		<div class="content_page__posts__post">
			<h2><?php the_title(); ?></h2>
			<h4><?= get_field('subtitle') ?></h4>
			<div class="img" style="background-image:url('<?= get_the_post_thumbnail_url() ?>')"></div>
			<?php the_excerpt(); ?>
			<a class="read_more">Read More</a>
		</div>

	<?php
		endwhile;
		wp_reset_postdata();
	endif;
	?>

	</div>

</section>


<section class="content_page__carousel">
	<div class="container">
	<div class="home__quotes__bg"></div>
	<?php putRevSlider( 'quotes' ); ?>
	</div>
</section>




</div>



<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>