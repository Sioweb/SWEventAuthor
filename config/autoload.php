<?php

/*
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 */

/**
* @file autoload.php
* @author Sascha Weidner
* @version 3.0.0
* @package sioweb.contao.extensions.events
* @copyright Sioweb - Sascha Weidner
*/


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'sioweb\contao\extensions\events'
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'sioweb\contao\extensions\events\EventAuthor'				=> 'system/modules/SWEventAuthor/classes/EventAuthor.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	//'sw_sozialshare'       => 'system/modules/SWSocialNews/templates',
));
