=== Default Media Uploader View ===
Contributors: leemon
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=oscarciutat%40gmail%2ecom
Tags: media, upload, attachments, admin, filter, view, images, posts
Requires at least: 3.5
Tested up to: 4.8
Stable tag: 1.0.8
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Sets "Uploaded to this post" instead of "All media items" as the default view in the media uploader.

== Description ==
WordPress 3.5 introduced an entirely new media uploader which streamlined the way one handles and uploads images to posts. Unfortunately, 
since then, the default view for the media library is "All media items" instead of "Uploaded to this post". This plugin sets "Uploaded to this post" as the default view.

== Installation ==
1. Upload the extracted plugin folder and contained files to your `/wp-content/plugins/` directory
2. Activate the plugin through the "Plugins" menu in WordPress

== Changelog ==
= 1.0.8 =
* Code refactoring

= 1.0.7 =
* Hooking the plugin's enqueue function into "wp_enqueue_media" instead of "admin_enqueue_scripts" (Props to barryceelen)

= 1.0.6 =
* Fixed native gallery issue (Props to kudlav)

= 1.0.5 =
* Fixed script dependencies

= 1.0.4 =
* Added Underscore script dependency (Props to matthewmcvickar)

= 1.0.3 =
* Added support for the WooCommerce Product Gallery modal (Props to Sphinxxxx)

= 1.0.2 =
* Text domain changed to match the plugin's slug
* Other minor changes

= 1.0.1 =
* Minor changes

= 1.0 =
* Initial release