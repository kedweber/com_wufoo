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

KService::get('com://site/wufoo.aliases')->setAliases();

echo KService::get('com://site/wufoo.dispatcher')->dispatch();