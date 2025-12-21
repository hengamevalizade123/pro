<?php
/* Template Name: Home Page */
get_header();
?>
<div class="home-content">
	<?php
include get_template_directory() . '/template-parts/partials/home/svgs.php';
include get_template_directory() . '/template-parts/partials/home/hero.php';
include get_template_directory() . '/template-parts/partials/home/home-desc.php';
include get_template_directory() . '/template-parts/partials/home/home-video.php';
include get_template_directory() . '/template-parts/partials/home/steps.php';
include get_template_directory() . '/template-parts/partials/home/aggregator-command.php';
include get_template_directory() . '/template-parts/partials/home/faq.php';
include get_template_directory() . '/template-parts/partials/home/home-blog.php';
?>
</div>
<?php
get_footer();
