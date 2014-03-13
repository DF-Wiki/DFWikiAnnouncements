<?php

require_once 'DFWikiAnnouncements.body.php';

$wgResourceModules['ext.DFWikiAnnouncements'] = array(
	'scripts' => array(
		'js/DFWikiAnnouncements.js',
	),
	'localBasePath' => __DIR__,
	'remoteExtPath' => 'DFWikiAnnouncements',
	'messages' => array(
		'dfwiki-announcements',
	),
);

$wgHooks['BeforePageDisplay'][] = 'DFWAHooks::includeModules';
$wgExtensionMessagesFiles['DFWikiAnnouncements'] = __DIR__ . '/DFWikiAnnouncements.i18n.php';


/*
 * Credits for Special:Version
 */

$wgExtensionCredits['DFWikiAnnouncements'][] = array(
	'path' => __FILE__,
	'name' => 'DFWikiAnnouncements',
	'author' =>'Lethosor',
	'url' => 'https://github.com/lethosor/DFWikiAnnouncements',
	'description' => 'Dwarf Fortress wiki announcements',
	'version'  => '0.0-alpha',
);




