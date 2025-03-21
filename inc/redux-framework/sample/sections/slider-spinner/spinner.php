<?php
/**
 * Redux Framework spinner config.
 * For full documentation, please visit: https://devs.redux.io/
 *
 * @package Redux Framework
 */

// phpcs:disable
defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Spinner', 'your-textdomain-here' ),
		'id'         => 'slider_spinner-spinner',
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'your-textdomain-here' ) . '<a href="https://devs.redux.io/core-fields/spinner.html" target="_blank">https://devs.redux.io/core-fields/spinner.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'          => 'opt-spinner',
				'type'        => 'spinner',
				'title'       => esc_html__( 'JQuery UI Spinner Example 1', 'your-textdomain-here' ),
				'desc'        => esc_html__( 'JQuery UI spinner description. Min:20, max: 100, step:20, default value: 100', 'your-textdomain-here' ),
				'default'     => '100',
				'min'         => '20',
				'step'        => '20',
				'max'         => '100',
				'suffix'      => '',
				'output_unit' => 'px',
				'output'      => array( '.content-area' => 'max-width' ),
			),
		),
	)
);
// phpcs:enable
