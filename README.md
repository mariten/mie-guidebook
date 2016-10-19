[The Mie Guidebook](http://www.mieguidebook.org)
==================================================
**mie-guidebook** is a tweaked MediaWiki installation that powers the [Mie Guidebook](http://www.mieguidebook.org)

## Features
#### Technologies Used
* PHP 5.3 :elephant:
* MediaWiki 1.26
* MySQL 5.5
* Apache 2.2

#### Skins
Features two skins with custom color scheme and improved element margins

* Use MediaWiki default **Vector** skin for PC viewers
    * Tweaked color scheme, tabs, and margins for heading elements and list elements to match the legacy `miejets` skin from the Guidebook during its Mie JETs days
* Use [**WPtouch**](https://www.mediawiki.org/wiki/Skin:WPtouch) skin for smart phone viewers
    * Tweaked color scheme, styled image `thumb` elements to adjust to the width of the screen

#### Extensions
* [**ImageMap**](https://www.mediawiki.org/wiki/Extension:ImageMap):  Used to allow town names on the map from [Main Page](http://www.mieguidebook.org/wiki/Main_Page) to link directly to articles
* [**NoTitle**](https://www.mediawiki.org/wiki/Extension:NoTitle):  Used to hide `<h1>` page title of certain major pages ([Main Page](http://www.mieguidebook.org/wiki/Main_Page), [Life in Mie](http://www.mieguidebook.org/wiki/Life_in_Mie), etc)
* [**CharInsert**](https://www.mediawiki.org/wiki/Extension:CharInsert):  Used to allow easy input into articles of certain Unicode characters that are convenient to topic covering Japan (yen suymbol, macron vowels, nakaguro bullet character, and more)

#### Custom Tweaks
* Hacked a captcha into the account creation screen requiring the input of a certain Mie Prefecture city's name
* Uses clean `/wiki/` URLs, see the [rewrite rules](www/.htaccess)

## Special Thanks
I would like to send out a special thanks to all the many in the Mie community who have made contributions to the Guidebook over the years!
