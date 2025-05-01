import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';
import Save from './save';

registerBlockType('londone-electrical/hero-cta-box', {
    edit: Edit,
    save: Save,
});
 