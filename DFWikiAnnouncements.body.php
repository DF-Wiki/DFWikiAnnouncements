<?php

/** 
 * Hooks for DFWikiAnnouncements
 */
class DFWAHooks {
	public static function includeModules ($outPage) {
		$outPage->addModules('ext.DFWikiAnnouncements');
		return true;
	}
}

