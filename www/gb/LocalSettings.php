<?php

# This file was automatically generated by the MediaWiki installer.
# If you make manual changes, please keep track in case you need to
# recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# http://www.mediawiki.org/wiki/Manual:Configuration_settings

# If you customize your file layout, set $IP to the directory that contains
# the other MediaWiki files. It will be used as a base to locate files.
if( defined( 'MW_INSTALL_PATH' ) ) {
	$IP = MW_INSTALL_PATH;
} else {
	$IP = dirname( __FILE__ );
}

$path = array( $IP, "$IP/includes", "$IP/languages" );
set_include_path( implode( PATH_SEPARATOR, $path ) . PATH_SEPARATOR . get_include_path() );

require_once( "$IP/includes/DefaultSettings.php" );

// Mie Guidebook specific configuration
require_once( "$IP/../../conf/secrets.php" );
require_once( "$IP/../../conf/environment.php" );

# If PHP's memory limit is very low, some operations may fail.
# ini_set( 'memory_limit', '20M' );

if ( $wgCommandLineMode ) {
	if ( isset( $_SERVER ) && array_key_exists( 'REQUEST_METHOD', $_SERVER ) ) {
		die( "This script must be run from the command line\n" );
	}
}
## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename         = "Mie Guidebook";
$wgLogo             = 'http://www.mieguidebook.org/gb/mie130.png';

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs please see:
## http://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath       = "/gb";
$wgScriptExtension  = ".php";

$wgTmpDirectory         = "$IP/../../tmp";
$wgFileCacheDirectory   = $wgTmpDirectory;

// Use Clean URLs
$wgUsePathInfo      = true;
$wgArticlePath      = '/wiki/$1';

## UPO means: this is also a user preference option

$wgEnableEmail      = false;
$wgEnableUserEmail  = false; # UPO

$wgEmergencyContact = "info@mieguidebook.org";
$wgPasswordSender = "info@mieguidebook.org";

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = false;

## Database settings
$wgDBtype           = "mysql";
$wgDBserver         = MIEGB_DB_HOST;
$wgDBname           = MIEGB_DB_NAME;
$wgDBuser           = MIEGB_DB_USER;
$wgDBpassword       = MIEGB_DB_PASS;

# MySQL specific settings
$wgDBprefix         = "wiki_";

# MySQL table options to use during installation or update
$wgDBTableOptions   = "ENGINE=MyISAM, DEFAULT CHARSET=binary";

# Experimental charset support for MySQL 4.1/5.0.
$wgDBmysql5 = true;

## Shared memory settings
$wgMainCacheType = CACHE_NONE;
$wgMemCachedServers = array();

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads       = true;
$wgFileExtensions = array('jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg', 'pdf');
$wgUploadSizeWarning = 5242880;
# $wgUseImageMagick = true;
# $wgImageMagickConvertCommand = "/usr/bin/convert";

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "en_US.utf8";

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
# $wgHashedUploadDirectory = false;

## If you have the appropriate support software installed
## you can enable inline LaTeX equations:
$wgUseTeX           = false;

$wgLocalInterwiki   = strtolower( $wgSitename );

$wgLanguageCode = "en";

$wgSecretKey = MIEGB_KEY_WG_SECRET;


## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'standard', 'nostalgia', 'cologneblue', 'monobook':
wfLoadSkin('Vector');
wfLoadSkin('WPtouch');
$wgAllowUserSkin = false;

## Default skin: you can change the default skin.
## Use the internal symbolic names, ie 'vector', 'monobook':
if (preg_match("/(mobile|webos|opera mini)/i", $_SERVER['HTTP_USER_AGENT'])) {
    $wgDefaultSkin = 'wptouch';
} else {
    $wgDefaultSkin = 'vector';
}


## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
# $wgEnableCreativeCommonsRdf = true;
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";
# $wgRightsCode = ""; # Not yet used

$wgDiff3 = "/usr/bin/diff3";

# Cache settings
if (MIEGB_IS_DEV_ENV) {
    # Completely invalidates all cache - useful for dev mode
    $wgCacheEpoch = gmdate('YmdHis');
    $wgMessageCacheType = CACHE_NONE;
    $wgParserCacheType = CACHE_NONE;
    $wgSessionCacheType = CACHE_NONE;
} else {
    # When you make changes to this configuration file, this will make sure that cached pages are cleared
    $wgCacheEpoch = max( $wgCacheEpoch, gmdate( 'YmdHis', @filemtime( __FILE__ ) ) );
}

# No need for patrolled edits
$wgUseRCPatrol = false;

#Set Default Timezone
$wgLocaltimezone = "Asia/Tokyo";
$oldtz = getenv("TZ");
putenv("TZ=$wgLocaltimezone");

// EditTools
require_once("$IP/extensions/CharInsert/CharInsert.php");

// ImageMap
require_once("$IP/extensions/ImageMap/ImageMap.php");

// NoTitle
require_once("$IP/extensions/NoTitle/NoTitle.php");


// Lock down wiki so that only registered users can perform actions
// Also disable any API-based write functionality
$wgGroupPermissions['*']['edit'] = false;
$wgDisableAnonTalk = false;
$wgShowIPinHeader = false;
$wgEnableWriteAPI = false;
