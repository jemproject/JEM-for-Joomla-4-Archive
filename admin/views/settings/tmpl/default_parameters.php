<?php
/**
 * @version 2.3.17
 * @package JEM
 * @copyright (C) 2013-2023 joomlaeventmanager.net
 * @copyright (C) 2005-2009 Christoph Lukes
 * @license https://www.gnu.org/licenses/gpl-3.0 GNU/GPL
 */

$group = 'globalattribs';
defined('_JEXEC') or die;
?>
<div class="width-50 fltlft">
    <div class="width-100" style="padding: 10px 1vw;">
        <fieldset class="options-form">
			<legend><?php echo JText::_('COM_JEM_GLOBAL_PARAMETERS'); ?></legend>
			<ul class="adminformlist">
				<?php foreach ($this->form->getFieldset('globalparam') as $field): ?>
					<li><?php echo $field->label; ?> <?php echo $field->input; ?></li>
				<?php endforeach; ?>
			</ul>
		</fieldset>
	</div>
    <div class="width-100" style="padding: 10px 1vw;">
        <fieldset class="options-form">
			<legend><?php echo JText::_('COM_JEM_SETTINGS_LEGEND_VIEW_EDITEVENT'); ?></legend>
			<ul class="adminformlist">
				<li><?php echo $this->form->getLabel('global_show_ownedvenuesonly',$group); ?> <?php echo $this->form->getInput('global_show_ownedvenuesonly',$group); ?></li>
				<li><?php echo $this->form->getLabel('global_editevent_maxnumcustomfields',$group); ?> <?php echo $this->form->getInput('global_editevent_maxnumcustomfields',$group); ?></li>
			</ul>
		</fieldset>
	</div>
</div>
<div class="width-50 fltrt">
    <div class="width-100" style="padding: 10px 1vw;">
        <fieldset class="options-form">
			<legend><?php echo JText::_('COM_JEM_GLOBAL_PARAMETERS_ADVANCED'); ?></legend>
			<ul class="adminformlist">
				<?php foreach ($this->form->getFieldset('globalparam2') as $field): ?>
					<li><?php echo $field->label; ?> <?php echo $field->input; ?></li>
				<?php endforeach; ?>
			</ul>
		</fieldset>
	</div>
    <div class="width-100" style="padding: 10px 1vw;">
        <fieldset class="options-form">
			<legend><?php echo JText::_('COM_JEM_VENUES'); ?></legend>
			<ul class="adminformlist">
				<li><?php echo $this->form->getLabel('global_show_locdescription',$group); ?> <?php echo $this->form->getInput('global_show_locdescription',$group); ?></li>
				<li><?php echo $this->form->getLabel('global_show_detailsadress',$group); ?> <?php echo $this->form->getInput('global_show_detailsadress',$group); ?></li>
				<li><?php echo $this->form->getLabel('global_show_detlinkvenue',$group); ?> <?php echo $this->form->getInput('global_show_detlinkvenue',$group); ?></li>
				<li><?php echo $this->form->getLabel('global_show_mapserv',$group); ?> <?php echo $this->form->getInput('global_show_mapserv',$group); ?></li>
				<li><?php echo $this->form->getLabel('global_tld',$group); ?> <?php echo $this->form->getInput('global_tld',$group); ?></li>
				<li><?php echo $this->form->getLabel('global_lg',$group); ?> <?php echo $this->form->getInput('global_lg',$group); ?></li>
			</ul>
		</fieldset>
	</div>
    <div class="width-100" style="padding: 10px 1vw;">
        <fieldset class="options-form">
			<legend><?php echo JText::_('COM_JEM_SETTINGS_LEGEND_VIEW_EDITVENUE'); ?></legend>
			<ul class="adminformlist">
				<li><?php echo $this->form->getLabel('global_editvenue_maxnumcustomfields',$group); ?> <?php echo $this->form->getInput('global_editvenue_maxnumcustomfields',$group); ?></li>
			</ul>
		</fieldset>
	</div>
</div>
<div class="clr"></div>
