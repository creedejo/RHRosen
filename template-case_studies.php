<?php /* Template Name: Case Studies */ ?>
<?php get_header(); ?>



<div class="content_page">

<?php get_template_part('partials/hero'); ?>

<?php

global $wp_query;
$paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
$args = array(
	'post_type'=>'case_study',
	'posts_per_page' => 6,
	'paged' => $paged
);

if($wp_query->query_vars['cscat']){
	//$searchby = 'category';
	//$category = $wp_query->query_vars['cscat'];
	$args['category_name']=$wp_query->query_vars['cscat'];
}


?>

<section id="case_studies" class="content_page__boxes archive">
	<div class="container">
		<?php get_template_part('partials/cs_categories'); ?>



		<?php
		$query = new WP_Query($args);


		if($query->have_posts()):
		while ( $query->have_posts() ) : $query->the_post();

		?>

		<a href="<?= get_the_permalink(); ?>" class="content_page__boxes__box">
			<div class="img" style="background-image: url('<?= get_the_post_thumbnail_url( get_the_ID(), 'medium' ) ?>');"></div>
			<h3><?php the_title(); ?></h3>
			<?= get_field('intro_text') ?>
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





<?php get_footer(); ?>