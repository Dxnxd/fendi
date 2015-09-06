<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_footer
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<ul class="list-unstyled list-inline">
	<?php if ($params->get('facebook', 0)) { ?>
	<li>
		<a href="<?php echo $params->get('facebook_link', '#'); ?>"><i class="icon-facebook"></i></a>
	</li>
	<?php } ?>
	<?php if ($params->get('twitter', 0)) { ?>
	<li>
		<a href="<?php echo $params->get('twitter_link', '#'); ?>"><i class="icon-twitter"></i></a>
	</li>
	<?php } ?>
	<?php if ($params->get('gplus', 0)) { ?>
	<li>
		<a href="<?php echo $params->get('gplus_link', '#'); ?>"><i class="icon-gplus"></i></a>
	</li>
	<?php } ?>
	<?php if ($params->get('linkedin', 0)) { ?>
	<li>
		<a href="<?php echo $params->get('linkedin_link', '#'); ?>"><i class="icon-linkedin"></i></a>
	</li>
	<?php } ?>
	<?php if ($params->get('flicker', 0)) { ?>
	<li>
		<a href="<?php echo $params->get('flicker_link', '#'); ?>"><i class="icon-flicker"></i></a>
	</li>
	<?php } ?>
</ul>