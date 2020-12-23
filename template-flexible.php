<?php
/*
Template Name: Flexible Blank Page
Text Domain: rosen
*/
?>
<?php get_header(); ?>

<section class="page_content">
<div class="container">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php
		the_content();
		?>

	<?php endwhile; ?>
	<?php endif; ?>
</div>
<?php get_footer(); ?>