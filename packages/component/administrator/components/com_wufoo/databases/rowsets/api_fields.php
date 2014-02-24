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

class ComWufooDatabaseRowsetApi_fields extends ComWufooDatabaseRowsetDefault
{
	protected function _initialize(KConfig $config)
	{
		$config->append(array(
			'identity_column' => 'hash'
		));

		parent::_initialize($config);
	}
}