import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';
import Save from './save';

registerBlockType('londone-electrical/breadcrumb', {
    edit: Edit,
    save: Save,
});
 