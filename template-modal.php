<?php /* Template Name: Modal Content */ ?>
<!DOCTYPE html>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<html>
<head>
<title><?= get_the_title() ?></title>
<link rel="stylesheet" href="<?php echo bloginfo('template_url') . '/assets/styles/main.css'; ?>">
</head>
<body class="modal">

	<img class="img_featured" src="<?= get_the_post_thumbnail_url() ?>">
	<h1><?php
	the_title();
	?>
	</h1>
	<?php the_content(); ?>

</body>
</html>
<?php endwhile; ?>
<?php endif; ?>