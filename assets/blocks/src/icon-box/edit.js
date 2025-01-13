import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';
import { InspectorControls, RichText } from '@wordpress/block-editor';
import { PanelBody, ColorPalette } from '@wordpress/components';

// Edit component for the Icon Box block
export default function Edit({ attributes, setAttributes })
{
	const { title, content, titleColor, contentColor } = attributes;

	return (
		<div {...useBlockProps()}>
			<InspectorControls>
				<PanelBody title={__('Settings', 'san-icon-box-block')}>
					<div>
						<label>
							{__('Title Color', 'san-icon-box-block')}
						</label>
						<ColorPalette
							value={titleColor}
							onChange={(newColor) => setAttributes({ titleColor: newColor })}
						/>
					</div>

					<div>
						<label>
							{__('Content Color', 'san-icon-box-block')}
						</label>
						<ColorPalette
							value={contentColor}
							onChange={(newColor) => setAttributes({ contentColor: newColor })}
						/>
					</div>
				</PanelBody>
			</InspectorControls>

			<div className="icon-box-content">
				<RichText
					tagName="h3"
					value={title}
					placeholder={__('Enter title...', 'san-icon-box-block')}
					onChange={newTitle => setAttributes({ title: newTitle })}
					style={{ color: titleColor }}
				/>

				<RichText
					tagName="p"
					value={content}
					placeholder={__('Enter content...', 'san-icon-box-block')}
					onChange={newContent => setAttributes({ content: newContent })}
					style={{ color: contentColor }}
				/>
			</div>
		</div>
	);
}