<?php

defined('JPATH_BASE') or die;

class JFormFieldForm extends JFormField
{
	protected $type = 'Form';

	protected function getInput()
	{
		return KService::get('com://admin/wufoo.template.helper.listbox')->forms(array(
			'name' => $this->name,
			'selected' => $this->value
		));
	}
}