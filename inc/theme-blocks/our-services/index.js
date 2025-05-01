import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';
import Save from './save';

registerBlockType('londone-electrical/our-services', {
    edit: Edit,
    save: Save,
});
 