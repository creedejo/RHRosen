
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="content_page case_study">

<?php get_template_part('partials/hero'); ?>


<section class="blog__content content">
	<div class="container">
		<div class="col-75">
			<?php
			$img = get_the_post_thumbnail_url();
			if($img):
				?>
				<div class="blog__content__img"><img src="<?= $img ?>"></div>
				<?php
			endif;
			?>
			<h2><?php the_title(); ?></h2>
			<div class="blog__content__info">
				<ul class="info">
					<li><?php the_date('M d, Y'); ?></li>
				</ul>
			</div>
			<?php the_content() ?>
		</div>

		<div class="col-25">
25
		</div>
	</div>
</section>

<section class="case_study__links">
	<div class="container">
		<ul>
			<li><a href="https://twitter.com/home?status=<?php the_permalink(); ?>" target="_blank"><i class="el el-twitter"></i></a></li>
			<li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=<?= get_field('intro_text',false,false) ?>" target="_blank"><i class="el el-linkedin"></i></a></li>
			<li><a href="mailto:?subject=<?php the_title(); ?>&body=<?php the_permalink(); ?>"><i class="el el-envelope"></i></a></li>
			<li><a href="javascript:window.open('<?= get_site_url() ?>/print/<?= the_id(); ?>', '<?php the_title() ?>', 'width=600,height=400');"><i class="el el-print"></i></a></li>
		</ul>
	</div>
</section>


</div>



<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>