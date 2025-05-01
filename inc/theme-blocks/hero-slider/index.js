import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';
import Save from './save';

registerBlockType('londone-electrical/hero-slider', {
    edit: Edit,
    save: Save,
});
 