<?php
get_header();
$category = get_the_category();
set_query_var('title', "Notícias - {$category[0]->name}");

get_template_part('page-template/general', 'header');
get_template_part('page-template/noticias', 'content');
get_footer();