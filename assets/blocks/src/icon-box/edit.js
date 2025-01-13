import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';
import { RichText } from '@wordpress/block-editor';

// Edit component for the Icon Box block
export default function Edit({ attributes, setAttributes })
{
	const { title, content } = attributes;

	return (
		<div {...useBlockProps()}>
			<div className="icon-box-content">
				<RichText
					tagName="h3"
					value={title}
					placeholder={__('Enter title...', 'san-icon-box-block')}
					onChange={newTitle => setAttributes({ title: newTitle })}
				/>

				<RichText
					tagName="p"
					value={content}
					placeholder={__('Enter content...', 'san-icon-box-block')}
					onChange={newContent => setAttributes({ content: newContent })}
				/>
			</div>
		</div>
	);
}