<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_feed
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
?>
<div class="panel category-link">
	<div class="panel-body">
		<a href="<?php echo $url; ?>">
			<span class="img"><img src="<?php echo JURI::base(); ?>assets/data/<?php echo $img; ?>" alt="<?php echo $title; ?>" /></span>
			<span class="title"><?php echo $title; ?></span>
		</a>
	</div>
</div>