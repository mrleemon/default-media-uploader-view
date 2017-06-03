<?php
/*
  Plugin Name: Default Media Uploader View
  Plugin URI: http://wordpress.org/plugins/default-media-uploader-view/
  Description: Sets "Uploaded to this post" instead of "All media items" as the default view in the media uploader
  Version: 1.0.8
  Author: leemon
  Text Domain: default-media-uploader-view
  License: GPLv2 or later

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, version 2, as 
  published by the Free Software Foundation.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

class DefaultMediaUploaderView {  

	/**
	 * Plugin instance.
	 *
	 * @since 1.0.8
	 *
	 */
	protected static $instance = null;


	/**
	 * Access this plugin’s working instance
	 *
	 * @since 1.0.8
	 *
	 */
	public static function get_instance() {
		
		if ( !self::$instance ) {
			self::$instance = new self;
		}

		return self::$instance;

	}

	
	/**
	 * Used for regular plugin work.
	 *
	 * @since 1.0.8
	 *
	 */
	public function plugin_setup() {

		add_action( 'wp_enqueue_media', array( $this, 'admin_enqueue_scripts' ) );
	
	}

	
	/**
	 * Constructor. Intentionally left empty and public.
	 *
	 * @since 1.0
	 *
	 */
	public function __construct() {}

 
	/**
	 * Enqueues scripts in the backend.
	 *
	 * @since 1.0
	 *
	 */
    public function admin_enqueue_scripts(){  

		wp_enqueue_script( 'default-media-uploader-view', plugins_url( '/default-media-uploader-view.js', __FILE__ ), array( 'jquery', 'media-editor' ), false, true );
		
    }

}

add_action( 'plugins_loaded', array ( DefaultMediaUploaderView::get_instance(), 'plugin_setup' ) );

?>