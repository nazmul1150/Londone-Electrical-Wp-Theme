<?php
function yourtheme_register_blocks() {
    register_block_type(get_template_directory() . '/inc/blocks/accordion');
}
add_action('init', 'yourtheme_register_blocks');
