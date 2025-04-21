import { useBlockProps } from '@wordpress/block-editor';

export default function Edit({ attributes }) {
	const { tabs } = attributes;

	return (
		<div {...useBlockProps()}>
			{tabs.map((tab, index) => (
				<div key={index}>
					<strong>{tab.title}</strong>
					<p>{tab.content}</p>
				</div>
			))}
		</div>
	);
}
