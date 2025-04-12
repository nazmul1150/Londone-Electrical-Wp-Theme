<?php
function mytheme_register_gutenberg_blocks() {
    // Register editor script compiled by wp-scripts
    wp_register_script(
        'mytheme-blocks',
        get_template_directory_uri() . '/build/blocks.js',
        [ 'wp-blocks', 'wp-element', 'wp-editor', 'wp-components' ],
        filemtime( get_template_directory() . '/build/blocks.js' )
    );

    // Automatically register all block.json files
    $blocks = glob( get_template_directory() . '/inc/blocks/*/block.json' );

    foreach ( $blocks as $block_json ) {
        register_block_type( dirname( $block_json ) );
    }
}
add_action( 'init', 'mytheme_register_gutenberg_blocks' );

