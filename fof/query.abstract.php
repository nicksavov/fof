<?php
/**
 *  @package FrameworkOnFramework
 *  @copyright Copyright (c)2010-2012 Nicholas K. Dionysopoulos
 *  @license GNU General Public License version 3, or later
 */

// Protect from unauthorized access
defined('_JEXEC') or die();

/**
 * FrameworkOnFramework query base class; backported from Joomla! 1.7
 * 
 * FrameworkOnFramework is a set of classes whcih extend Joomla! 1.5 and later's
 * MVC framework with features making maintaining complex software much easier,
 * without tedious repetitive copying of the same code over and over again.
 */
abstract class FOFQueryAbstract
{
	/**
	 * Returns a new database query class
	 * 
	 * @return FOFQueryAbstract
	 */
	public static function &getNew($db = null)
	{
		if(is_null($db)) {
			$ret = JFactory::getDbo()->getQuery(true);
		} else {
			$ret = $db->getQuery(true);
		}
		
		return $ret;
	}
}