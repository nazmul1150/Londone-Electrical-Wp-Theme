import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';
import Save from './save';

registerBlockType('londone-electrical/our-pricing', {
    edit: Edit,
    save: Save,
});
 