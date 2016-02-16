<?php
/*
 * Template Name: Home
 */
get_header();
the_post();
get_template_part('page-template/home', 'carousel');
get_template_part('page-template/home', 'content');
get_footer();