<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="home_content">

<div class="carousel">
	<?php putRevSlider( 'home' ); ?>
</div>

<section class="home__path">
	<div class="container">
		<?php the_field('intro_text'); ?>

		<div class="home__path__steps">
			<a class="step" href="<?php the_field('block_1_link'); ?>" data-lity data-lity-position="left">
				<div class="icon eye"></div>
				<h2><?php the_field('block_1_title'); ?></h2>
				<?php the_field('block_1_text'); ?>
				<span class="read_more">Read More</span>
			</a>
			<a href="<?php the_field('block_2_link'); ?>"  class="step"  data-lity data-lity-position="center">
				<div class="icon check"></div>
				<h2><?php the_field('block_2_title'); ?></h2>
				<?php the_field('block_2_text'); ?>
				<span class="read_more">Read More</span>
			</a>
			<a class="step" href="<?php the_field('block_3_link'); ?>" data-lity data-lity-position="right">
				<div class="icon chart"></div>
				<h2><?php the_field('block_3_title'); ?></h2>
				<?php the_field('block_3_text'); ?>
				<span class="read_more">Read More</span>
			</a>
		</div>

	</div>
	<div class="content_page__down top-margin-neg"><a href="#intro" data-target="#stats"><i class="el el-chevron-down"></i></a></div>
</section>

<section id="stats" class="home__stats">
	<div class="container">
		<div class="stat">
			<span class="count" data-start="0" data-end="643"></span>
			<span class="label">Companies</span>	
		</div>
		<div class="stat">
			<span class="count" data-start="800" data-end="1421"></span>
			<span class="label">Projects</span>	
		</div>
		<div class="stat">
			<span class="count" data-start="0" data-end="54"></span>
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
<script type="text/javascript">
if (document.images) {
    img1 = new Image();
    img1.src = "<?= get_template_directory_uri() ?>/assets/images/icons_path_over.png";
}
</script>

</div>
<?php get_footer(); ?>