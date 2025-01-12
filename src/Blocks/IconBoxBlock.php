<?php

namespace SanIconBoxBlock\Blocks;

class IconBoxBlock
{
	private $blockPath = 'assets/blocks/build/icon-box';

	public function __construct()
	{
		add_action('init', [$this, 'register']);
		// add_action('enqueue_block_editor_assets', [$this, 'enqueueBlockEditorAssets']);
	}

	/**
	 * Registers the block.
	 *
	 * @return	void
	 *
	 * @hooked	action: `init` - 10
	 */
	public function register()
	{
		register_block_type(SANIBGB()->dir($this->blockPath));
	}

	/**
	 * Enqueues the block.
	 *
	 * @return	void
	 *
	 * @hooked	action: `enqueue_block_editor_assets` - 10
	 */
	function enqueueBlockEditorAssets()
	{
		$assetFile = SANIBGB()->dir("{$this->blockPath}/index.asset.php");
		if (!file_exists($assetFile)) return;

		$assetFileContent = require $assetFile;
		wp_enqueue_script(
			'san-icon-box',
			SANIBGB()->url("{$this->blockPath}/index.js"),
			$assetFileContent['dependencies'],
			$assetFileContent['version']
		);
	}
}
