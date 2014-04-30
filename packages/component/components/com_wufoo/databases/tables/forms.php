<?php

class ComWufooDatabaseTableForms extends KDatabaseTableDefault
{
	public function _initialize(KConfig $config)
	{
		$relationable = $this->getBehavior('com://admin/taxonomy.database.behavior.relationable');

		$config->append(array(
			'behaviors' => array(
				'com://admin/cck.database.behavior.elementable',
				$relationable,
				'com://admin/translations.database.behavior.translatable',
			)
		));

		parent::_initialize($config);
	}
}