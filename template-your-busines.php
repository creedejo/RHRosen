<?php /* Template Name: Your Business */ ?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="content_page">

<?php get_template_part('partials/hero'); ?>

<section id="intro" class="content_page__intro down-scroll">
	<div class="container">
		<?php the_field('intro_text'); ?>
		<div class="content_page__down init"><a href="#intro"><i class="el el-chevron-down"></i></a></div>
	</div>
</section>

<section class="content_page__boxes">
	<div class="container">

		<?php

		$posts = get_field('pages');

		if( $posts ): ?>

		<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
		<?php setup_postdata($post); ?>
		<a href="<?php the_permalink(); ?>" class="content_page__boxes__box" data-lity>
			<div class="img" style="background-image: url('<?= get_the_post_thumbnail_url( get_the_ID(), 'medium' ) ?>');"></div>
			<h2><?php the_title(); ?></h2>
			<?php the_excerpt(); ?>
			<div class="cta">
				<span class="read_more">Read More</span>
			</div>
		</a>
		<?php endforeach; ?>

		<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php endif; ?>
	</div>
	<div class="content_page__down top-margin"><a href="#intro"><i class="el el-chevron-down"></i></a></div>
</section>

<section class="content_page__reasons">

	<div class="container">
		<div class="content_page__reasons__img">
		<img src="<?php echo bloginfo('template_url'); ?>/assets/images/reasons-left.jpg">
		</div>
		<div class="content_page__reasons__bars">
			<h2>Reasons Clients Turn to Us</h2>
			<!-- <a class="show_me">Show Me</a><span class="arrow_pulse_left"><i class="el el-chevron-left"></i></span> -->
			<div class="content_page__reasons__bars__items">

				<?php


				if( have_rows('reasons') ):
					$reasonCtr=0;
				 	// loop through the rows of data
				    while ( have_rows('reasons') ) : the_row();
				    	$num = get_sub_field('reason_percentage');
				    	$diff = 100-$num;
				        ?>

				        	<div id="bar_<?= $reasonCtr ?>" class="bar">
								<p><?php the_sub_field('reason_text'); ?></p>
								<div class="tell_me"><a data-tooltip-content="#tooltip_<?= $reasonCtr ?>">Tell Me More</a></div>
								<div class="bar_bg"><div class="bar_fg off" style="left:-<?= $diff ?>%;"></div>
								<span class="tooltip_data" id="tooltip_<?= $reasonCtr ?>"><?php the_sub_field('reason_info'); ?></span>
							</div>

				        <?php
				        $reasonCtr++;

				    endwhile;

				else :

				    // no rows found

				endif;

				?>
				
				
			</div>
		</div>
	</div>

</section>
<!--
<div class="content_page__down mobile"><a href="#intro" data-target=".footer"><i class="el el-chevron-down"></i></a></div>-->


</div>



<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>