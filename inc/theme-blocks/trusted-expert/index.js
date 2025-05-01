import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';
import Save from './save';

registerBlockType('londone-electrical/trusted-expert', {
    edit: Edit,
    save: Save,
});
 