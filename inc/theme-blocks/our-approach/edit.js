import { useBlockProps } from '@wordpress/block-editor';

export default function Edit({ attributes }) {
	const { tabs } = attributes;

	return (
		<div {...useBlockProps()}>
			our approach
		</div>
	);
}
