=== Spinner Anywhere By Rohit Gomgee ===
Contributors: rohit_gomgee
Tags: Spinner, Tool , CSS, Bootstrap
Requires at least: 3.0.1
Tested up to: 5.7
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This is simple WordPress plugin provides a shortcode for spinner and you can add it anywhere using shortcode.

== Description ==

Spinner Anywhere can be used to show the loading state in your projects. They're built only with HTML and CSS, meaning you don't need any JavaScript to create them. You will, however, need some custom JavaScript to toggle their visibility. Their appearance, alignment, and sizing can be easily customized with our amazing utility classes.

A few features:

*   Simple to use.
*   will not conflict with any other plugin
*   Simple CSS is used to create a spinner.
*   "Tested up to" is the highest version that you've *successfully used to test the plugin*.

**Shortcode attributes**

Through the shortcode it is possible to define some attribute for change the spinner's settings:

type can be grown/border, and you can choose any color you want the spinner to show. width and height with their particular suffix like px,rem, etc. no need to add semicolons at the end.

        [spinner type="grow" color="red" width="3rem" height="3rem"] 

in Template you can use this:

        <?php echo do_shortcode('[spinner type="border" color="#333333" width="3rem" height="3rem"]'); ?> 

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `spinner-anywhere.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= IS this plugin using any js.

No just used simple CSS to create a spinner.

= Is this compatible with all version of WP? =

Yes, it can be used with all versions of WP. Tested up to latest version 5.7

== Screenshots ==
01. Spinner type Grow
02. Spinner type Border

== Changelog ==

= 1.0 =
* First release of the plugin no Changelogs