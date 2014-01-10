<?php

/*
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 */

/**
* @file config.php
* @author Sascha Weidner
* @version 3.0.0
* @package sioweb.contao.extensions.news
* @copyright Sioweb - Sascha Weidner
*/

$GLOBALS['TL_HOOKS']['getAllEvents'][] = array('EventAuthor', 'getEventAuthor');
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('EventAuthor', 'insertTag');