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

class ComWufooModelApiDefault extends KModelAbstract
{
	/**
	 * @param KConfig $config
	 */
	public function __construct(KConfig $config)
	{
		parent::__construct($config);

		$this->_state
			->insert('id'       , 'raw')
		;
	}

	/**
	 * @param array $config
	 * @return mixed
	 */
	public function curl($config = array())
	{
		$config = new KConfig($config);

		$curl = curl_init($config->url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_USERPWD, 'ZJ5Z-BOU5-M5WJ-CLEV:footastic');
		curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);

		$respone = curl_exec($curl);
		$resultStatus = curl_getinfo($curl);

		if($resultStatus['http_code'] == 200) {
			$data = json_decode($respone, true);
			return $data[ucfirst($config->type)];
		} else {
			//TODO: Throw Exception
			echo 'Call Failed '.print_r($resultStatus);
		}
	}
}