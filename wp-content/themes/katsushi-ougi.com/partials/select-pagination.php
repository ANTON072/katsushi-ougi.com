<?php

//総ページ数・現在のページ数取得
global $wp_query;
$max_pages = $wp_query->max_num_pages;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

select_pagination($max_pages, $paged);
