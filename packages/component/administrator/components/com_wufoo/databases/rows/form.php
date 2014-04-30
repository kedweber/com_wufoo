<?php
/**
 * Com
 *
 * @author      Dave Li <dave@moyoweb.nl>
 * @category    Nooku
 * @package     Socialhub
 * @subpackage  ...
 * @uses        Com_
 */
 
defined('KOOWA') or die('Protected resource');

class ComWufooDatabaseRowForm extends KDatabaseRowDefault
{
	/**
	 * @param $column
	 * @return string
	 */
	public function __get($column)
	{
		if($column == 'form_fields') {
			return $this->getService('com://admin/wufoo.model.api.fields')->id($this->hash)->getItem()->toArray();
		}

		return parent::__get($column);
	}
}