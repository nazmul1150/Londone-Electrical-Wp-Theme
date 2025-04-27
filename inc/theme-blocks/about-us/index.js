import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';
import Save from './save';

registerBlockType('nextland/about-us', {
    edit: Edit,
    save: Save,
});
 