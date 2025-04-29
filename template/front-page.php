<?php get_header();
/*
 *Template Name: Hamro Pahuch Home
 */
?>
<div class="container">
	<section class="radio-section">
		<?php get_template_part('home-parts/radio/radio'); ?>
	</section>
	<section class="banner-news-section">
		<?php get_template_part('template-parts/posts/banner-block'); ?>
	</section>
		<?php get_template_part('template-parts/posts/feature'); ?>
	<section class="main-news-section">
		<?php get_template_part('template-parts/posts/main-news'); ?>
	</section>
	<section class="local-section">
		<?php get_template_part('template-parts/posts/local-news'); ?>
	</section>
	<section class="rajniti-news-section">
		<?php get_template_part('template-parts/posts/rajniti-news'); ?>
	</section>
	<section class="sahakari-accident-section">
		<?php get_template_part('template-parts/posts/sahakari-accident'); ?>
	</section>
	<section class="interviews-blog-section">
		<?php get_template_part('template-parts/posts/interviews-news'); ?>
	</section>
	<section class="sampadakiya-section">
		<?php get_template_part('template-parts/posts/sampadakiya'); ?>
	</section>
	<section class="pahuch-headline-section">
		<?php get_template_part('template-parts/posts/bisesh-pahuch'); ?>
	</section>
	<section class="entertainment-news-section">
		<?php get_template_part('template-parts/posts/entertainment-news'); ?>
	</section>
	<section class="sports-international-section">
		<?php get_template_part('template-parts/posts/sports-news'); ?>
	</section>
	<section class="edu-hel-agri-section">
		<?php get_template_part('template-parts/posts/edu-hel-agri-news'); ?>
	</section>
	<section class="edu-hel-agri-section">
		<?php get_template_part('template-parts/posts/technology-news'); ?>
	</section>
</div>
<?php get_footer(); ?>