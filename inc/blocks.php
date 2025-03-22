<?php

function mytheme_register_blocks() {
    $blocks = [
        'recent-posts',
        'testimonial',
        'pricing-table'
    ];

    foreach ($blocks as $block) {
        register_block_type(__DIR__ . '/blocks/' . $block);
    }
}
add_action('init', 'mytheme_register_blocks');


function mytheme_enqueue_block_assets() {
    wp_enqueue_script(
        'mytheme-block-scripts',
        get_template_directory_uri() . '/blocks/recent-posts/index.js',
        array('wp-blocks', 'wp-element', 'wp-editor'),
        filemtime(get_template_directory() . '/blocks/recent-posts/index.js')
    );

    wp_enqueue_style(
        'mytheme-block-styles',
        get_template_directory_uri() . '/blocks/recent-posts/style.css',
        array(),
        filemtime(get_template_directory() . '/blocks/recent-posts/style.css')
    );
}
add_action('enqueue_block_editor_assets', 'mytheme_enqueue_block_assets');
