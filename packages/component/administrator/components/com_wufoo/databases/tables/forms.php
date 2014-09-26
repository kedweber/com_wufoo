<?php

class ComWufooDatabaseTableForms extends KDatabaseTableDefault
{
	public function _initialize(KConfig $config)
	{
		$relationable = $this->getBehavior('com://admin/taxonomy.database.behavior.relationable');

		$config->append(array(
			'behaviors' => array(
				'com://admin/moyo.database.behavior.sluggable',
				'identifiable',
				'modifiable',
				'lockable',
				'com://admin/moyo.database.behavior.creatable',
				$relationable,
				'com://admin/cck.database.behavior.elementable',
				'com://admin/translations.database.behavior.translatable',
			)
		));

		parent::_initialize($config);
	}
}