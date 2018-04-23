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

Nonces are created when an object is instantiated. Public methods allow
users to:
    *retrieve the nonce
    *view or modify "nonce names" (for form fields or URL parameters)
    *verify the validity of the nonce
    *display the are-you-sure (ays) messages for certain actions


== Installation ==

1. Upload `mrp-nonce/` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress


== Changelog ==

= 1.2.0 =
* Added the ability to set the action assigned to the nonce, in the
  class constructor
* Added ability to set the lifetime of the nonce

= 1.1.0 =
* Added a few methods for nonce-verification and name-setting

= 1.0.0 =
* Initial Commit. Just a couple methods at this point.
