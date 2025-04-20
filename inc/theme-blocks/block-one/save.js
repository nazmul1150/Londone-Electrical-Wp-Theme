// save.js
import { useBlockProps } from '@wordpress/block-editor';

export default function Save() {
    return <div {...useBlockProps.save()}>Hello from Block One (Saved)</div>;
}
