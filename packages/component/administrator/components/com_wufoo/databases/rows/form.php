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
	 * @param $data
	 * @param bool $modified
	 * @return $this|KDatabaseRowAbstract
	 */
	public function setData($data, $modified = true)
	{
		parent::setData($data, $modified);

		if($this->hash) {
			$this->fields = $this->getService('com://admin/wufoo.model.api.fields')->id($this->hash)->getItem()->toArray();
		}

		return $this;
	}
}