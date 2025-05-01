import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';
import Save from './save';

registerBlockType('londone-electrical/our-awards', {
    edit: Edit,
    save: Save,
});
 