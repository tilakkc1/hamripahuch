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
	<section class="feature-news-section">
		<?php get_template_part('template-parts/posts/feature'); ?>
	</section>
	<section class="main-news-section">
		<?php get_template_part('template-parts/posts/main-news'); ?>
	</section>
	<section class="rajniti-section">
		<?php get_template_part('template-parts/posts/rajniti-news'); ?>
	</section>
	<section class="business-news-section">
		<?php get_template_part('template-parts/posts/business-news'); ?>
	</section>
	<section class="interviews-blog-section">
		<?php get_template_part('template-parts/posts/interviews-news'); ?>
	</section>
	<section class="karnali-headline-section">
		<?php get_template_part('template-parts/posts/karnali-headline'); ?>
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
	<section class="photo-feature-section">
		<?php get_template_part('template-parts/posts/photo-feature'); ?>
	</section>
</div>
<?php get_footer(); ?>