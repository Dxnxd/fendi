<?php
/**
 * @version		$Id: category.php 1273 2011-10-27 16:12:32Z lefteris.kavadas $
 * @package		K2
 * @author		JoomlaWorks http://www.joomlaworks.gr
 * @copyright	Copyright (c) 2006 - 2011 JoomlaWorks Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */
// no direct access
defined('_JEXEC') or die('Restricted access');
$title = JFactory::getApplication()->getMenu()->getActive()->title;
?>
<div class="category itemlist">
	<header class="title">
		<!--<h2><?php echo $this->escape($this->params->get('page_title')); ?></h2>-->
		<h2><?php echo $this->escape($title); ?></h2>
		<?php if ($this->params->get('catDescription')) { ?>
			<p><?php echo $this->category->description; ?></p>
		<?php } ?>
	</header>
	<?php if ((isset($this->leading) || isset($this->primary) || isset($this->secondary) || isset($this->links)) && (count($this->leading) || count($this->primary) || count($this->secondary) || count($this->links))) { ?>
		<div class="itemlist row">
			<?php foreach ($this->leading as $key => $item) { ?>
				<div class="item col-xs-12 col-sm-6 col-md-4">
					<?php
					// Load category_item.php by default
					$this->item = $item;
					echo $this->loadTemplate('item');
					?>
				</div>
			<?php } // foreach ?>
		</div>
	<?php } // if ?>
	<?php if (count($this->pagination->getPagesLinks())) { ?>
		<div class="k2Pagination">
			<?php if ($this->params->get('catPagination')) echo $this->pagination->getPagesLinks(); ?>
			<div class="clearfix"></div>
			<?php if ($this->params->get('catPaginationResults')) echo $this->pagination->getPagesCounter(); ?>
		</div>
	<?php } ?>
</div>