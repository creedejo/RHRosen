<?php

//check for thumbnail override
//$featured_img = get_the_post_thumbnail_url();
$post_type = get_post_type();
if(is_search()){
	$post_type = 'search';
}
switch($post_type){
	case "case_study":
		$pg =  get_page_by_title( 'Resources' );
		$pid = $pg->ID;
		$pgTitle = 'Case Studies';
		$featured_img = get_the_post_thumbnail_url($pid);
	break;
	case "hwch":
		$pg =  get_page_by_title( 'Resources' );
		$pid = $pg->ID;
		$pgTitle = 'How We Can Help';
		$featured_img = get_the_post_thumbnail_url($pid);
	break;
	case "post":
		//$pg =  get_page_by_title( 'The Rosen Blog' );
		//$pid = $pg->ID;
		$pid=123;
		//$pgTitle = 'The Rosen Blog';
		$pgTitle = get_the_title($pid);
		$featured_img = get_the_post_thumbnail_url($pid);
	break;
	case "search":
		$pg =  get_page_by_title( 'The Rosen Blog' );
		$pid = $pg->ID;
		$pgTitle = 'Search Results';
		$featured_img = get_field('search_page_hero_image','option')['url'];
	break;

	default:
		$featured_img = get_the_post_thumbnail_url();
		$pgTitle = get_the_title();
}

?>
<section class="hero" style="background-image:url('<?= $featured_img ?>');">
	<div class="container">
		<div class="hero__title"><?= $pgTitle ?></div>
	</div>
</section>