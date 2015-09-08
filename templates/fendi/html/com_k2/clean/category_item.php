<?php
/**
 * @version		$Id: category_item.php 1251 2011-10-19 17:50:13Z joomlaworks $
 * @package		K2
 * @author		JoomlaWorks http://www.joomlaworks.gr
 * @copyright	Copyright (c) 2006 - 2011 JoomlaWorks Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

// Define default image size (do not change)
K2HelperUtilities::setDefaultImage($this->item, 'itemlist', $this->params);

?>
<div class="inner" cdata-created="<?php echo JHTML::_('date', $this->item->created, JText::_('K2_DATE_FORMAT_LC2')); ?>" data-id="<?php echo $this->item->id; ?>" data-link="<?php echo $this->item->link; ?>">
	<figure class="img">
		<img src="<?php echo $this->item->image; ?>" alt="<?php if (!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption);
else echo K2HelperUtilities::cleanHtml($this->item->title); ?>" />
		<figcaption>
			<div class="title"><?php echo $this->item->title; ?></div>
			<div class="text"><?php echo K2HelperUtilities::wordLimit($this->item->introtext, $this->item->params->get('catItemIntroTextWordLimit')); ?></div>
		</figcaption>
	</figure>
</div>