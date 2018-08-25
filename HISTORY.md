v2.0.1 :: Aug 25 2018
======================
* Updated login screen to no longer include instructions for former MieJETs.org users
* Added some minor security fixes
* Added partner link to KobeJET.com
* Fixed bug related to `CREDITS` file not existing

v2.0.0 :: Oct 20 2016
======================
* Migrated to `mieguidebook.org`
    * To preserve high SEO status of articles, create permanent 301 redirector on original Guidebook to `mieguidebook.org`
* Support clean URLs in wiki articles
* Upgrade to **MediaWiki 1.26** as well as supported plug-ins
    * Switch interface over to new MediaWiki-standard **Vector** skin
    * Perform same CSS color and style changes that were made to "Monobook" skin on the original Mie Guidebook
    * Adjust margins and appearance of the left-hand nav menu appropriately
* Added a mobile skin, which triggers when the user-agent is iOS or Android
    * Use the **WPtouch** skin for MediaWiki
* As part of migration away from `miejets.org`, de-affiliate the Guidebook with the JET Program
    * Use the Mie-in-a-circle design (originally from Mie Life Magazine) as the Guidebook icon
        * The old JETs-waving-Japanese-flag design no longer makes sense since site is no longer affiliate with JET
    * Remove content from the site related to the MieJETs forum or that is inherently tied to the JET Program
        * Remove any direct links to other `miejets.org` sites
        * Remove "JET Links" from the main page and other primary areas like the left-hand navbar
        * Create a new catch-all page for JET-specific content, but no need to include in prominent places like navbar
* Store database credentials in seperate file, not under the WWW root
* Added captcha to account creation screen that requires potential new users to answer a question about Mie Prefecture
    * This same question and mechanism was present on the old MieJETs forum, so mimic it on the new stand-alone Guidebook


v1.0.0 :: Jul 13 2010
======================
* Downloaded, installed, and configured **MediaWiki 1.15** to power the Mie Guidebook
    * Set up as new sub directory tree `/gb` under **miejets.org**
* Install extensions to further bend MediaWiki to the needs of the Mie Guidebook
    * Installed an extension that ties authentication to the MieJET **phpbb** forum login table
        * Along with this, disable direct account creation within MediaWiki, and disable anonymous edits
    * Install extension to allow easy one-click input of special ASCII or Unicode characters that will be useful in writing articles that contain Japanese text
        * This includes the macron vowels (used with Japanese long vowel sounds), the yen symbol, arrows, and more
    * Install extensions that allow for image maps (clicking on specific part of image leads to different page)
        * Use this with a large map of Mie on the `Main Page` that has every city/town in Mie written
        * Created map of Mie, with borders between each city/town, using **Irfanview**
    * Install a simple extension that allows a user to hide the titles on certain pages, useful on non-standard high visibility pages such as `Main Page`, `Life in Mie`, and more
* Created the `miejets` skin for MediaWiki
    * Based on `monobook`, the default skin, but with different color scheme and margins
    * Paid close attentions to margins between heading elements and list elements as there are a lot of these in the articles
        * Heading elements, in specific, had margins that confused the eyes (too much space below, not enough space above)
    * Used the background image that is used on the MieJETs forum as the primary background image for Guidebook as well
        * Thus, set body background color to be close to that color
    * Instead of using pure white for body background color, use slight grey color
        * With this, use pure white for *special* sections within articles like floating boxes, "Contents" boxes, and more
* Use custom-made "Mie JETs" logo, created for the Mie Guidebook by **Phil Gray**
* In addition to all listed above, a majority of the time spent setting up the Mie Guidebook was editing and creating articles
    * Converting existing text-based articles about cities in Mie to the vastly more format-friendly MediaWiki "wikitext"
    * Compiling new useful informational articles about living in Mie
    * Encouraging fellow Mie JETs and other foreign residents to expand articles that dealt with subjects on which they were authorities
* Looking back, the initial conversion of articles took 3 months, and then I spent an entire year (off and on, in my spare time) adding informational, thematic, or location-based articles that would allow foriegn residents in Mie to thrive during their stay
