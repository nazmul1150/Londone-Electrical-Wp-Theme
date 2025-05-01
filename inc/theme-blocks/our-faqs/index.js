import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';
import Save from './save';

registerBlockType('nextland/our-faqs', {
    edit: Edit,
    save: Save,
});
 