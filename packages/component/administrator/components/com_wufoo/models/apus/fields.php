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

		$identifier = clone $this->getIdentifier();
		$cache  = JFactory::getCache('com_wufoo', '');
        $cache->setCaching(true);
        $key =  md5($identifier .':'. $state->id);

		if($data = $cache->get($key)) {
			$data = unserialize($data);
		} else {
			$data = $this->curl(
				array(
					'url' => 'https://ctaint.wufoo.com/api/v3/forms/'. $state->id .'/fields.json',
					'type' => 'fields'
				)
			);

			$cache->store(serialize($data), $key);
		}

		$this->_item = $this->getRow()->setData($data);

		return $this->_item;
	}
}