<?php
/**
 * NoNumber Framework Helper File: Assignments: Languages
 *
 * @package         NoNumber Framework
 * @version         14.1.1
 *
 * @author          Peter van Westen <peter@nonumber.nl>
 * @link            http://www.nonumber.nl
 * @copyright       Copyright © 2014 NoNumber All Rights Reserved
 * @license         http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

defined('_JEXEC') or die;

/**
 * Assignments: Languages
 */
class NNFrameworkAssignmentsLanguages
{
	function passLanguages(&$parent, &$params, $selection = array(), $assignment = 'all')
	{
		$lang = JFactory::getLanguage();
		return $parent->passSimple($lang->getTag(), $selection, $assignment, 1);
	}
}
