=== MRP Nonce ===
Contributors: mpowell99
Tags: nonce, plugin
Requires at least: 3.0
Tested up to: 4.9
Requires PHP: 5.2.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A simple object-oriented implementation of Wordpress Nonces

== Description ==

Provides developers with an OO approach to Wordpress nonces. Implements
existing Wordpress Nonce functions inside a class named MRP_Nonce.

Nonces are created when an object is instantiated. Public functions allow
users to:
    *retrieve the nonce
    *view or modify "nonce names" (for form fields or URL parameters)
    *display the are-you-sure (ays) messages for certain actions
    *verify the validity of the nonce


== Installation ==

1. Upload `mrp-nonce/` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress


== Changelog ==

= 1.1 =
* Added a few functions, for nonce-verification and name-setting

= 1.0 =
* Initial Commit. Just a couple functions at this point.
