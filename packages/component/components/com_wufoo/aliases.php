<?php

class ComWufooAliases extends KObject
{
    protected $_loaded = false;

    public function setLoaded($loaded)
    {
        $this->_loaded = $loaded;

        return $this;
    }

    public function setAliases()
    {
        if (!$this->_loaded) {
			$loader = KService::get('koowa:loader');

//			$loader->loadIdentifier('com://admin/wufoo.database.row.form');

            $maps = array(
                'com://site/wufoo.model.forms'	     			=> 'com://admin/wufoo.model.forms',
                'com://site/wufoo.model.entries'	     			=> 'com://admin/wufoo.model.entries',
            );

            foreach ($maps as $alias => $identifier) {
                KService::setAlias($alias, $identifier);
            }

            $this->setLoaded(true);
        }

        return $this;
    }
}