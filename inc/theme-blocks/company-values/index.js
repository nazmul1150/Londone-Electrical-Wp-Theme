import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';
import Save from './save';

registerBlockType('londone-electrical/company-values', {
    edit: Edit,
    save: Save,
});
 