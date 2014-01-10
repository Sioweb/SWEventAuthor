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

	public function insertTag($strTag)
	{
		$tag = explode('::',$strTag);
		if($tag[0] == 'author')
		{
			$user = \UserModel::findByPk($tag[1]);
			if($user)
				$user = $user->row();

			$tag = array_slice($tag,2);
			$varTags = array();
			foreach($tag as $key => $val)
				if($user[$val])
					$varTags[$val] = method_exists($this,$val) ? $this->$val($user[$val]) : $user[$val];

			if($varTags)
				return serialize($varTags);
		}
		return false;
	}
	
	private function email($value)
	{
		return \String::encodeEmail($value);
	}
}
