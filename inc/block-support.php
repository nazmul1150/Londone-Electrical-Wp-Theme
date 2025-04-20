<?php
function mytheme_register_blocks() {
    $blocks = ['block-one'];
    foreach ($blocks as $block) {
        register_block_type( __DIR__ . "/theme-blocks/{$block}/block.json" );
    }
}
add_action('init', 'mytheme_register_blocks');


