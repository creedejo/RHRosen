<?php

//check for thumbnail override
//$featured_img = get_the_post_thumbnail_url();
$post_type = get_post_type();

switch($post_type){
	case "case_study":
		$pg =  get_page_by_title( 'Resources' );
		$pid = $pg->ID;
		$featured_img = get_the_post_thumbnail_url($pid);
	break;

	default:
		$featured_img = get_the_post_thumbnail_url();
}

?>
<section class="hero" style="background-image:url('<?= $featured_img ?>');">
	<div class="container">
		<div class="hero__title"><?php the_title(); ?></div>
	</div>
</section>