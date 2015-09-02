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
<div class="slideshow">
	<?php if (count($items)) { ?>
		<ul class="items list-unstyled">
			<?php foreach ($items as $key => $item) { ?>
				<li data-created="<?php echo JHTML::_('date', $item->created, JText::_('K2_DATE_FORMAT_LC2')); ?>">
					<?php echo $item->event->BeforeDisplay; ?>
					<?php echo $item->event->K2BeforeDisplay; ?>
					<?php if ($params->get('itemImage') && isset($item->image)) { ?>
						<div class="img">
							<img src="<?php echo $item->image; ?>" alt="<?php echo K2HelperUtilities::cleanHtml($item->title); ?>" />
						</div>
					<?php } ?>
				</li>
			<?php } // forach [items] ?>
		</ul>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 hidden-xs hidden-sm">
					<div class="item-titles">
						<ul class="list-unstyled">
							<?php foreach ($items as $key => $item) { ?>
							<li>
								<a href="#">
									<?php if ($params->get('itemTitle')) { ?><span><?php echo $item->title; ?></span><?php } ?>
								</a>
							</li>
							<?php } // forach [items] ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	<?php } // if [count items] ?>
</div>