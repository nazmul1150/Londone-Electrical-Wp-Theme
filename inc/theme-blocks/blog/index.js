import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';
import Save from './save';

registerBlockType('londone-electrical/blog', {
    edit: Edit,
    save: Save,
});
 