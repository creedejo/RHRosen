<?php /* Template Name: Resources */ ?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="content_page case_study">

<?php get_template_part('partials/hero'); ?>

<section class="case_study__categories">
	<div class="container">
		<?php get_template_part('partials/cs_categories'); ?>
	</div>
</section>

<section class="case_study__intro">
	<div class="container">
		<div class="case_study__intro__title" style="background-image: url('<?= get_the_post_thumbnail_url(); ?>');">
			<div class="post_title_overlay"></div>
			<h1><?php the_title(); ?></h1>
		</div>
		<div class="case_study__intro__text">
			<?= get_field('intro_text') ?>
		</div>
	</div>
</section>


<section class="case_study__content content">
	<div class="container">
		<?php the_content() ?>
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