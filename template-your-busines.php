<?php /* Template Name: Your Business */ ?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="content_page">

<section class="hero" style="background-image:url('<?= get_the_post_thumbnail_url() ?>');">
	<div class="container">
		<div class="hero__title">Your Business</div>
	</div>
</section>

<section class="content_page__intro">
	<div class="container">
		<h3>Just when you thought things were going to get easier,</h3>
		<h2>You’re facing some big decisions!</h2>
		<h3>It’s time to be profitable and build a future at the same time.</h3>
	</div>
</section>

<section class="content_page__boxes">
	<div class="container">
		<div class="content_page__boxes__box">
			<div class="img">
				<img src="<?php echo bloginfo('template_url'); ?>/assets/images/boxes/surviving.png">
			</div>
			<h2>Surviving in a Changing Industry</h2>
			<p>The industry is changing in a fundamental way, and it’s not changing back! So don’t blame the internet or stupid competitors.</p>
			<div class="cta">
				<a href="surviving-in-a-changing-industry/" class="read_more" data-lity>Read More</a>
			</div>
		</div>
		<div class="content_page__boxes__box">
			<div class="img">
				<img src="<?php echo bloginfo('template_url'); ?>/assets/images/boxes/adapting.png">
			</div>
			<h2>Adapting Your Approach</h2>
			<p>You’re not seeking some cosmic secret. Just choose the right things to focus on, and be careful who you listen to.</p>
			<div class="cta">
				<a href="adapting-your-approach/" class="read_more" data-lity>Read More</a>
			</div>
		</div>
		<div class="content_page__boxes__box">
			<div class="img">
				<img src="<?php echo bloginfo('template_url'); ?>/assets/images/boxes/some-things.png">
			</div>
			<h2>Some Things Haven’t Changed</h2>
			<p>Profit-leading CEOs don’t have any unique secrets. They’re just doing a better job of focusing on what really matters.</p>
			<div class="cta">
				<a href="some-things-havent-changed" class="read_more" data-lity>Read More</a>
			</div>
		</div>
	</div>
</section>


</div>



<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>