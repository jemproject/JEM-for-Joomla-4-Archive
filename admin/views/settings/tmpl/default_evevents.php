<?php
/**
 * @version 2.3.17
 * @package JEM
 * @copyright (C) 2013-2023 joomlaeventmanager.net
 * @copyright (C) 2005-2009 Christoph Lukes
 * @license https://www.gnu.org/licenses/gpl-3.0 GNU/GPL
 */
// Create shortcut to parameters.


$params = $this->state->get('params');

$params = $params->toArray();

// This checks if the config options have ever been saved. If they haven't they will fall back to the original settings.
$editoroptions = isset($params['show_publishing_options']);

if (!$editoroptions):
$params['show_publishing_options'] = '1';
$params['show_article_options'] = '1';
$params['show_urls_images_backend'] = '0';
$params['show_urls_images_frontend'] = '0';
endif;

defined('_JEXEC') or die;
?>

<div class="width-100" style="padding: 10px 1vw;">
    <fieldset class="options-form">
		<legend><?php echo JText::_('COM_JEM_EVENTS'); ?></legend>
		<ul class="adminformlist">
			<?php foreach ($this->form->getFieldset('evevents') as $field): ?>
				<li><?php echo $field->label; ?> <?php echo $field->input; ?></li>
			<?php endforeach; ?>
		</ul>
		<ul class="adminformlist">
			<?php foreach ($this->form->getFieldset('basic') as $field): ?>
				<li><?php echo $field->label; ?> <?php echo $field->input; ?></li>
			<?php endforeach; ?>
		</ul>
	</fieldset>
</div>
