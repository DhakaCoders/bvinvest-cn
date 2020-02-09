=== Reviews and Rating – Google Business ===
Contributors: designextreme
Donate link: https://paypal.me/designextreme
Tags: review, reviews, rating, google reviews, google business, google rating, google places, structured data
Requires at least: 4.6
Tested up to: 5.3.1
Stable tag: 2.8
Requires PHP: 5.2.4
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Shortcode and widget for Google reviews and rating. Give customers a chance to leave their own rating/review; includes Structured Data for SEO.

== Description ==

Do you have a Google Business listing and would like to show your current customer reviews and rating within your website? 

This plugin will collect this data using your unique Google Place ID and display a well-formatted list or column/blocks of reviews, and some associated links to reviews and Google map listing, plus point customers to post their own review and rating on Google.

= Features: =

*   **Shortcode and Widget** for customer reviews on Google
*   Very high level of customization with more [added on request](https://designextreme.com/wordpress/)
*   Insert a list of customers’ reviews with ratings range, review length range, offset, limit, sorting, language and individual review(s) selection	
*   Shortcode link to reviews and current rating on Google
*   Shortcode link for customers to leave their rating and write a review on Google
*   Shortcode link to the business place/location with Google Maps
*   28 designs/themes with light/dark badge/list/columns, a narrow version, plus an option to remove styling
*   Live preview in Dashboard->Settings
*   Select your choice icon to replace Google’s generic icons
*   Customize appearance with columns, switch of review text, hide or overwrite avatars, date formatting, name formatting, and much more
*   Display the current rating as a number
*   Display the total number of reviews
*   **Structured Data** ([Schema.org](http://schema.org)) support to present clear business and review data to search engines to assist with SEO
*   **Demo mode** to help create your website before it goes live; without requiring Google API credentials
*   View all retrieved reviews and selectively hide reviews
*   See the latest formatted JSON data from Google’s API
*   Retrieves reviews in the background, collecting more through Google’s API over time
*   Clear cache and reset functionality to clear all plugin data
*   **Advanced** capability to import *all* review data from Google’s review popup HTML (inspecting the live HTML)
*   A comprehensive and *free* plugin with no upgrades for additional functionality

= Requirement: =

*   A free [Google API Key](https://developers.google.com/maps/documentation/javascript/get-api-key) and a [Place ID](https://developers.google.com/places/place-id).

= Recommendations: =

*   Please [set your business in Google](https://business.google.com) and find your [Place ID](https://developers.google.com/places/place-id) before using this plugin.
*   Create a [Google Billing Account](https://console.cloud.google.com/billing) to receive your *substantial and free* API Request allocation.

*This is my first public plugin, so [all comments](https://designextreme.com/wordpress/) are very welcome. I would also like to see your usage so I can introduce new themes.*

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/g-business-reviews-rating` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the ‘Plugins’ screen in WordPress
1. Use the **Settings**->**Reviews and Rating – Google Business** screen to configure the plugin with your Google API Key and the business’ Place ID
1. Once the Google Credentials are set, available shortcodes will appear to place in any page, post or use the widget


== Frequently Asked Questions ==

= How do I get a Google API Key? =

All the details for collecting your Google API Key can be found at: [Google API Key Guidelines](https://developers.google.com/maps/documentation/javascript/get-api-key).

Once your *Project* is set, you will need a new *API Key* with access to the **Places API**. As a restriction, set your host’s **IP Address** (not your website’s URL). Details of this value are listed in the Settings->Reviews and Rating page.

The Google API is required for this plugin to load the data from the Google API.

= How do I find my Places ID? =

You can location your unique *Place ID* using Google’s: [Place ID Finder](https://developers.google.com/places/place-id)

= I have more than 5 reviews, why can I only see 5 in this plugin? =

The Google API only offers a maximum of 5 relevant reviews at a time. Fortunately, this plugin will collect more reviews over time giving you more options to display your own selection of reviews from a larger pool. If you feel comfortable with the *HTML Inspector* in your browser, you can import all the reviews showing in the Google reviews popup.

= Why can’t I see any reviews on the website? =

Your first place to check is the *Retrieved Data* tab in Dashboard->Settings. If there is an error here, follow the advice offered by the Google API. If you can see some reviews listed, check for restrictions in your settings or shortcode that may limit the results. You can use the parameter: *errors=1* to report back potential issues in the front-end.

= I don’t have any reviews yet, how can I develop my new website without any data to preview? =

There’s a demo mode that will populate some reviews for you and allow for testing prior to going live.

== Screenshots ==

1. Example of the reviews listing with Light/Dark themes and the Badge theme (reviews hidden)
2. Dashboard view Google API, Place ID and general review display settings – Demo mode set
3. Shortcodes with some examples of the parameters
4. Details of the many shortcode parameters available to customise the display
5. Dashboard view of all retrieved reviews, with more added over time from Google
6. Dashboard view of current retrieved data using the Google API
7. Widget with extensive customization in the Dashboard
8. Dashboard view of advanced HTML import
9. Dashboard view of advanced import with 2 new reviews

== Changelog ==

= 2.8 =
* Added new narrow badge theme for narrow spaces to improve position of elements
* Added hide parameter for review count
* Improving the switch between demo and non-demo modes
* Improvements to styling and position of elements

= 2.7 =
* Added name format parameter (Thanks to Scott S.)
* Added overall link parameter (Thanks to @kodendigital and @hamudi)

= 2.6 =
* Fixed backwards compatibility for less recent WordPress versions for wp_date() function (Thanks to @Carret and @joshdraha)

= 2.5 =
* Fixed JavaScript Ajax call (Thanks to @gradlon)

= 2.4 =
* Improvement to JavaScript and style sheet loading
* Fixed activation error

= 2.3 =
* Added custom style sheet
* Added included and excluded word filter for review text

= 2.2 =
* Added responsive multi-column support for review listings
* Improved theme interface in Dashboard->Settings
* Added a live preview for smaller screens
* Improved theme selection dropdown
* Added justified reviews text when matching class specified as a parameter
* Switched default heading from H3 back to H2 (correction from 2.1)

= 2.1 =
* Added a parameter to overwrite the HTML element tags

= 2.0 =
* Added Structured Data (schema.org) with supporting functionality
* Added a live preview of shortcode output in Dashboard->Settings
* Added icon and logo image selection from Media Library
* Switching HTML-only rating stars to SVG vector-images to offer a more consistent experience
* Added support for uploading SVG images
* Added review translation option for HTML import
* Reset now available for reviews only
* Improved language support
* Improved tab navigation in Dashboard
* Improved behaviour of hide/show reviews in Widget

= 1.32 =
* Improved number parse for imported rating numbers
* Added a js-links fall-back to circumvent conflicts with event tracking of links starting with a hash
* Improved consistency of review excerpt trimming
* Added shortcode examples of Google icon to links/buttons

= 1.31 =
* Restored no excerpt when non-numeric (or < 20) value is set as a parameter
* Added review/reviews parameter description in Dashboard->Settings list

= 1.30 =
* Fixed empty shortcode attribute error (Thanks to @markima75)
* Improved styling in Advanced tab in Dashboard->Settings for some screen sizes

= 1.29 =
* Added a shortcode parameter to override the review/reviews word in the summary (Thanks to @sebastienrenaudeau)
* Improved logic for review limits so Dashboard->Settings value is a true fallback
* Improved language support in Dashboard and for review/reviews word

= 1.28 =
* Improved language filtering in shortcode (Thanks to @niseadel)
* Added language filtering in widget
* Improved Badge theme styling - star alignment and spacing

= 1.27 =
* Fixed PHP tag closure shortening in Settings template file (Thanks to @indekssolutions)
* Added inline style for review meta (author name, rating, date)
* Added date formatting support to override relative time

= 1.26 =
* Fixed bug for minimum rating when set to 5 in shortcode

= 1.25 =
* Added translatable relative time words (Thanks to @chris-kns)
* Added option to hide or override business name (Thanks to @chris-kns)

= 1.24 =
* Added random shuffle for sorting reviews
* Added functionality to clear cache and retrieve current Google data
* Improved Widget customization in Dashboard
* Added new attribution parameter to force light or dark background version

= 1.23 =
* Change to checking of cron task (Thanks to @designermark)

= 1.22 =
* Checking for existence of language review text array value

= 1.21 =
* Fixed two Safari issues: SVG images not appearing and main rating star width is now wider (Thanks to @sterlingokura and @nouvellessubstances)
* Fixed specific review ID listing bug (Thanks to @sterlingokura)

= 1.20 =
* Change to setting cache to help show reviews after initial setup
* Added a parameter to show/hide errors and warnings in the shortcode

= 1.19 =
* Changed review ordering for IDs
* Fixed bug with empty attributes (Thanks to @marameodesign)
* Added a numeric limit check in review filter

= 1.18 =
* Added new themes to Widget
* Added plugin reset functionality
* Added review sorting for shortcode and widget
* Set Advanced HTML import to pre-select new reviews

= 1.17 =
* Improved Google API Key error notice (Thanks to @minks32578)
* Improved tab navigation, with last active section visible upon return
* Added none/some/all reviews to assist with setting the review limit

= 1.16 =
* Added a comprehensive list of shortcode parameters
* Fixed theme shortcode parameter
* Added language filter
* Added a checklist for the advanced section (Thanks to @minks32578)
* Minor fixes, usability and design alterations

= 1.15 =
* Added two new themes for a more compact Badge appearance
* Allowing a zero review limit to intentionally hide all reviews
* Added new shortcode parameters to handle layout
* Improvements to styling

= 1.14 =
* Checking for existence of array keys in early Google review data
* Fixed regular expression for customised icon string
* Removed button class attribute when parameter is set

= 1.13 =
* Fixed error in Google write review and view reviews link class attribute

= 1.12 =
* Fixed JavaScript context error in handling the HTML import

= 1.11 =
* Improvements to navigation menu in Dashboard
* Refreshing relative times from retrieved data

= 1.10 =
* Minor design and functionality changes
* Added a missing shortcode attribute (Thanks to @conceptio)

= 1.9 =
* Advanced - Improved stability of HTML Import functionality
* Changes to design

= 1.8 =
* Advanced - Added import functionality from the HTML in Google Reviews popup
* Changed default sort order to remain more constant over time
* Other minor improvements to design and functionality

= 1.7 =
* Updated definition of dummy data for Demo Mode

= 1.6 =
* Added set of all data prior to displaying Dashboard->Settings

= 1.5 =
* Added a refresh of data upon plugin upgrade

= 1.4 =
* Improved shortcode customization
* Improved the switch between modes
* Added widget with live preview support

= 1.3 =
* Added show/hide review functionality

= 1.2 =
* Fixed a style issue in Dashboard->Settings

= 1.1 =
* Added Demo mode
* Extended review listing functionality

= 1.0 =
* Initial version

== Upgrade Notice ==

== Getting started with Google API ==

In order to run this plugin, you will need a Google API Key and to locate your Place ID

* [Google API Key Guidelines](https://developers.google.com/maps/documentation/javascript/get-api-key)
* [Place ID Finder](https://developers.google.com/maps/documentation/javascript/examples/places-placeid-finder)
