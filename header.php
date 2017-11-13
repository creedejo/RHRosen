<!DOCTYPE html>
<html lang="en">
<head>
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
				<ul>
					<li><a href="<?= get_site_url() ?>" class="navlink_home <?php if($post_slug=="home"){echo ' active-bold ';} ?>">Home</a></li>
					<li><a href="<?= get_site_url() ?>/your-business/" class="navlink_business <?php if($post_slug=="your-business"){echo ' active-bold ';} ?>">Your Business</a></li>
					<li><a href="<?= get_site_url() ?>/how-we-can-help/" class="navlink_help <?php if($post_slug=="how-we-can-help"){echo ' active-bold ';} ?>">How We Can Help</a></li>
					<li><a href="<?= get_site_url() ?>/resources/" class="navlink_resources <?php if($post_slug=="resources"){echo ' active-bold ';} ?>">Resources</a></li>
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
					<li><a href="<?= get_field('linked_in_url','option') ?>" target="_blank"><i class="el el-linkedin"></i></a></li>
					<li><a href="<?= get_field('book_url','option') ?>" target="_blank"><i class="el el-book"></i></a></li>
					<li><a href="<?= get_field('podcast_url','option') ?>" target="_blank"><i class="el el-mic"></i></a></li>
					<li class="blogger"><a href="<?= get_site_url() ?>/blog">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="26" viewBox="0 0 24 26">

  <path class="cls-1" d="M8.189,1.187a7.623,7.623,0,0,1,2.074.171h0.393c0.264,0.081.642,0.146,0.9,0.228h0.28l2.13,0.685V2.329h0.112V2.387h0.168V2.444h0.112V2.5h0.168V2.558l0.336,0.114V2.729h0.112V2.786h0.112V2.843H15.2V2.9H15.31V2.958h0.112V3.015h0.112V3.072h0.112V3.129h0.112L15.87,3.243h0.112l0.056,0.114,0.224,0.057,0.056,0.114,0.224,0.057L16.6,3.7h0.112l0.056,0.114H16.88V3.871l0.168,0.057L17.1,4.043h0.112l0.056,0.114h0.112L17.44,4.271l0.168,0.057L17.721,4.5h0.112l0.056,0.114,0.168,0.057,0.224,0.286h0.112L18.674,5.3h0.112l0.561,0.628L19.963,6.5V6.613L20.3,6.9V7.012l0.28,0.228V7.355l0.168,0.114V7.584L20.916,7.7V7.812l0.168,0.114V8.04L21.2,8.1l0.056,0.171h0.056V8.383L21.421,8.44V8.554l0.112,0.057,0.056,0.171h0.056V8.9H21.7V9.011l0.112,0.057L21.87,9.3l0.112,0.057V9.468l0.112,0.114V9.7H22.15V9.811h0.056V9.925h0.056v0.114h0.056v0.114A15.387,15.387,0,0,1,24,17.35H20.86a11.888,11.888,0,0,0-1.346-5.768V11.467H19.459V11.353H19.4V11.239H19.347V11.124l-0.112-.114V10.9l-0.112-.057-0.056-.229-0.112-.057V10.439H18.9V10.325l-0.112-.057V10.154H18.73l-0.056-.171-0.112-.057V9.811L18.393,9.7V9.582l-0.168-.114V9.354L18,9.183V9.068l-0.336-.286V8.669L16.992,8.04l-0.336-.4H16.543L16.263,7.3H16.151L15.983,7.07H15.87L15.758,6.9H15.646l-0.112-.171H15.422l-0.056-.114L15.2,6.556V6.5H15.085l-0.056-.114-0.224-.057A11.832,11.832,0,0,0,8.189,4.385v-3.2Zm0,5.654a9.3,9.3,0,0,1,5.1,1.428l0.224,0.057V8.383L13.684,8.44,13.74,8.554h0.112V8.612L14.02,8.669l0.056,0.114h0.112L14.3,8.954h0.112l0.112,0.171h0.112l0.224,0.286h0.112l0.28,0.343,0.673,0.628V10.5l0.28,0.229v0.114l0.168,0.114v0.114l0.168,0.114V11.3l0.112,0.057,0.056,0.171h0.056v0.114L16.88,11.7l0.056,0.171h0.056L17.048,12.1a9.813,9.813,0,0,1,1.4,5.254h-2.8a6.75,6.75,0,0,0-.336-2.113l-0.056-.4H15.2V14.722H15.142l-0.056-.343H15.029l-0.112-.343H14.861V13.923H14.805V13.809H14.749l-0.112-.343H14.581l-0.056-.171-0.112-.057V13.123H14.357L14.3,12.952l-0.112-.057V12.781l-0.168-.114V12.552l-0.336-.285V12.152l-0.392-.343L13.235,11.7H13.123l-0.28-.343L12.675,11.3l-0.056-.114H12.506l-0.056-.114-0.168-.057V10.953H12.17l-0.056-.114-0.224-.057-0.056-.114-0.224-.057V10.553H11.5V10.5l-0.336-.114V10.325H10.993V10.268H10.88V10.211H10.712V10.154H10.544V10.1H10.376V10.039H10.208V9.982H9.983a5.137,5.137,0,0,0-1.738-.228,3.539,3.539,0,0,1-.056-0.971V6.841ZM5.05,13.009a0.631,0.631,0,0,0,.28-0.171V12.781H5.442V12.724l0.224-.057V12.609H5.834V12.552H6.171V12.5a3.271,3.271,0,0,1,1.121.057H7.853l1.4,0.343v0.057H9.367v0.057H9.535v0.057L9.871,13.18v0.057L10.1,13.295l0.056,0.114,0.224,0.057,0.056,0.114h0.112l0.112,0.171h0.112l0.224,0.286H11.1l0.056,0.114,0.224,0.171v0.114l0.28,0.228V14.78l0.168,0.114v0.114l0.112,0.057v0.114l0.112,0.057,0.112,0.343h0.056v0.114h0.056v0.114h0.056L12.45,16.15h0.056v0.171h0.056v0.171h0.056v0.171h0.056v0.171h0.056l0.056,0.457h0.056v0.286a5.387,5.387,0,0,1,.112,2.284v0.457H12.9v0.343H12.843l-0.056.457H12.731V21.29H12.675v0.171H12.619v0.171H12.562V21.8H12.506v0.114H12.45V22.09H12.394l-0.056.228H12.282l-0.056.229-0.112.057-0.056.228-0.112.057V23l-0.112.057v0.114l-0.112.057v0.114l-0.168.114v0.114l-0.561.514-0.336.4H10.544l-0.112.171H10.32l-0.112.171-0.224.057L9.927,25H9.815l-0.056.114-0.224.057v0.057L9.2,25.345V25.4l-1.4.457-0.785.057a4.81,4.81,0,0,1-2.467-.228l-0.392-.057V25.574l-0.28-.057V25.459L3.648,25.4V25.345H3.48l-0.056-.114H3.311V25.174H3.2L3.087,25.06H2.975V25l-0.168-.057-0.056-.114H2.639L2.47,24.6H2.358l-0.28-.343H1.966l-0.112-.114V24.032l-0.392-.343V23.575L1.293,23.46l-0.056-.171-0.112-.057L1.069,23l-0.112-.057L0.845,22.6l-0.112-.057-0.056-.286H0.62l-0.056-.228H0.508l-0.056-.286H0.4V21.576H0.34V21.4H0.284V21.176H0.228V20.948H0.172V20.662H0.116V20.376H0.06L0,18.549V10.039a4.379,4.379,0,0,1,.336-2.4l0.224-.171,0.168-.228,0.224-.057V7.127L1.181,7.07V7.012l0.5-.057V6.9a1.586,1.586,0,0,1,.617.114H2.47V7.07H2.583V7.127L2.807,7.184,2.863,7.3H2.975L3.143,7.526,3.255,7.584V7.7L3.368,7.755,3.424,7.983H3.48V8.1H3.536V8.269H3.592V8.554A10.817,10.817,0,0,1,3.648,10.9v8.681l0.336,0.971H4.04L4.1,20.719l0.112,0.057V20.89L4.6,21.233,4.713,21.4H4.825l0.056,0.114H4.993L5.05,21.633H5.162V21.69l0.224,0.057V21.8H5.554v0.057H5.778a2.058,2.058,0,0,0,1.4-.057H7.348V21.747H7.46V21.69l0.28-.057L7.8,21.519H7.909L7.965,21.4H8.077l0.168-.229H8.357l0.112-.114V20.948l0.224-.171V20.662L8.806,20.6l0.112-.343H8.974V20.148H9.03V19.977H9.086V19.748H9.142v-0.4H9.2v-0.4H9.142V18.492H9.086V18.263H9.03l-0.056-.343H8.918V17.806H8.862L8.75,17.464,8.582,17.35V17.235l-0.224-.171-0.112-.171H8.133l-0.056-.114H7.965l-0.056-.114H7.8V16.607H7.629V16.55H7.46V16.493H7.236V16.436H6.227V16.379H5.89V16.322H5.722V16.264L5.5,16.207l-0.056-.114H5.33L5.05,15.75l-0.168-.114-0.056-.229-0.112-.057L4.6,14.837a1.852,1.852,0,0,1-.056-0.8H4.6V13.809H4.657V13.637H4.713l0.056-.228H4.825V13.295H4.881A0.639,0.639,0,0,0,5.05,13.009Z"/>
</svg>
					</a></li>
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