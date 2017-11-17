


<?php get_header(); ?>



<div class="content_page">

<?php get_template_part('partials/hero'); ?>

<section id="search" class="search">
<div class="container">


	<?php if (have_posts()):  ?>
		<?php
		$result_ctr = 0;
		?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php
			if(get_page_template_slug()!='template-modal.php'):

				$pt = get_post_type();
				$lnk = get_the_permalink();
				$target='';
				if($pt=='podcast_preview'){
					$lnk = get_field('podcast_url');
					$target=' target="_blank" ';
				}
				?>
				<div class="search__result">
					<h2><a href="<?= $lnk ?>" <?= $target ?>><?php the_title(); ?></a></h2>
					<?php the_excerpt(); ?>
					<a href="<?= $lnk ?>" <?= $target ?>>Read More</a><br>
				</div>
			<?php
			$result_ctr++;
			endif;

			?>
		<?php endwhile; ?>
		<?php
		if($result_ctr==0):
				?>
				<h2>No results were found.  Please try again.</h2>
				<?php
			endif;
		?>
	<?php
		else:
	?>
		<h2>No results were found.  Please try again.</h2>
	<?php endif; ?>

</div>
</section>


</div>





<?php get_footer(); ?>