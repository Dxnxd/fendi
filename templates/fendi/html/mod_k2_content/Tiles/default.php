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
$lang = JFactory::getLanguage()->getTag();
?>
<div class="panel synopsis tiles">
	<div class="panel-body">
            <?php if ($module->showtitle != 0) { ?>
		<div class="desc">
			<h3 class="title"><?php echo ($lang == 'en-GB') ? 'Latest Products' : 'جدیدترین محصولات'; ?></h3>
		</div>
            <?php } ?> 
		<ul class="list-unstyled">
			<?php foreach ($items as $key => $item) { ?>
			<li class="tile" data-title="<?php echo $item->title; ?>" data-link="<?php echo $item->link; ?>">
				<figure class="img">
					<a href="<?php echo $item->categoryLink; ?>">
						<img src="<?php echo $item->image; ?>" alt="<?php echo $item->title; ?>" />
					</a>
				</figure>
			<?php } // foreach ?>
		</ul>
	</div>
</div>