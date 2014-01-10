<?php

/*
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 */

namespace sioweb\contao\extensions\events;
use Contao;

/**
* @file config.php
* @author Sascha Weidner
* @version 3.0.0
* @package sioweb.contao.extensions.news
* @copyright Sioweb - Sascha Weidner
*/

class EventAuthor extends \Backend
{
	public function getEventAuthor($arrEvents, $arrCalendars, $intStart, $intEnd, $objModule)
	{
		foreach($arrEvents as $dKey => $date)
			foreach($date as $gKey => $group)
				foreach($group as $eKey => $event)
				{
					$user = \UserModel::findByPk($event['author']);
					if($user)
						$arrEvents[$dKey][$gKey][$eKey]['author'] = $user->row();
				}
		return $arrEvents;
	}
}
