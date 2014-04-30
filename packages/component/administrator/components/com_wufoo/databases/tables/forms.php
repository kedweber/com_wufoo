<?php

class ComWufooDatabaseTableForms extends KDatabaseTableDefault
{
	public function _initialize(KConfig $config)
	{
		$relationable = $this->getBehavior('com://admin/taxonomy.database.behavior.relationable');

		$routable = $this->getBehavior('com://admin/routes.database.behavior.routable');

		$config->append(array(
			'behaviors' => array(
				'com://admin/moyo.database.behavior.sluggable',
				'identifiable',
				'orderable',
				'modifiable',
				'lockable',
				'com://admin/moyo.database.behavior.creatable',
				$relationable,
				'com://admin/cck.database.behavior.elementable',
				'com://admin/translations.database.behavior.translatable',
				$routable,
			)
		));

		parent::_initialize($config);
	}
}