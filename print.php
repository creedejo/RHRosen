<?php

define('WP_USE_THEMES', false);
require('../../../wp-load.php');

$id = $_GET['postid'];

$post   = get_post($id);
$title = $post->post_title;
$content =  apply_filters( 'the_content', $post->post_content );
$post_type = get_post_type($id);
$intro = "";
if($post_type=="case_study"){
	$intro = apply_filters( 'the_content', get_field("intro_text",$id) );
}
$img = get_the_post_thumbnail_url($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title><?= $title ?></title>
	<link rel="stylesheet" href="<?php echo bloginfo('template_url') . '/assets/styles/elusive-icons.min.css'; ?>">
	<style>

	body{
		padding:40px;
	}
	h1,p{
		font-family: "Arial";
	}

	p{
		font-size:16px;
	}

	img.img_featured{
		width:100%;
	}

	img.logo{
		max-width:75%;
	}

	a.print{
		position:absolute;
		top:20px;
		right:20px;
		color:#595559;
		font-size:32px;
	}

	a.print:hover{
		color:#003780;
	}

	</style>
</head>
<body>
<a class="print" href="javascript:window.print()"><i class="el el-print"></i></a>
<img class="logo" src="<?= get_site_url() ?>/wp-content/themes/rosen/assets/images/logo_rhr_blue.png" />
<h1><?= $title ?></h1>
<?php

if($post_type=="case_study"){
	?>
	<h2><?= $intro ?></h2>
	<?
}
if($img){
	?>
	<img class="img_featured" src="<?= $img ?>" />
	<?php
}
?>
<?= $content ?>
</body>

</html>