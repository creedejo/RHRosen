<?php get_header(); ?>
<section class="page_content">
<div class="container">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h2 class="title"><?php the_title() ?></h2>
		<?php
		the_content();
		?>

	<?php endwhile; ?>
	<?php endif; ?>
</div>
<?php get_footer(); ?>