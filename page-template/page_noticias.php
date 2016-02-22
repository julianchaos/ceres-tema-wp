<?php
get_header();
set_query_var('title', 'Notícias');
get_template_part('page-template/general', 'header');
get_template_part('page-template/noticias', 'content');
get_footer();