<?php /* Template Name: Resources */ ?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="content_page hwch">

<?php get_template_part('partials/hero'); ?>



<section class="hwch__content content">
	<div class="container">
		<div class="col left">
			<div class="hwch__sidenav">
				<ul>
					<li><a href="<?= get_site_url() ?>/how-we-can-help#services">All Service Offerings</a></li>

					<?php

						$args=array(
							'post_type' => 'hwch',
							'posts_per_page'=>-1
						);

						$hwch = get_posts($args);

						foreach($hwch as $h):
							$cl="";
							if($h->ID==get_the_id()){
								$cl='active';
							}
							?>
							<li><a href="<?= get_the_permalink($h->ID) ?>" class="<?= $cl ?>"><?= $h->post_title ?></a></li>
							<?php
						endforeach;

					?>
				</ul>
			</div>

			<div class="hwch__talk">
				<p><b>Want to talk?</b></p>
				<p>We get it. Sometimes change can't wait. In fact, you shouldn't have to wait for change either.</p>
				<p>Send us an email and tell us about your challenges. We’ll get back to you within 24 hours... promise.</p>
				<p class="center">
					<a href="#" class="btn_white small btn_talk">Contact Us</a>
				</p>
			</div>
		</div>
		<div class="col right">
			<div class="hwch__title" style="background-image: url('<?= get_the_post_thumbnail_url(); ?>');">
				<div class="post_title_overlay"></div>
				<div class="post_title_content">
					<h1><?php the_title(); ?></h1>
					<p class="subtitle"><?= get_field('subtitle') ?></p>
				</div>
			</div>
			<?php the_content() ?>
		</div>
	</div>
</section>


</div>



<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>