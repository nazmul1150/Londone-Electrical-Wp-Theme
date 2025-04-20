import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';
import Save from './save';

registerBlockType('mytheme/block-one', {
    edit: Edit,
    save: Save
});
