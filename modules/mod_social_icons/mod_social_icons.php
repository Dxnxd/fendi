<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_footer
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$app		= JFactory::getApplication();
$date		= JFactory::getDate();
$cur_year	= JHtml::_('date', $date, 'Y');
$csite_name	= $app->get('sitename');
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_social_icons', $params->get('layout', 'default'));