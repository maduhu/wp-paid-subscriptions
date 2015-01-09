=== Paid Subscriptions ===
Contributors: strangerstudios, seravo
Tags: memberships, membership, authorize.net, ecommerce, paypal, stripe, braintree, restrict access, restrict content, directory site, payflow
Requires at least: 3.5
Tested up to: 4.1
Stable tag: 1.7.15.2

The easiest way to GET PAID with your WordPress site. Flexible content control by Membership Level, Reports, Affiliates and Discounts. This is fork of Paid Memberships Pro with idea to be more pluggable and modern.

== Description ==
Set up unlimited membership levels and provide restricted access to pages, posts, categories, videos, forums, downloads, support, single "a la carte" page access, and more. Paid Subscriptions is flexible enough to fit the needs of almost all online and offline businesses. It works great out of the box, but is easy for developers to customize to fit your needs.

Developers should get involved at [our GitHub page](https://github.com/seravo/wp-paid-subscriptions/).

= Integrate with The Most Popular Payment Gateways. =
Stripe, Authorize.net, Braintree Payments, and PayPal (Standard, Express, Website Payments Pro, Payflow, & Advanced)

= Works with Any Theme You Want. =
Your Existing Theme or a Popular Free or Premium Third-Party Theme.

= Infinitely Configurable, Unlimited Membership Levels. =
Set up the membership levels that best fit your business, whether they are Free, Paid, or Recurring Subscriptions (Annual, Monthly, Weekly, Daily). Offer Custom Trial Periods (Free Trial, Custom-length Trial, 'Introductory' Pricing)

= Easy-to-Use Admin Pages and Settings. =
1. Membership Access by Page/Post/Category.
2. Members List with CSV Export
3. Easy Payment Gateway Setup with testing mode.
4. Ever expanding list of Membership Reports
5. Membership Discounts with customizable price rules.

= Integrate with Top Third Party Tools. =
PMPro integrates with Mailchimp, Infusionsoft, Post Affiliate Pro, and many more popular third party tools.

= Free Add-ons to Customize and Extend PMPro. =
Extensions, sister plugins, and other bits of code to customize your implementation and help you integrate with 3rd party services or other plugins. All open source and available for free under the GPL v2 license.

[View the PMPro Add-Ons](http://www.paidmembershipspro.com/add-ons/)

== Installation ==

= Download, Install and Activate! =
1. Download the latest version of the plugin.
2. Unzip the downloaded file to your computer.
3. Upload the /paid-memberships-pro/ directory to the /wp-content/plugins/ directory of your site.
4. Activate the plugin through the 'Plugins' menu in WordPress.

= Complete the Initial Plugin Setup =
The plugin will walk you through initial setup - basic steps are outlined below.

1. Add one or more Membership Levels
2. Set up the PMPro Pages
3. Configure your Payment Gateway and SSL
4. Customize Email Settings
5. Review Advanced Settings (best left untouched).

[A tutorial video of the initial plugin setup is available here](http://www.paidmembershipspro.com/documentation/initial-plugin-setup/tutorial-video/).

[Written instructions on initial plugin setup are available here](http://www.paidmembershipspro.com/documentation/initial-plugin-setup/).

== Frequently Asked Questions ==

= I need help installing, configuring, or customizing the plugin. =
Please visit [our premium support site at http://www.paidmembershipspro.com](http://www.paidmembershipspro.com) for more documentation and our support forums.

= I found a bug in the plugin. =
Please post it in the [WordPress support forum](http://wordpress.org/tags/paid-memberships-pro?forum_id=10) and we'll fix it right away. Thanks for helping. 

= My site is broken or blank or not letting me log in after activating Paid Subscriptions =
This is typically caused by a conflict with another plugin that is trying to redirect around the login/register pages or trying to redirect from HTTP to HTTPS, etc.

To regain access to your site, FTP to your site and rename the wp-content/plugins/paid-memberships-pro folder to wp-content/plugins/paid-memberhsips-pro-d (or anything different). Now WP will not be able to find PMPro, and you can gain access to /wp-admin/ again. From there, visit the plugins page to fully deactivate Paid Subscriptions. (You'll want to rename the folder back to paid-memberhsips-pro again.)

Long term, you will need to find and fix the conflict. We can usually do this for you very quickly if you sign up for support at http://www.paidmembershipspro.com/pricing/ and send us your WP admin and FTP credentials.

= Does PMPro Support Multisite/Network Installs? =
"Supporting multisite" means different things to different people.

Out of the box PMPro will basically act as a stand alone plugin for each site. Each site has its own list of membership levels, members, payment settings, etc.

I've written a plugin [PMPro-Network](http://www.paidmembershipspro.com/add-ons/plugins-on-github/pmpro-network-multisite-membership/) that shows the basics for allowing users who signs up for a membership at one site to be able to create or reclaim their own site under the multisite setup. It's powerful stuff.

If you would like more help using PMPro on a network install, sign up for support at http://www.paidmembershipspro.com.

= Does PMPro Support X? =
Not sure? You can find out by doing a bit a research.

1. [Check our compatibility page](http://www.paidmembershipspro.com/compatibility/).
2. [Check our add ons](http://www.paidmembershipspro.com/add-ons/).
3. [Do a search on our site](http://www.paidmembershipspro.com/).
4. [Ask in the forums here](http://wordpress.org/tags/paid-memberships-pro?forum_id=10).

== Screenshots ==

1. Set up the membership levels that best fit your business, whether they are Free, Paid, or Subscriptions (Annual, Monthly, Weekly, Daily). Offer Custom Trial Periods (Free Trial, Custom-length Trial, 'Introductory' Pricing)
2. Easy to use Membership Access Settings by Page, Post, or Category. Shortcodes to display restricted content inline. Developer-friendly hooks to restrict access any way you need.
3. Members are WordPress Users. PMPro provides a unique interface to view, filter and search Members or export your Members List.
4. Offer Membership Discounts with specific price rules (restricted by level, unique pricing for each level, # of uses, expiration date.)

= 1.0 =
* This is the launch of the fork version.
