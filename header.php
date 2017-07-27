<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="x-ua-compatible" content="IE=Edge"/>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title><?= get_bloginfo( 'name' ) . ' | ' . get_the_title() ?></title>
	<link rel="stylesheet" href="<?php echo bloginfo('template_url') . '/assets/styles/elusive-icons.min.css'; ?>">
	<link href="https://fonts.googleapis.com/css?family=Droid+Serif|Raleway:100,300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo bloginfo('template_url') . '/assets/styles/main.css'; ?>">
	
	<?php wp_head(); ?>
</head>

<body class="<?php echo $pagename; ?>">

<div class="header">
	<div class="container">
		<div class="logo logo__white">
			<img src="<?php bloginfo('template_directory') ?>/assets/images/logo_rhr.png">
		</div>
		<div class="logo logo__blue">
			<img src="<?php bloginfo('template_directory') ?>/assets/images/logo_rhr_blue.png">
		</div>
		<nav>
			<div class="nav__links">
				<ul>
					<li><a href="#" class="active">Home</a></li>
					<li><a href="#">Your Business</a></li>
					<li><a href="#">How We Can Help</a></li>
					<li><a href="#">Resources</a></li>
				</ul>
			</div>
			
			<div class="nav__icons__search">
				<ul>
					<li><a href="#" class="toggle_search"><i class="el el-search"></i></a></li>
					<li><a href="#" class="inquiry-link"><i class="el el-comment"></i></a></li>
				</ul>
			</div>
			<div class="nav__icons__media">
				<ul>
					<li><a href="#"><i class="el el-linkedin"></i></a></li>
					<li><a href="#"><i class="el el-book"></i></a></li>
					<li><a href="#"><i class="el el-mic"></i></a></li>
					<li><a href="#"><i class="el el-wordpress"></i></a></li>
				</ul>
			</div>

			<div class="search_container">
				<div class="search_wrapper">
					<form>
					<input type="text" id="search" name="search" placeholder="Search" />
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