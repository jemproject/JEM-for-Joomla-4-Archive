<?php
/**
 * @version     2.3.17
 * @package     JEM
 * @copyright   Copyright (C) 2013-2023 joomlaeventmanager.net
 * @copyright   Copyright (C) 2005-2009 Christoph Lukes
 * @license     https://www.gnu.org/licenses/gpl-3.0 GNU/GPL
 */

defined('_JEXEC') or die; ?>

<?php //echo JHtml::_('sliders.panel', JText::_('JGLOBAL_FIELDSET_PUBLISHING'), 'publishing-details'); ?>

	<fieldset class="panelform">
		<ul class="adminformlist">

			<li><?php echo $this->form->getLabel('created_user_id'); ?>
			<?php echo $this->form->getInput('created_user_id'); ?></li>

			<?php if (intval($this->item->created_time)) : ?>
				<li><?php echo $this->form->getLabel('created_time'); ?>
				<?php echo $this->form->getInput('created_time'); ?></li>
			<?php endif; ?>

			<?php if ($this->item->modified_user_id) : ?>
				<li><?php echo $this->form->getLabel('modified_user_id'); ?>
				<?php echo $this->form->getInput('modified_user_id'); ?></li>

				<li><?php echo $this->form->getLabel('modified_time'); ?>
				<?php echo $this->form->getInput('modified_time'); ?></li>
			<?php endif; ?>

		</ul>
	</fieldset>

<?php $fieldSets = $this->form->getFieldsets('params');

foreach ($fieldSets as $name => $fieldSet) :
	$label = !empty($fieldSet->label) ? $fieldSet->label : 'COM_CATEGORIES_'.$name.'_FIELDSET_LABEL';
	echo JHtml::_('sliders.panel', JText::_($label), $name.'-options');
	if (isset($fieldSet->description) && trim($fieldSet->description)) :
		echo '<p class="tip">'.$this->escape(JText::_($fieldSet->description)).'</p>';
	endif;
	?>
	<fieldset class="panelform">
		<ul class="adminformlist">
			<?php foreach ($this->form->getFieldset($name) as $field) : ?>
				<li><?php echo $field->label; ?>
				<?php echo $field->input; ?></li>
			<?php endforeach; ?>

			<?php if ($name=='basic'):?>
				<li><?php echo $this->form->getLabel('note'); ?>
				<?php echo $this->form->getInput('note'); ?></li>
			<?php endif;?>
		</ul>
	</fieldset>
<?php endforeach; ?>
