<?php /* Template Name: 2 Column */ ?>


<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="content_page hwch">

<?php get_template_part('partials/hero'); ?>



<section class="hwch__content content">
	<div class="container">
		<div class="col left">
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
            <h1><?php the_title(); ?></h1>
			<?php the_content() ?>
		</div>
	</div>
</section>


</div>



<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>