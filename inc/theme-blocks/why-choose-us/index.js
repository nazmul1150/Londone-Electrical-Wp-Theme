import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';
import Save from './save';

registerBlockType('londone-electrical/why-choose-us', {
    edit: Edit,
    save: Save,
});
 