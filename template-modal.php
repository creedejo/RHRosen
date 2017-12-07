<?php /* Template Name: Modal Content */ ?>
<!DOCTYPE html>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<html>
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110822447-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-110822447-1');
</script>

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