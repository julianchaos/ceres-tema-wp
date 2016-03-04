<?php
/*
 * Template Name: Publicações (livros)
 */
get_header();
the_post();
get_template_part('page-template/general', 'header');
get_template_part('page-template/publicacoes', 'content');

set_query_var('categoria', 'livros');
get_template_part('page-template/publicacoes', 'content-list');

get_footer();