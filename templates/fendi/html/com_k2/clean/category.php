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
?>
<div class="category itemlist">
	<header class="title">
		<h2><?php echo $this->category->name; ?></h2>
		<?php if ($this->params->get('catDescription')) { ?>
			<p><?php echo $this->category->description; ?></p>
		<?php } ?>
	</header>
	<?php if ((isset($this->leading) || isset($this->primary) || isset($this->secondary) || isset($this->links)) && (count($this->leading) || count($this->primary) || count($this->secondary) || count($this->links))) { ?>
		<div class="itemlist">
			<?php foreach ($this->leading as $key => $item) { ?>
				<div class="item">
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