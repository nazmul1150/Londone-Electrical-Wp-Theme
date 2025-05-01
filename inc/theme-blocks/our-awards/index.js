import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';
import Save from './save';

registerBlockType('nextland/our-awards', {
    edit: Edit,
    save: Save,
});
 