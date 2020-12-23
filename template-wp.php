<?php /* Template Name: Wp Bakery Template */ ?>


<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="content_page hwch">

<?php get_template_part('partials/hero'); ?>



<section class="hwch__content content">
	<div class="container">
		
    <?php the_content() ?>

    
	</div>
</section>


</div>



<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>