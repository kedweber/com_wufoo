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

class ComWufooModelApiFields extends ComWufooModelApiDefault
{
	/**
	 * @param array $options
	 * @return object
	 */
	public function getRow(array $options = array())
	{
		$identifier         = clone $this->getIdentifier();
		$identifier->path   = array('database', 'row');
		$identifier->name   = 'api_'.KInflector::singularize($this->getIdentifier()->name);

		return $this->getService($identifier, $options);
	}

	/**
	 * @return object
	 */
	public function getItem()
	{
		$state = $this->_state;

		$data = $this->curl(
			array(
				'url' => 'https://ctaint.wufoo.com/api/v3/forms/'. $state->id .'/fields.json',
				'type' => 'fields'
			)
		);

		$this->_item = $this->getRow()->setData($data);

		return $this->_item;
	}
}