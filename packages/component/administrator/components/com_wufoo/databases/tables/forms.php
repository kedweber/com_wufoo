<?php

class ComWufooDatabaseTableForms extends KDatabaseTableDefault
{
	public function _initialize(KConfig $config)
	{
		$config->append(array(
			'behaviors' => array(
				'identifiable',
				'sluggable',
				'creatable',
				'modifiable',
				'lockable'
			)
		));

		parent::_initialize($config);
	}
}