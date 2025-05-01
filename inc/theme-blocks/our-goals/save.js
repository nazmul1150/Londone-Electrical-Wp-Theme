import { useBlockProps } from '@wordpress/block-editor';

export default function Save({ attributes }) {
    const { tabs, activeTab } = attributes;

    return (
        <div {...useBlockProps.save()}>
            {tabs.map((tab, index) => (
                <div key={index}>
                    <h3>{tab.title}</h3>
                    {index === activeTab && <div>Content for {tab.title}</div>}
                </div>
            ))}
        </div>
    );
}
