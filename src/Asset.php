<?php

namespace SanIconBoxBlock;

class Asset
{
	public static $instance = null;

	public static function getInstance()
	{
		self::$instance === null && self::$instance = new self;
		return self::$instance;
	}

	public function __construct()
	{
		add_action('admin_enqueue_scripts', [$this, 'enqueueAdminScripts']);
		add_action('wp_enqueue_scripts', [$this, 'enqueuePublicScripts']);
	}

	/**
	 * Enqueues admin styles and scripts.
	 *
	 * @param	string	$hookSuffix		Current admin page.
	 *
	 * @return	void
	 *
	 * @hooked	action: `admin_enqueue_scripts` - 10
	 */
	public function enqueueAdminScripts($hookSuffix)
	{
		wp_enqueue_style('sanibgb_admin', SANIBGB()->url('assets/admin/css/admin.css'), [], SANIBGB_VERSION);

		wp_enqueue_script('sanibgb_admin', SANIBGB()->url('assets/admin/js/admin.js'), [], SANIBGB_VERSION, true);
	}

	/**
	 * Enqueues public styles and scripts.
	 *
	 * @return	void
	 *
	 * @hooked	action: `wp_enqueue_scripts` - 10
	 */
	public function enqueuePublicScripts()
	{
		wp_enqueue_style('sanibgb_public', SANIBGB()->url('assets/public/css/public.css'), [], SANIBGB_VERSION);

		wp_enqueue_script('sanibgb_public', SANIBGB()->url('assets/public/js/public.js'), [], SANIBGB_VERSION, true);
	}
}
