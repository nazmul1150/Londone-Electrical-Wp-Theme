import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';
import Save from './save';

registerBlockType('nextland/accordion', {
    edit: Edit,
    save: Save,
});
 