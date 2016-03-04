<?php
/*
 * Template Name: Publicações (artigos)
 */
get_header();
the_post();
get_template_part('page-template/general', 'header');
get_template_part('page-template/publicacoes', 'content');

set_query_var('categoria', 'artigos');
get_template_part('page-template/publicacoes', 'content-list');

get_footer();