<?php
/*
 * Template Name: Prestação de Serviços (consultorias)
 */
get_header();
the_post();
get_template_part('page-template/general', 'header');
get_template_part('page-template/prestacao-servicos', 'content');

set_query_var('categoria', 'consultoria');
get_template_part('page-template/prestacao-servicos', 'content-list');

get_footer();