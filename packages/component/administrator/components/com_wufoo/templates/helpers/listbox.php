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

class ComWufooTemplateHelperListbox extends ComDefaultTemplateHelperListbox
{
	/**
	 * @param array $config
	 * @return string
	 */
	public function forms($config = array())
	{
		$config = new KConfig($config);
		$config->append(array(
			'model'    =>  'api.forms',
			'value'    => 'hash',
			'text'     => 'name',
			'name'     => 'hash',
			'deselect' => true,
		));

		return parent::_listbox($config);
	}
}