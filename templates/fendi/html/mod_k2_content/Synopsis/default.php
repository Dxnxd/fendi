<?php
/**
 * @version		2.6.x
 * @package		K2
 * @author		JoomlaWorks http://www.joomlaworks.net
 * @copyright	Copyright (c) 2006 - 2014 JoomlaWorks Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */
// no direct access
defined('_JEXEC') or die;
?>
<div class="panel synopsis">
	<div class="panel-body">
		<?php foreach ($items as $key => $item) { ?>
			<div class="desc">
				<h3 class="title">
					<a href="<?php echo $item->link; ?>">
						<?php echo $item->title; ?>
					</a>
				</h3>
				<p><?php echo $item->introtext; ?></p>
				<?php if ($params->get('itemReadMore', 0)) { ?><a href="<?php echo $item->link; ?>"><?php echo JText::_('K2_READ_MORE'); ?></a><?php } ?>
			</div>
		<?php } ?>
	</div>
</div>