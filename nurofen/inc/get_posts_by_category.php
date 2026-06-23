<?php

global $post;

$args = [
    'post_type' => 'post',
    'posts_per_page' => '-1',
    'tax_query' => [
        [
            'taxonomy' => 'category',
            'field'    => 'slug',
            'terms'    => $post->post_name
        ]
    ]
];

$current_category_posts = new WP_Query($args);

