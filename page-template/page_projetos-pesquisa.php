<?php
/*
 * Template Name: Projetos de Pesquisa
 */
get_header();
the_post();
get_template_part('page-template/general', 'header');
get_template_part('page-template/projetos-pesquisa', 'content');
get_template_part('page-template/projetos-pesquisa', 'content-list');
get_footer();