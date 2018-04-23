=== MRP Nonce ===
Contributors: mpowell99
Tags: comments, spam
Requires at least: 3.0
Tested up to: 4.9
Requires PHP: 5.2.4
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A simple object-oriented implementation of Wordpress Nonces

== Description ==

Provides developers with an OOP approach to wordpress nonces. Implements all
existing Wordpress Nonce functions inside a class named MRP_Nonce.

WP Functions and their MRP-Nonce equivalents:
    *wp_create_nonce() -> Class constructor
    *wp_nonce_ays()    -> MRP_Nonce::are_you_sure($action)


== Installation ==

1. Upload `mrp-nonce/` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

== Screenshots ==

== Changelog ==

= 1.0 =
* Initial Commit. Just a couple functions at this point.

== Upgrade Notice ==
