
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
				<div class="blog__content__img" style="background-image:url('<?= $img ?>');"></div>
				<?php
			endif;
			?>
			<h2><?php the_title(); ?></h2>
			<div class="blog__content__info">
				<ul class="info">
					<li><?php the_date('M d, Y'); ?></li>

					<?php

						$cats = wp_get_post_categories(get_the_ID());

						if(!empty($cats)){
							?>
							<li>
								<?php
								$count=0;
								foreach($cats as $c):
									$cat = get_category( $c );
									if($count>0){echo ', ';}
									$count++;
									?>
									<a href="<?= get_site_url() ?>/blog/category/<?= $cat->slug ?>"><?= $cat->name ?></a>
									<?php
								endforeach;
								?>
							</li>
							<?php
						}

					?>

					<?php
						$comments = get_comments( array(
						    'post_id' => get_the_ID(),
						    'status' => 'approve',
						) );
						if ( !empty( $comments ) )
						{
							?>
							<li>COMMENTS: <?= count($comments) ?></li>
							<?php
						}
						?>
				</ul>
			</div>

			<?php the_content() ?>

			<!-- =========== SOCIAL ============= -->
			<section class="case_study__links blog-social">
				<div class="container">
					<ul>
						<li><a href="https://twitter.com/home?status=<?php the_permalink(); ?>" target="_blank"><i class="el el-twitter"></i></a></li>
						<li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=<?= get_field('intro_text',false,false) ?>" target="_blank"><i class="el el-linkedin"></i></a></li>
						<li><a href="mailto:?subject=<?php the_title(); ?>&body=<?php the_permalink(); ?>"><i class="el el-envelope"></i></a></li>
						<li><a href="javascript:window.open('<?= get_site_url() ?>/print/<?= the_id(); ?>', '<?php the_title() ?>', 'width=600,height=400');"><i class="el el-print"></i></a></li>
					</ul>
				</div>
			</section>
			<!-- =========== COMMENTS ============= -->


			<?php get_template_part('partials/comments'); ?>
		</div>

		<div class="col-25 blog__content__sidebar">
			<div class="blog__content__sidebar__search">
				<form id="blog_search_form" class="search_form">
					<input type="text" id="blog_search" name="search" placeholder="Search">
					<button class="blog_search_submit"><i class="el el-search"></i></button>
				</form>
			</div>
			<?php

				$cats = get_categories();

				if($cats):
			?>
			<h3>Categories</h3>
			<ul>
				<?php
				foreach($cats as $cat):
				?>
				<li><a href="<?= get_site_url() . '/blog/category/' . $cat->slug ?>"><?= $cat->name ?></a></li>
				<!--
				<li><a href="#">Profit Improvement</a></li>
				<li><a href="#">Sales &amp; Marketing</a></li>
				<li><a href="#">Exploring Alternatives</a></li>
				<li><a href="#">Mergers &amp; Acquisitions</a></li>
				-->
				<?php
				endforeach;
				?>
			</ul>

			<?php
				endif;
			?>

			<a href="<?= get_site_url() ?>/blog" class="btn-gray">View all blog posts</a>

			<?php
			$args = array(
				'post_type'=>'post',
				'numberposts'=>2,
				'exclude' => get_the_ID(),
				'post_status' => 'publish'
			);
			$recent = wp_get_recent_posts($args);

			if($recent):
			?>
			<h3>Recent Posts</h3>
			<ul>
				<?php
				foreach($recent as $rec):
				?>
				<li><a href="<?= get_the_permalink($rec["ID"]) ?>"><?= $rec['post_title'] ?><span class="recent_date"><?= get_the_date('M d,Y',$rec["ID"]) ?></span></a></li>
				<?php
				endforeach;
				?>
			</ul>
			<?php
			endif;
			?>

			<?php
			$tags = get_tags();
			if($tags):
			?>
			<div class="blog__content__sidebar__tags">
				<h3>Tags</h3>
				<?php
				foreach ( $tags as $tag ):
				?>
					<a href="<?= get_site_url() . '/blog/tag/' . $tag->slug ?>"><?= $tag->name ?></a>
				<?php
				endforeach;
				?>
			</div>
			<?php
			endif;
			?>

		</div>
	</div>
</section>




</div>



<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>