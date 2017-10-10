<?php /* Template Name: Blog */ ?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="content_page content_blog">

<?php get_template_part('partials/hero'); ?>

<section id="the_blog" class="content_page__boxes">
	<div class="container">
		<div class="blog_filters">
			<div class="blog_filters__filters">
				<ul>
					<li><a href="#" class="active">All Blog Posts</a></li>
					<li><a href="#">Profit Improvement</a></li>
					<li><a href="#">Sales &amp; Marketing</a></li>
					<li><a href="#">Exploring Alternatives</a></li>
					<li><a href="#">Mergers &amp; Acquisitions</a></li>
				</ul>
			</div>
			<div class="blog_filters__search">
				<form class="search_form">
					<input type="text" id="search" name="search" placeholder="Search">
					<button><i class="el el-search"></i></button>
				</form>
			</div>
		</div>
		<a href="#" class="content_page__boxes__box">
			<div class="img">
				<img src="<?php echo bloginfo('template_url'); ?>/assets/images/resources/bl_1.png">
			</div>
			<h3>Don’t Give Away Productivity Gains</h3>
			<p>The industry is changing in a fundamental way, and it’s not changing back! So don’t blame the internet or stupid competitors.</p>
			<div class="cta">
				<span class="read_more">Read More</span>
			</div>
		</a>
		<a href="#" class="content_page__boxes__box">
			<div class="img">
				<img src="<?php echo bloginfo('template_url'); ?>/assets/images/resources/bl_2.png">
			</div>
			<h3>Just Say "YES" to that Extra Job</h3>
			<p>You’re not seeking some cosmic secret. Just choose the right things to focus on, and be careful who you listen to.</p>
			<div class="cta">
				<span class="read_more">Read More</span>
			</div>
		</a>
		<a href="#" class="content_page__boxes__box">
			<div class="img">
				<img src="<?php echo bloginfo('template_url'); ?>/assets/images/resources/bl_3.png">
			</div>
			<h3>A Cautionary Tale for Printers</h3>
			<p>Profit-leading CEOs don’t have any unique secrets. They’re just doing a better job of focusing on what really matters.</p>
			<div class="cta">
				<span class="read_more">Read More</span>
			</div>
		</a>
		<a href="#" class="content_page__boxes__box">
			<div class="img">
				<img src="<?php echo bloginfo('template_url'); ?>/assets/images/resources/bl_1.png">
			</div>
			<h3>Don’t Give Away Productivity Gains</h3>
			<p>The industry is changing in a fundamental way, and it’s not changing back! So don’t blame the internet or stupid competitors.</p>
			<div class="cta">
				<span class="read_more">Read More</span>
			</div>
		</a>
		<a href="#" class="content_page__boxes__box">
			<div class="img">
				<img src="<?php echo bloginfo('template_url'); ?>/assets/images/resources/bl_2.png">
			</div>
			<h3>Just Say "YES" to that Extra Job</h3>
			<p>You’re not seeking some cosmic secret. Just choose the right things to focus on, and be careful who you listen to.</p>
			<div class="cta">
				<span class="read_more">Read More</span>
			</div>
		</a>
		<a href="#" class="content_page__boxes__box">
			<div class="img">
				<img src="<?php echo bloginfo('template_url'); ?>/assets/images/resources/bl_3.png">
			</div>
			<h3>A Cautionary Tale for Printers</h3>
			<p>Profit-leading CEOs don’t have any unique secrets. They’re just doing a better job of focusing on what really matters.</p>
			<div class="cta">
				<span class="read_more">Read More</span>
			</div>
		</a>
	</div>
</section>


</div>



<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>