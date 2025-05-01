import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';
import Save from './save';

registerBlockType('londone-electrical/our-goals', {
    edit: Edit,
    save: Save,
});
 