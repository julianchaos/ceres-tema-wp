<?php
/*
 * Template Name: Pesquisadores Associados
 */
get_header();
the_post();
get_template_part('page-template/general', 'header');
get_template_part('page-template/pesquisadores', 'content');

set_query_var('tipoPesquisador', 'associado');
get_template_part('page-template/pesquisadores', 'content-list');

get_footer();