<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="carousel">
	<?php putRevSlider( 'home' ); ?>
</div>

<section class="home__path">
	<div class="container">
		<h3>Your company is unique.</h3>
		<h2>We’ll help you find the right path forward for your company.</h2>
		<p>Since 1987, we’ve advised the CEOs of over 600 graphic arts companies. We know the world of graphic arts and we know how graphic arts companies work. Let us be your partner in making progress.</p>

		<div class="home__path__steps">
			<div class="step">
				<div class="icon eye"></div>
				<h2>Seeing All Your Opportunities</h2>
				<p>We have a proven way of helping you to see your best opportunities – reframing your views so you can see where you <b>really</b> are. </p>
				<a href="seeing-all-your-opportunities/" class="read_more" data-lity>Read More</a>
			</div>
			<div class="step">
				<div class="icon check"></div>
				<h2>Setting the Right Priorities</h2>
				<p>We’ll help you focus on things that <b>really</b> make a difference, so you don’t waste time on unimportant issues or theoretical thinking.</p>
				<a href="setting-the-right-priorities/" class="read_more" data-lity>Read More</a>
			</div>
			<div class="step">
				<div class="icon chart"></div>
				<h2>Making Progress Now</h2>
				<p>We’ll help you choose the right path, so you can begin making progress right away – this week, this month, this year. </p>
				<a href="making-progress-now/" class="read_more" data-lity>Read More</a>
			</div>
		</div>

	</div>
</section>

<section id="stats" class="home__stats">
	<div class="container">
		<div class="stat">
			<span class="count" data-start="0" data-end="643">HELLO</span>
			<span class="label">Companies</span>	
		</div>
		<div class="stat">
			<span class="count" data-start="800" data-end="1421">1,421</span>
			<span class="label">Projects</span>	
		</div>
		<div class="stat">
			<span class="count" data-start="0" data-end="54">54</span>
			<span class="label">Transactions</span>	
		</div>
	</div>
</section>

<section class="home__quotes">
	<div class="container">
	<div class="home__quotes__bg"></div>
	<?php putRevSlider( 'quotes' ); ?>
	</div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>