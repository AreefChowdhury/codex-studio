/**
 * WordPress dependencies
 */
import { __ } from '@wordpress/i18n';

export const DEFAULT_GRADIENT =
	'linear-gradient(135deg, rgb(6, 147, 227) 0%, rgb(20, 39, 109) 100%)';

export const DEFAULT_LINEAR_GRADIENT_ANGLE = 180;

export const HORIZONTAL_GRADIENT_ORIENTATION = {
	type: 'angular',
	value: 90,
};
export const DEFAULT_RADIAL_GRADIENT_POSITION = 'center center';

export const RADIAL_GRADIENT_ORIENTATION = [ { 
	type: 'shape',
	value: 'ellipse',
	at: {
		type: 'position',
		value: {
			x: {
				type: 'position-keyword',
				value: 'center'
			},
			y: {
				type: 'position-keyword',
				value: 'center'
			}
		}
	}
} ];

export const DEFAULT_RADIAL_GRADIENT_SHAPE = 'ellipse';
export const GRADIENT_OPTIONS = [
	{ value: 'linear-gradient', label: __( 'Linear', 'codex-blocks'  ) },
	{ value: 'radial-gradient', label: __( 'Radial', 'codex-blocks'  ) },
];

export const GRADIENT_POSITION_OPTIONS = [
	{ value: 'center top', label: __( 'Center Top', 'codex-blocks' ) },
	{ value: 'center center', label: __( 'Center Center', 'codex-blocks' ) },
	{ value: 'center bottom', label: __( 'Center Bottom', 'codex-blocks' ) },
	{ value: 'left top', label: __( 'Left Top', 'codex-blocks' ) },
	{ value: 'left center', label: __( 'Left Center', 'codex-blocks' ) },
	{ value: 'left bottom', label: __( 'Left Bottom', 'codex-blocks' ) },
	{ value: 'right top', label: __( 'Right Top', 'codex-blocks' ) },
	{ value: 'right center', label: __( 'Right Center', 'codex-blocks' ) },
	{ value: 'right bottom', label: __( 'Right Bottom', 'codex-blocks' ) },
];

export const DIRECTIONAL_ORIENTATION_ANGLE_MAP = {
	top: 0,
	'top right': 45,
	'right top': 45,
	right: 90,
	'right bottom': 135,
	'bottom right': 135,
	bottom: 180,
	'bottom left': 225,
	'left bottom': 225,
	left: 270,
	'top left': 315,
	'left top': 315,
};
