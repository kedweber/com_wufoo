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

class ComWufooDatabaseRowApi_field extends KDatabaseRowDefault
{
	public function setData($data, $modified = true)
	{
//		parent::setData($data, $modified);

		foreach($data as $key => $value)
		{
			$value = array_change_key_case($value, CASE_LOWER);

			if($value['page']) {
				$this->{strtolower($value['id'])} = $value;
			}
		}

		return $this;
	}
}