<?php
function mytheme_register_blocks() {
    $blocks = [ 'hero', 'testimonial' ]; // block folder names

    foreach ( $blocks as $block ) {
        register_block_type( __DIR__ . "/blocks/$block" );
    }
}
add_action( 'init', 'mytheme_register_blocks' );

