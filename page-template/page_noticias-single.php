<?php
get_header();
the_post();
set_query_var('title', 'Notícias');
get_template_part('page-template/general', 'header');
get_template_part('page-template/noticias', 'content-single');
get_footer();