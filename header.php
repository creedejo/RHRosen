<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110822447-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-110822447-1');
	</script>

<meta http-equiv="x-ua-compatible" content="IE=Edge"/>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<?php
	$img = get_the_post_thumbnail_url();
	if($img){
		?>
		<meta property="og:image" content="<?= $img ?>" />
		<?php
	}


	?>
	<meta property="og:title" content="<?php the_title(); ?>" />



	<title><?= get_bloginfo( 'name' ) . ' | ' . get_the_title() ?></title>
	<link rel="stylesheet" href="<?php echo bloginfo('template_url') . '/assets/styles/elusive-icons.min.css'; ?>">
	<link href="https://fonts.googleapis.com/css?family=Droid+Serif|Raleway:100,300,400,500,700,900" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo bloginfo('template_url') . '/assets/styles/main.css'; ?>">
	<link rel="stylesheet" href="<?php echo bloginfo('template_url') . '/assets/styles/lity.min.css'; ?>">
	<link href="<?php echo bloginfo('template_url'); ?>/assets/tooltipster/tooltipster.bundle.min.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<?php
	global $post;
	$post_slug=$post->post_name;
	$post_type=$post->post_type;
?>
<body class="<?php echo $post_slug; ?> <?= $post_type ?>">

<div class="header">
	<div class="container">
		<div class="logo logo__white">
			<a href="<?= get_site_url(); ?>"><img src="<?php bloginfo('template_directory') ?>/assets/images/logo_rhr.png"></a>
		</div>
		<div class="logo logo__blue">
			<a href="<?= get_site_url(); ?>"><img src="<?php bloginfo('template_directory') ?>/assets/images/logo_rhr_blue.png"></a>
		</div>
		<nav>
			<div class="nav__links">
				<?php wp_nav_menu( array('menu' => 'Main Nav')); ?>
			</div>
			
			<div class="nav__icons__search">
				<ul>
					<li><a href="#" class="toggle_search"><i class="el el-search"></i></a></li>
					<li><a href="#" class="inquiry-link"><i class="el el-comment"></i></a></li>
				</ul>
			</div>
			<div class="nav__icons__media">
				<ul>
					<li><a href="<?= get_field('linked_in_url','option') ?>" target="_blank"><i class="el el-linkedin"></i></a></li>
					<li><a href="<?= get_site_url() ?>/resources#the_book"><i class="el el-book"></i></a></li>
				</ul>
			</div>

			<div class="search_container">
				<div class="search_wrapper">
					<form role="search" action="<?php echo site_url('/'); ?>" method="get">
					<input type="text" id="search" name="s" placeholder="Search" />
					<button type="submit"></button>
					</form>
				</div>
			</div>
		</nav>
		<div class="nav-toggle">
			<div class="hamburger">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
</div>

<!-- BEGIN PAGE CONTAINER -->
<div class="page_container">