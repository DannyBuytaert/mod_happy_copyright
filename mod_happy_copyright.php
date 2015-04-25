<?php
/**
 * @package		mod_happy_copyright
 * @copyright	Copyright (C) 2015 freakout.be All rights reserved.
 * @author 		Danny Buytaert danny@freakout.be
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access
defined('_JEXEC') or die();

$app = JFactory::getApplication();
$date = JFactory::getDate();
// get current year
$year = JHtml::_('date', $date, 'Y');
// get parameters
$csiteName = $app->get('sitename');
$startYear = $params->get('startYear', '');
$showCopyright = $params->get('showCopyright', '');
$showSitename = $params->get('showSitename', '1');
// only add startyear if different
if ($startYear && $startYear != $year)
{
	$year = $startYear . '-' . $year;
}

// Create $copyright
$copyright = "";

if ($showCopyright == "show_symbol")
{
	$copyright = JText::_('MOD_HAPPY_COPYRIGHT_SYMBOL') . " ";
}
if ($showCopyright == "show_text_symbol")
{
	$copyright = JText::_('MOD_HAPPY_COPYRIGHT_TEXT') . " " . JText::_('MOD_HAPPY_COPYRIGHT_SYMBOL') . " ";
}

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_happy_copyright', $params->get('layout', 'default'));