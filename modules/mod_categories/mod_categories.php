<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_feed
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$title = $params->get('title', 0);
$url = $params->get('url', 0);
$img = $params->get('img', 0);

// Check if feed URL has been set
require JModuleHelper::getLayoutPath('mod_categories', $params->get('layout', 'default'));
