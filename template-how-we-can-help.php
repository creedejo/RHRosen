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




</div>



<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>