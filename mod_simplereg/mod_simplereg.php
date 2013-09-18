<?php
/**
 * @package     Joomla.site
 * @subpackage  mod_simplereg
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include the login functions only once
require_once __DIR__ . '/helper.php';

$params->def('greeting', 1);

$type  	= ModSimpleRegHelper::getType();
$return	= ModSimpleRegHelper::getReturnURL($params, $type);
$user		= JFactory::getUser();
$layout    = $params->get('layout', 'default');

// Logged users must load the logout sublayout
if (!$user->guest)
{
	$layout .= '_logout';
}

require JModuleHelper::getLayoutPath('mod_simplereg', $layout);