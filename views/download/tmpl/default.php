<?php
/**
 * @version     1.0.0
 * @package     com_dlcenter
 * @copyright   Copyright (C) 2015. Alle rettigheder forbeholdes.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Michael Kirkegaard <michael_k@mail.dk> - http://
 */
// no direct access
defined('_JEXEC') or die;


?>
<?php if ($this->item) : ?>

    <div class="item_fields">
        <table class="table">
            <tr>
			<th><?php echo JText::_('COM_DLCENTER_FORM_LBL_DOWNLOAD_ID'); ?></th>
			<td><?php echo $this->item->id; ?></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_DLCENTER_FORM_LBL_DOWNLOAD_STATE'); ?></th>
			<td>
			<i class="icon-<?php echo ($this->item->state == 1) ? 'publish' : 'unpublish'; ?>"></i></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_DLCENTER_FORM_LBL_DOWNLOAD_CREATED_BY'); ?></th>
			<td><?php echo $this->item->created_by_name; ?></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_DLCENTER_FORM_LBL_DOWNLOAD_TITEL'); ?></th>
			<td><?php echo $this->item->titel; ?></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_DLCENTER_FORM_LBL_DOWNLOAD_EMNEID'); ?></th>
			<td><?php echo $this->item->emneid; ?></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_DLCENTER_FORM_LBL_DOWNLOAD_DOWNLOAD'); ?></th>
			<td>
			<?php $uploadPath = 'administrator' . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'com_dlcenter' . DIRECTORY_SEPARATOR . 'images/nordelektro/dlcenter/' . DIRECTORY_SEPARATOR . $this->item->download; ?>
			<a href="<?php echo JRoute::_(JUri::base() . $uploadPath, false); ?>" target="_blank"><?php echo $this->item->download; ?></a></td>
</tr>

        </table>
    </div>
    
    <?php
else:
    echo JText::_('COM_DLCENTER_ITEM_NOT_LOADED');
endif;
?>
