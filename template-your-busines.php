<?php /* Template Name: Your Business */ ?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="content_page">

<?php get_template_part('partials/hero'); ?>

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

<section class="content_page__reasons">

	<div class="container">
		<div class="content_page__reasons__img">
		<img src="<?php echo bloginfo('template_url'); ?>/assets/images/reasons-left.jpg">
		</div>
		<div class="content_page__reasons__bars">
			<h2>Reasons Clients Turn to Us</h2>
			<a class="show_me">Show Me</a>
			<div class="content_page__reasons__bars__items">
				<div class="bar">
					<p>They’re frustrated dealing with the same old problems</p>
					<div class="tell_me"><a>Tell Me More</a></div>
					<div class="bar_bg"><div class="bar_fg off" style="left:-35%;"></div>
				</div>
				<div class="bar">
					<p>They’re tired of worrying about every month’s sales results</p>
					<div class="tell_me"><a>Tell Me More</a></div>
					<div class="bar_bg"><div class="bar_fg off" style="left:-20%;"></div>
				</div>
				<div class="bar">
					<p>They’re under pressure to improve profits but not making progress</p>
					<div class="tell_me"><a>Tell Me More</a></div>
					<div class="bar_bg"><div class="bar_fg off" style="left:-25%;"></div>
				</div>
				<div class="bar">
					<p>They’re struggling to improve business-development results</p>
					<div class="tell_me"><a>Tell Me More</a></div>
					<div class="bar_bg"><div class="bar_fg off" style="left:-30%;"></div>
				</div>
				<div class="bar">
					<p>They’re not finding a way forward in improving plant results</p>
					<div class="tell_me"><a>Tell Me More</a></div>
					<div class="bar_bg"><div class="bar_fg off" style="left:-25%;"></div>
				</div>
				<div class="bar">
					<p>They’re tired of living with small profits and big pressure</p>
					<div class="tell_me"><a>Tell Me More</a></div>
					<div class="bar_bg"><div class="bar_fg off" style="left:-20%;"></div>
				</div>
				<div class="bar">
					<p>They’re searching for ways to connect with customers/prospects</p>
					<div class="tell_me"><a>Tell Me More</a></div>
					<div class="bar_bg"><div class="bar_fg off" style="left:-30%;"></div>
				</div>
				<div class="bar">
					<p>They need help focusing on what’s truly important</p>
					<div class="tell_me"><a>Tell Me More</a></div>
					<div class="bar_bg"><div class="bar_fg off" style="left:-35%;"></div>
				</div>
			</div>
		</div>
	</div>

</section>


</div>



<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>