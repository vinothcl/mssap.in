=== Freshdesk (official)===
Contributors: freshdeskintegration
Tags: freshdesk, helpdesk, contact form, knowledge base, customer support software, 
Requires at least: 3.4
Tested up to: 5.7
Stable tag: 2.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


Quickly embed the Freshdesk help widget, convert WordPress comments to tickets and seamlessly log your WordPress users in to your suppport portal.

== Description ==

With the Freshdesk (official) plugin, you can now:

* quickly integrate the help widget in your WordPress site or blog
* convert comments on your WordPress site into Freshdesk tickets
* allow users on WordPress to seamlessly login to your support portal via SSO


== Installation ==

* For an automatic installation through WordPress

1. Go to the Plugins page in your WordPress admin section.
2. Click the 'Add new' button.
3. Search for the 'Freshdesk (official)' plugin.
4. Click 'Install now' and activate the plugin.


== Manual installation ==

1. Download the latest version of 'Freshdesk (official)'  plugin from the WordPress plugin directory.
2. Extract the zip and upload the wp-freshworks-widget directory to your /wp-content/plugins directory.
3. Go to the 'Plugins' page in your admin section and activate the plugin.
4. You now have a new admin menu 'Freshdesk' in your WordPress admin menu bar. Click on it and configure settings.


== Frequently asked questions ==

= 1. What is the help widget? =

The help widget allows you to embed a contact form or help articles in your website. To use the help widget, you need to create a Freshdesk account by [signing up here](https://freshdesk.com/signup?utm_source=wordpressplugin&utm_medium=pluginreadme). 

= 2. Where can I find the help widget code? = 

Once you've logged in to your Freshdesk account, you can go to **Admin** > **Widgets** and create a new widget. You can click the 'Embed code' tab to copy the code from your Freshdesk account.

You can then paste it in the plugin settings page in WordPress. This will make the widget appear on all pages in your WordPress account.

= 3. Where do I find the SSO shared secret key? = 

  The SSO shared secret will be available in your Freshdesk account's **Admin** -> **Security** page.


== Screenshots == 

1. The Freshdesk help widget
2. Freshdesk (official) plugin's settings page in WordPress


== Changelog ==
= 2.2 =
  Introducing support for Freshworks SSO via OAuth.

= 2.1 =
  Freshdesk URL fields are made to be synce with each other.

= 2.0 =
  Updated code to match WordPress latest coding standards.
  Reorganized the settings page.
  Updated content in the settings page to make things easier to understand.
  And we're back! :)
= 1.8.4 =
  minor sso bug fix.
= 1.8.3 =
  fixed redirects not working when http protocol is not allowed in the redirect parameter.
= 1.8.2 =
  replaced split with explode to support php7
= 1.8.1 =
  Fixed minor bugs.
= 1.8 =
  Security fix for open redirect vulnerablity. Now users are required to configure all the portal urls in the settings page.
= 1.7 =
  Added option to enable/disable sso.
  Logging out of wordpress no longer logs out the Freshdesk session.
  Added validations for the settings page.
  Fixed the error showing up on the plugin settings page.
= 1.6 =
  Fix the SSO login redirect to Freshdesk and on wordpress logout, logout of Freshdesk as well.
= 1.5 =
  Includes fix for SSO and Vanity URL redirect.
= 1.4 =
  Bug fix for SSO and Vanity URL redirect.
= 1.3 =
 Added comment link to ticket description
= 1.2 =
 Fix for the error message("The plugin does not have a valid header.") on enabling plugin
= 1.1 =
Previous revision.
Bug Fix:
 - Freshdesk remote log-in failing for new users.
 - Sign-out from freshdesk does not logout wordpress session.
= 1.0 =
First Release Version.