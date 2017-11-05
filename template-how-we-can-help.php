<?php /* Template Name: How We Can Help */ ?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="content_page">

<?php get_template_part('partials/hero'); ?>

<section class="content_page__intro down-scroll">
	<div class="container">
		<?php the_field('intro_text'); ?>
		<div class="content_page__down"><a href="#intro"><i class="el el-chevron-down"></i></a></div>
	</div>
</section>

<section class="content_page__numbered">

<div class="container">
	<div class="content_page__numbered__box">
		<span class="num">1.</span>
		<h2><?= get_field('block_1_title') ?></h2>
		<?= get_field('block_1_text') ?>
	</div>
	<div class="content_page__numbered__box">
		<span class="num">2.</span>
		<h2><?= get_field('block_2_title') ?></h2>
		<?= get_field('block_2_text') ?>
	</div>
	<div class="content_page__numbered__box">
		<span class="num">3.</span>
		<h2><?= get_field('block_3_title') ?></h2>
		<?= get_field('block_3_text') ?>
	</div>
</div>
<div class="content_page__down top-margin"><a href="#intro"><i class="el el-chevron-down"></i></a></div>
</section>


<section id="section_services" class="content_page__posts">

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
		<a href="<?= get_the_permalink() ?>" class="content_page__posts__post">
			<?php
				$thumb_id = get_post_thumbnail_id();
				$thumb_url = wp_get_attachment_image_src($thumb_id,'medium', true);
				//echo $thumb_url[0];
			?>
			<h2><?php the_title(); ?></h2>
			<h4><?= get_field('subtitle') ?></h4>
			<div class="img" style="background-image:url('<?= $thumb_url[0] ?>')"></div>
			<?php the_excerpt(); ?>
			<span class="read_more">Read More</span>
		</a>

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