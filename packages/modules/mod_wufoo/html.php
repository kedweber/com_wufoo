<?php

/**
 * ModBottom
 *
 * @author 		Joep van der Heijden <joep.van.der.heijden@moyoweb.nl>
 * @category	
 * @package 	
 * @subpackage	
 */
 
defined('KOOWA') or die('Restricted Access');

class ModWufooHtml extends ModDefaultHtml
{
    public function display()
    {
        $params = $this->module->params;

        $this->assign('params', $params);

	    if($params->copyright_menu != '') {
		    $menu = JFactory::getApplication()->getMenu()->getItems(array('menutype'), array($params->copyright_menu));

		    $this->assign('copyright_menu', $menu);
	    }

        return parent::display();
    }
}