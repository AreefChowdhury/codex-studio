<?php
/**
 * Header Main Row Options
 *
 * @package codex
 */

namespace codex;

use codex\Theme_Customizer;
use function codex\codex;

$settings = array(
	'sfwd-courses_archive_tabs' => array(
		'control_type' => 'codex_tab_control',
		'section'      => 'sfwd_courses_archive_layout',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'codex' ),
				'target' => 'sfwd_courses_archive_layout',
			),
			'design' => array(
				'label'  => __( 'Design', 'codex' ),
				'target' => 'sfwd_courses_archive_layout_design',
			),
			'active' => 'general',
		),
	),
	'sfwd-courses_archive_tabs_design' => array(
		'control_type' => 'codex_tab_control',
		'section'      => 'sfwd_courses_archive_layout_design',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'codex' ),
				'target' => 'sfwd_courses_archive_layout',
			),
			'design' => array(
				'label'  => __( 'Design', 'codex' ),
				'target' => 'sfwd_courses_archive_layout_design',
			),
			'active' => 'design',
		),
	),
	'info_sfwd-courses_archive_title' => array(
		'control_type' => 'codex_title_control',
		'section'      => 'sfwd_courses_archive_layout',
		'priority'     => 2,
		'label'        => esc_html__( 'Archive Title', 'codex' ),
		'settings'     => false,
	),
	'info_sfwd-courses_archive_title_design' => array(
		'control_type' => 'codex_title_control',
		'section'      => 'sfwd_courses_archive_layout_design',
		'priority'     => 2,
		'label'        => esc_html__( 'Archive Title', 'codex' ),
		'settings'     => false,
	),
	'sfwd-courses_archive_title' => array(
		'control_type' => 'codex_switch_control',
		'sanitize'     => 'codex_sanitize_toggle',
		'section'      => 'sfwd_courses_archive_layout',
		'priority'     => 3,
		'default'      => codex()->default( 'sfwd-courses_archive_title' ),
		'label'        => esc_html__( 'Show Archive Title?', 'codex' ),
		'transport'    => 'refresh',
	),
	'sfwd-courses_archive_title_layout' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'sfwd_courses_archive_layout',
		'label'        => esc_html__( 'Archive Title Layout', 'codex' ),
		'transport'    => 'refresh',
		'priority'     => 4,
		'default'      => codex()->default( 'sfwd-courses_archive_title_layout' ),
		'context'      => array(
			array(
				'setting'    => 'sfwd-courses_archive_title',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'normal' => array(
					'tooltip' => __( 'In Content', 'codex' ),
					'icon'    => 'incontent',
				),
				'above' => array(
					'tooltip' => __( 'Above Content', 'codex' ),
					'icon'    => 'abovecontent',
				),
			),
			'responsive' => false,
			'class'      => 'codex-two-col',
		),
	),
	'sfwd-courses_archive_title_inner_layout' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'sfwd_courses_archive_layout',
		'priority'     => 4,
		'default'      => codex()->default( 'sfwd-courses_archive_title_inner_layout' ),
		'label'        => esc_html__( 'Container Width', 'codex' ),
		'context'      => array(
			array(
				'setting'    => 'sfwd-courses_archive_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'sfwd-courses_archive_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.sfwd-courses-archive-hero-section',
				'pattern'  => 'entry-hero-layout-$',
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'standard' => array(
					'tooltip' => __( 'Background Fullwidth, Content Contained', 'codex' ),
					'name'    => __( 'Standard', 'codex' ),
					'icon'    => '',
				),
				'fullwidth' => array(
					'tooltip' => __( 'Background & Content Fullwidth', 'codex' ),
					'name'    => __( 'Fullwidth', 'codex' ),
					'icon'    => '',
				),
				'contained' => array(
					'tooltip' => __( 'Background & Content Contained', 'codex' ),
					'name'    => __( 'Contained', 'codex' ),
					'icon'    => '',
				),
			),
			'responsive' => false,
		),
	),
	'sfwd-courses_archive_title_align' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'sfwd_courses_archive_layout',
		'label'        => esc_html__( 'Course Title Align', 'codex' ),
		'priority'     => 4,
		'default'      => codex()->default( 'sfwd-courses_archive_title_align' ),
		'context'      => array(
			array(
				'setting'    => 'sfwd-courses_archive_title',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.sfwd-courses-archive-title',
				'pattern'  => array(
					'desktop' => 'title-align-$',
					'tablet'  => 'title-tablet-align-$',
					'mobile'  => 'title-mobile-align-$',
				),
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'left' => array(
					'tooltip'  => __( 'Left Align Title', 'codex' ),
					'dashicon' => 'editor-alignleft',
				),
				'center' => array(
					'tooltip'  => __( 'Center Align Title', 'codex' ),
					'dashicon' => 'editor-aligncenter',
				),
				'right' => array(
					'tooltip'  => __( 'Right Align Title', 'codex' ),
					'dashicon' => 'editor-alignright',
				),
			),
			'responsive' => true,
		),
	),
	'sfwd-courses_archive_title_height' => array(
		'control_type' => 'codex_range_control',
		'section'      => 'sfwd_courses_archive_layout',
		'priority'     => 5,
		'label'        => esc_html__( 'Container Min Height', 'codex' ),
		'context'      => array(
			array(
				'setting'    => 'sfwd-courses_archive_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'sfwd-courses_archive_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#inner-wrap .sfwd-courses-archive-hero-section .entry-header',
				'property' => 'min-height',
				'pattern'  => '$',
				'key'      => 'size',
			),
		),
		'default'      => codex()->default( 'sfwd-courses_archive_title_height' ),
		'input_attrs'  => array(
			'min'     => array(
				'px'  => 10,
				'em'  => 1,
				'rem' => 1,
				'vh'  => 2,
			),
			'max'     => array(
				'px'  => 800,
				'em'  => 12,
				'rem' => 12,
				'vh'  => 100,
			),
			'step'    => array(
				'px'  => 1,
				'em'  => 0.01,
				'rem' => 0.01,
				'vh'  => 1,
			),
			'units'   => array( 'px', 'em', 'rem', 'vh' ),
		),
	),
	'sfwd-courses_archive_title_elements' => array(
		'control_type' => 'codex_sorter_control',
		'section'      => 'sfwd_courses_archive_layout',
		'priority'     => 6,
		'default'      => codex()->default( 'sfwd-courses_archive_title_elements' ),
		'label'        => esc_html__( 'Title Elements', 'codex' ),
		'transport'    => 'refresh',
		'context'      => array(
			array(
				'setting'    => 'sfwd-courses_archive_title',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'settings'     => array(
			'elements'    => 'sfwd-courses_archive_title_elements',
			'title'       => 'sfwd-courses_archive_title_element_title',
			'breadcrumb'  => 'sfwd-courses_archive_title_element_breadcrumb',
			'description' => 'sfwd-courses_archive_title_element_description',
		),
	),
	'sfwd-courses_archive_title_color' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'sfwd_courses_archive_layout_design',
		'label'        => esc_html__( 'Title Color', 'codex' ),
		'default'      => codex()->default( 'sfwd-courses_archive_title_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.sfwd-courses-archive-title h1',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
		),
		'input_attrs'  => array(
			'colors' => array(
				'color' => array(
					'tooltip' => __( 'Color', 'codex' ),
					'palette' => true,
				),
			),
		),
	),
	'sfwd-courses_archive_title_description_color' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'sfwd_courses_archive_layout_design',
		'label'        => esc_html__( 'Description Colors', 'codex' ),
		'default'      => codex()->default( 'sfwd-courses_archive_title_description_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.sfwd-courses-archive-title .archive-description',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.sfwd-courses-archive-title .archive-description a:hover',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'hover',
			),
		),
		'input_attrs'  => array(
			'colors' => array(
				'color' => array(
					'tooltip' => __( 'Initial Color', 'codex' ),
					'palette' => true,
				),
				'hover' => array(
					'tooltip' => __( 'Link Hover Color', 'codex' ),
					'palette' => true,
				),
			),
		),
	),
	'sfwd-courses_archive_title_breadcrumb_color' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'sfwd_courses_archive_layout_design',
		'label'        => esc_html__( 'Breadcrumb Colors', 'codex' ),
		'default'      => codex()->default( 'sfwd-courses_archive_title_breadcrumb_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.sfwd-courses-archive-title .codex-breadcrumbs',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.sfwd-courses-archive-title .codex-breadcrumbs a:hover',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'hover',
			),
		),
		'input_attrs'  => array(
			'colors' => array(
				'color' => array(
					'tooltip' => __( 'Initial Color', 'codex' ),
					'palette' => true,
				),
				'hover' => array(
					'tooltip' => __( 'Link Hover Color', 'codex' ),
					'palette' => true,
				),
			),
		),
	),
	'sfwd-courses_archive_title_background' => array(
		'control_type' => 'codex_background_control',
		'section'      => 'sfwd_courses_archive_layout_design',
		'label'        => esc_html__( 'Archive Title Background', 'codex' ),
		'default'      => codex()->default( 'sfwd-courses_archive_title_background' ),
		'context'      => array(
			array(
				'setting'    => 'sfwd-courses_archive_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'sfwd-courses_archive_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => '#inner-wrap .sfwd-courses-archive-hero-section .entry-hero-container-inner',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip'  => __( 'Course Archive Title Background', 'codex' ),
		),
	),
	'sfwd-courses_archive_title_overlay_color' => array(
		'control_type' => 'codex_color_control',
		'section'      => 'sfwd_courses_archive_layout_design',
		'label'        => esc_html__( 'Background Overlay Color', 'codex' ),
		'default'      => codex()->default( 'sfwd-courses_archive_title_overlay_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.sfwd-courses-archive-hero-section .hero-section-overlay',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'color',
			),
		),
		'context'      => array(
			array(
				'setting'    => 'sfwd-courses_archive_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'sfwd-courses_archive_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'input_attrs'  => array(
			'colors' => array(
				'color' => array(
					'tooltip' => __( 'Overlay Color', 'codex' ),
					'palette' => true,
				),
			),
			'allowGradient' => true,
		),
	),
	'sfwd-courses_archive_title_border' => array(
		'control_type' => 'codex_borders_control',
		'section'      => 'sfwd_courses_archive_layout_design',
		'label'        => esc_html__( 'Border', 'codex' ),
		'default'      => codex()->default( 'sfwd-courses_archive_title_border' ),
		'context'      => array(
			array(
				'setting'    => 'sfwd-courses_archive_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'sfwd-courses_archive_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'settings'     => array(
			'border_top'    => 'sfwd-courses_archive_title_top_border',
			'border_bottom' => 'sfwd-courses_archive_title_bottom_border',
		),
		'live_method'     => array(
			'sfwd-courses_archive_title_top_border' => array(
				array(
					'type'     => 'css_border',
					'selector' => '.sfwd-courses-archive-hero-section .entry-hero-container-inner',
					'pattern'  => '$',
					'property' => 'border-top',
					'key'      => 'border',
				),
			),
			'sfwd-courses_archive_title_bottom_border' => array( 
				array(
					'type'     => 'css_border',
					'selector' => '.sfwd-courses-archive-hero-section .entry-hero-container-inner',
					'property' => 'border-bottom',
					'pattern'  => '$',
					'key'      => 'border',
				),
			),
		),
	),
	'info_sfwd-courses_archive_layout' => array(
		'control_type' => 'codex_title_control',
		'section'      => 'sfwd_courses_archive_layout',
		'priority'     => 10,
		'label'        => esc_html__( 'Archive Layout', 'codex' ),
		'settings'     => false,
	),
	'info_sfwd-courses_archive_layout_design' => array(
		'control_type' => 'codex_title_control',
		'section'      => 'sfwd_courses_archive_layout_design',
		'priority'     => 10,
		'label'        => esc_html__( 'Archive Layout', 'codex' ),
		'settings'     => false,
	),
	'sfwd-courses_archive_layout' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'sfwd_courses_archive_layout',
		'label'        => esc_html__( 'Archive Layout', 'codex' ),
		'transport'    => 'refresh',
		'priority'     => 10,
		'default'      => codex()->default( 'sfwd-courses_archive_layout' ),
		'input_attrs'  => array(
			'layout' => array(
				'normal' => array(
					'tooltip' => __( 'Normal', 'codex' ),
					'icon' => 'normal',
				),
				'narrow' => array(
					'tooltip' => __( 'Narrow', 'codex' ),
					'icon' => 'narrow',
				),
				'fullwidth' => array(
					'tooltip' => __( 'Fullwidth', 'codex' ),
					'icon' => 'fullwidth',
				),
				'left' => array(
					'tooltip' => __( 'Left Sidebar', 'codex' ),
					'icon' => 'leftsidebar',
				),
				'right' => array(
					'tooltip' => __( 'Right Sidebar', 'codex' ),
					'icon' => 'rightsidebar',
				),
			),
			'class'      => 'codex-three-col',
			'responsive' => false,
		),
	),
	'sfwd-courses_archive_content_style' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'sfwd_courses_archive_layout',
		'label'        => esc_html__( 'Content Style', 'codex' ),
		'priority'     => 10,
		'default'      => codex()->default( 'sfwd-courses_archive_content_style' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.post-type-archive-sfwd-courses',
				'pattern'  => 'content-style-$',
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'boxed' => array(
					'tooltip' => __( 'Boxed', 'codex' ),
					'icon' => 'gridBoxed',
				),
				'unboxed' => array(
					'tooltip' => __( 'Unboxed', 'codex' ),
					'icon' => 'gridUnboxed',
				),
			),
			'responsive' => false,
			'class'      => 'codex-two-col',
		),
	),
	'sfwd-courses_archive_columns' => array(
		'control_type' => 'codex_radio_icon_control',
		'section'      => 'sfwd_courses_archive_layout',
		'priority'     => 20,
		'label'        => esc_html__( 'Course Archive Columns', 'codex' ),
		'transport'    => 'refresh',
		'default'      => codex()->default( 'sfwd-courses_archive_columns' ),
		'input_attrs'  => array(
			'layout' => array(
				'2' => array(
					'name' => __( '2', 'codex' ),
				),
				'3' => array(
					'name' => __( '3', 'codex' ),
				),
				'4' => array(
					'name' => __( '4', 'codex' ),
				),
			),
			'responsive' => false,
		),
	),
	'sfwd-courses_archive_background' => array(
		'control_type' => 'codex_background_control',
		'section'      => 'sfwd_courses_archive_layout_design',
		'label'        => esc_html__( 'Site Background', 'codex' ),
		'default'      => codex()->default( 'sfwd-courses_archive_background' ),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => 'body.post-type-archive-sfwd-courses',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip' => __( 'Course Archive Background', 'codex' ),
		),
	),
	'sfwd-courses_archive_content_background' => array(
		'control_type' => 'codex_background_control',
		'section'      => 'sfwd_courses_archive_layout_design',
		'label'        => esc_html__( 'Content Background', 'codex' ),
		'default'      => codex()->default( 'sfwd-courses_archive_content_background' ),
		'live_method'  => array(
			array(
				'type'     => 'css_background',
				'selector' => 'body.post-type-archive-sfwd-courses .content-bg, body.post-type-archive-sfwd-courses.content-style-unboxed .site',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip' => __( 'Archive Content Background', 'codex' ),
		),
	),
);

Theme_Customizer::add_settings( $settings );

