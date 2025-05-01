import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';
import Save from './save';

registerBlockType('londone-electrical/cta-box', {
    edit: Edit,
    save: Save,
});
 