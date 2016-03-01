<?php
/*
 * Template Name: Assistentes
 */
get_header();
the_post();
get_template_part('page-template/general', 'header');
get_template_part('page-template/pesquisadores', 'content');

set_query_var('tipoPesquisador', 'assistente');
get_template_part('page-template/pesquisadores', 'content-list');

get_footer();