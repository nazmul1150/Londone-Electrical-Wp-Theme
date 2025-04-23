import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';
import Save from './save';

registerBlockType('nextland/hero-slider', {
    edit: Edit,
    save: Save,
});
 