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

        $form = $this->getService('com://admin/wufoo.model.forms')->id($params->form)->getItem();

        $this->assign('form', $form);

        return parent::display();
    }
}