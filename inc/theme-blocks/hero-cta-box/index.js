import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';
import Save from './save';

registerBlockType('nextland/hero-cta-box', {
    edit: Edit,
    save: Save,
});
 