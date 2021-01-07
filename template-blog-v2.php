<?php /* Template Name: Blog V2 */ ?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="content_page content_blog">

<?php get_template_part('partials/hero'); ?>

<?php

$category=false;
    
		global $wp_query;
		remove_all_filters('posts_orderby');
		$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
		$args = array(
			'post_type'=>'post',
			'posts_per_page' => 6,
			'paged' => $paged,
			'orderby' => 'date',
            'order'   => 'DESC'
		);

		if(isset($wp_query->query_vars['blogcat'])){
			//$searchby = 'category';
			$category = $wp_query->query_vars['blogcat'];
			$args['category_name']=$wp_query->query_vars['blogcat'];
		}

		if(isset($wp_query->query_vars['blogtag'])){
			$category="none";
			$args['tag']=$wp_query->query_vars['blogtag'];
		}
		if(isset($wp_query->query_vars['blogsearch'])){
			$category="none";
			$args['s']=$wp_query->query_vars['blogsearch'];
		}

		//echo '<script>console.log('.json_encode($args).');</script>';


?>
<section id="the_blog" class="content_page__boxes">
	<div class="container">
		<div class="blog_filters">
			<div class="blog_filters__filters">
				<ul>
					<li><a href="<?= get_site_url() ?>/fresh-thinking" class="<?php if(!$category){echo 'active';} ?>">All Blog Posts</a></li>
					<li><a href="<?= get_site_url() ?>/fresh-thinking/category/profit-improvement" class="<?php if($category=='profit-improvement'){echo 'active';} ?>">Profit Improvement</a></li>
					<li><a href="<?= get_site_url() ?>/fresh-thinking/category/sales-marketing" class="<?php if($category=='sales-marketing'){echo 'active';} ?>">Sales &amp; Marketing</a></li>
					<li><a href="<?= get_site_url() ?>/fresh-thinking/category/exploring-alternatives" class="<?php if($category=='exploring-alternatives'){echo 'active';} ?>">Exploring Alternatives</a></li>
					<li><a href="<?= get_site_url() ?>/fresh-thinking/category/mergers-acquisitions" class="<?php if($category=='mergers-acquisitions'){echo 'active';} ?>">Mergers &amp; Acquisitions</a></li>
				</ul>
				<div class="blog_filters_select">
					<select id="blog_filters_mobile">
						<option value="all" <?php if(!$category){echo 'selected';} ?>>All Blog Posts</option>
						<option value="profit-improvement" <?php if($category=='profit-improvement'){echo 'selected';} ?>>Profit Improvement</option>
						<option value="sales-marketing" <?php if($category=='sales-marketing'){echo 'selected';} ?>>Sales &amp; Marketing</option>
						<option value="exploring-alternatives" <?php if($category=='exploring-alternatives'){echo 'selected';} ?>>Exploring Alternatives</option>
						<option value="mergers-acquisitions" <?php if($category=='mergers-acquisitions'){echo 'selected';} ?>>Mergers &amp; Acquisitions</option>
					</select>
				</div>
			</div>
			<div class="blog_filters__search">
				<form id="blog_search_form" class="search_form">
					<input type="text" id="blog_search" name="search" placeholder="Search">
					<button class="blog_search_submit"><i class="el el-search"></i></button>
				</form>
			</div>
		</div>

		<?php
		

		$query = new WP_Query($args);


		if($query->have_posts()):
		while ( $query->have_posts() ) : $query->the_post();
		?>

		<a href="<?= get_the_permalink() ?>" class="content_page__boxes__box">
			<div class="header_img" style="background-image:url('<?= get_the_post_thumbnail_url() ?>');"></div>

			<h3><?php the_title(); ?></h3>
			<?php the_excerpt(); ?>
			<div class="cta">
				<span class="read_more">Read More</span>
			</div>
		</a>
		<?php
		endwhile;
		wp_reset_postdata();
		else:
			?>
			<h2>No results were found.  Please try again.</h2>
			<?php
		endif;
		?>

		<div class="pagination">
		<?php

        $big = 999999999; // need an unlikely integer
 
		echo paginate_links( array(
		    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		    'format' => '?paged=%#%',
		    'current' => max( 1, get_query_var('paged') ),
		    'total' => $query->max_num_pages,
		    'next_text' => '<i class="el el-arrow-right"></i>',
		    'prev_text' => '<i class="el el-arrow-left"></i>'
		) );
    ?>
    	</div>

		
		
	</div>
</section>


</div>



<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>