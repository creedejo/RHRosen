<footer class="footer">

<section class="footer__inquiry">
	<div class="overlay_color"></div>
	<div class="container">
		<div class="footer__inquiry__content">
			<?php
				$args = array(
					'post_type'	=> 'lets_talk',
					'posts_per_page' => -1
				);
				$lt = get_posts($args);

				//echo count($lt);
				$lt_index = rand(0,count($lt)-1);
				echo apply_filters('the_content',$lt[$lt_index]->post_content);
			?>
		</div>
		<div class="footer__inquiry__button">
			<a href="#" class="inquiry-link">Let's Talk</a>
		</div>
	</div>
</section>
<section class="footer__links">
	<div class="container">
		<div class="footer__links__col">
			<?= get_field('footer_content','option') ?>
			<ul class="arrow">
				<li><a class="lnk_bold lnk_about_bob" href="<?= get_site_url() ?>/resources/#about_bob">About Bob Rosen</a></li>
			</ul>
		</div>
		<div class="footer__links__col">
			<h3>Services:</h3>
			<ul class="arrow">
				<?php

				$ser = get_posts(array('post_type'=>'hwch','posts_per_page'=>6));
				foreach($ser as $s):
				?>
				<li><a href="<?= get_the_permalink($s->ID) ?>"><?= $s->post_title ?></a></li>
				<?php
				endforeach;
				?>
			</ul>
		</div>
		<!--
		<div class="footer__links__col">
			<h3>Recent Podcasts:</h3>
			<ul class="arrow">
				<?php
				$podcasts = wp_get_recent_posts( array('post_type'=>'podcast_preview','posts_per_page'=>3));

				foreach($podcasts as $pc):
					$theID = $pc["ID"];
				?>
				<li><a href="<?= get_field('podcast_url','option') ?>"><?= get_the_title($theID) ?></a></li>
					<?php
				endforeach;
				?>
			</ul>

			<div class="footer__links__button">
				<a href="<?= get_field('podcast_url','option') ?>" target="_blank">Explore Our Podcasts</a>
			</div>

		</div>
	-->
		<div class="footer__links__col">
			<h3>Recent Blog Posts:</h3>
			<ul class="arrow">
				<?php
				$blog = wp_get_recent_posts( array('post_type'=>'post','posts_per_page'=>2));
				foreach($blog as $b):
				?>
				<li><a href="<?= get_the_permalink($b["ID"]) ?>"><?= get_the_title($b['ID']) ?></a></li>
				<?php
				endforeach;
				?>
			</ul>

			<div class="footer__links__button">
				<a href="<?= get_site_url() ?>/blog">Explore Our Blog</a>
			</div>
		</div>
	</div>
</section>
<section class="footer__nav">
	<div class="container">
		<div class="footer__nav__col">&copy;2010 - <script>document.write(new Date().getFullYear())</script> RHRosen Associates</div>
		<div class="footer__nav__col">
			<?php wp_nav_menu( array('menu' => 'Main Nav')); ?>
		</div>
		<div class="footer__nav__col">
			<ul class="icons">
				<li><a href="https://www.linkedin.com/in/bob-rosen-5440835/"><i class="el el-linkedin"></i></a></li>
				<li><a href="<?= get_site_url() ?>/resources#the_book"><i class="el el-book"></i></a></li>
			</ul>
		</div>
	</div>
</section>

</footer>

<div class="inquiry">
	<div class="handle">
		<div class="handle__icon"></div>
		<div class="handle__text">Let's Talk</div>
	</div>
	<div class="container">
		
		<h3>Let's Talk</h3>
		<?php echo do_shortcode('[contact-form-7 id="29" title="Inquiry Form"]'); ?>
		<!--
		<input type="text" placeholder="Name">
		<input type="email" placeholder="E-mail Address">
		<input type="text" placeholder="Phone">
		<input type="text" placeholder="Subject">
		<textarea placeholder="Message..."></textarea>
		<button type="submit">Send Message</button>
		-->
		<span class="contact-info">
		Telephone: (917) 863-5302<br>
		Email: <a href="mailto:RRosen@rhrosen.com">RRosen@rhrosen.com</a>
		<div class="inquiry__close"><i class="el el-remove"></i></div>
		</span>
		
	</div>
</div>

</div> <!-- END PAGE CONTAINER -->
<div id="modal">
    <!-- Page content -->
</div>

<div class="back_top_top"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/assets/js/jquery.waypoints.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/assets/js/lity.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/assets/tooltipster/tooltipster.bundle.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/assets/js/main.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>