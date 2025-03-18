<?php
// phpcs:disable
defined( 'ABSPATH' ) || exit;

Redux::set_section( 
    $opt_name, 
    array(
        'title'  => esc_html__( 'Footer', 'londone-electrical' ),
        'id'     => 'footer',
        'desc'   => esc_html__( 'Footer section.', 'londone-electrical' ),
        'icon'   => 'el el-arrow-right',
        'priority' => 4,
        'fields' => array(
            array(
                'id'       => 'opt-text1',
                'type'     => 'text',
                'title'    => esc_html__( 'Example Text', 'londone-electrical' ),
                'desc'     => esc_html__( 'Example description.', 'londone-electrical' ),
                'subtitle' => esc_html__( 'Example subtitle.', 'londone-electrical' ),
                'hint'     => array(
                    'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
                )
            )
        )
    ) 
);