// edit.js
import { useBlockProps } from '@wordpress/block-editor';

export default function Edit() {
    return <div {...useBlockProps()}>Hello from Block One (Edit)</div>;
}
