=== WP Heart Throb ===
Contributors: johnjamesjacoby, stuttter
Tags: jquery, heart, beat
Requires at least: 6.4
Requires PHP: 7.4
Tested up to: 7.1
Stable tag: 1.1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=9Q4F4EL5YJ62J

Adds a beating heart to your toolbar

== Description ==

Use this plugin to monitor the heart-rate of your WordPress installation.

WordPress uses an API called "Heartbeat" to monitor certain conditions and report to the user if something went wrong.

If your login cookie expires while you're writing a post, for example, Heartbeat will open a modal window and allow you to log in again.

This plugin adds a small menu item to the WordPress toolbar that does the following things:

* Beats every 1 second to remind you about the API
* Throbs every interval of the Heartbeat API to confirm connection is active

Future versions of this plugin could add a drop-down to this menu with more information.

== Screenshots ==

1. Toolbar

== Installation ==

* Download and install using the built in WordPress plugin installer.
* Activate in the "Plugins" area of your admin by clicking the "Activate" link.
* No further setup or configuration is necessary.

== Frequently Asked Questions ==

= Where can I get support? =

* Installation and usage: https://wordpress.org/support/plugin/wp-heart-throb/
* Bugs and enhancements: https://github.com/stuttter/wp-heart-throb/issues

= Where can I find documentation? =

https://github.com/stuttter/wp-heart-throb/

== Changelog ==

= 1.1.0 - 2026/09/16 =
* Avoid an undefined-array-key warning when Heartbeat data omits the plugin key
* Require PHP 7.4 and WordPress 6.4 or newer
* Declare compatibility with WordPress 7.1
* Add automated regression tests and contributor tooling

= 1.0.1 - 2017/01/03 =
* Improved throb animation

= 1.0.0 - 2016/12/23 =
* Initial release
