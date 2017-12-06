<?php

if($wp_query->query_vars['cscat']){
	//$searchby = 'category';
	$category = $wp_query->query_vars['cscat'];
	//$args['category_name']=$wp_query->query_vars['cscat'];
}

?>

<ul class="case_study_cat_nav">
	<li><a href="<?= get_site_url() ?>/case-studies" class="<?php if(!$category){echo 'active';} ?>">All Case Studies</a></li>
	<li><a href="<?= get_site_url() ?>/case-studies/category/profit-improvement" class="<?php if($category=='profit-improvement'){echo 'active';} ?>">Profit Improvement</a></li>
	<li><a href="<?= get_site_url() ?>/case-studies/category/sales-marketing" class="<?php if($category=='sales-marketing'){echo 'active';} ?>">Sales &amp; Marketing</a></li>
	<li><a href="<?= get_site_url() ?>/case-studies/category/exploring-alternatives" class="<?php if($category=='exploring-alternatives'){echo 'active';} ?>">Exploring Alternatives</a></li>
	<li><a href="<?= get_site_url() ?>/case-studies/category/mergers-acquisitions" class="<?php if($category=='mergers-acquisitions'){echo 'active';} ?>">Mergers &amp; Acquisitions</a></li>
</ul>