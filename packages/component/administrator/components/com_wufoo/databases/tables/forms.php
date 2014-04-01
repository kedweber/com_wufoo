<?php

class ComWufooDatabaseTableForms extends KDatabaseTableDefault
{
	public function _initialize(KConfig $config)
	{
		$config->append(array(
			'behaviors' => array(
				'identifiable',
				'com://admin/moyo.database.behavior.sluggable',
				'orderable',
				'com://admin/moyo.database.behavior.creatable',
				'modifiable',
				'lockable',
				'com://admin/translations.database.behavior.translatable',
			)
		));

		parent::_initialize($config);
	}
}