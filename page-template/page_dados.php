<?php
/*
 * Template Name: Dados
 */
get_header();
the_post();
get_template_part('page-template/general', 'header');
get_template_part('page-template/dados', 'content');

get_template_part('page-template/dados', 'content-list');

get_footer();