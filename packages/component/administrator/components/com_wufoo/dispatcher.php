<?php

class ComWufooDispatcher extends ComDefaultDispatcher
{
	/**
	 * @param KConfig $config
	 */
	public function _initialize(KConfig $config)
	{
		$config->append(array(
			'controller' => 'forms'
		));

		parent::_initialize($config);
	}
}