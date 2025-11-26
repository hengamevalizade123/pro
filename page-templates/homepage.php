<?php
/* Template Name: Home Page */
get_header();

include get_template_directory() . '/template-parts/partials/home/svgs.php';
include get_template_directory() . '/template-parts/partials/home/hero.php';
include get_template_directory() . '/template-parts/partials/home/home-desc.php';
include get_template_directory() . '/template-parts/partials/home/home-video.php';
include get_template_directory() . '/template-parts/partials/home/steps.php';
include get_template_directory() . '/template-parts/partials/home/home-banner.php';
include get_template_directory() . '/template-parts/partials/home/home-blog.php';

get_footer();
