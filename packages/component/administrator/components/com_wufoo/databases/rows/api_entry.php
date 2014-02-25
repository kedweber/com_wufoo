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

class ComWufooDatabaseRowApi_entry extends KDatabaseRowDefault
{
	/**
	 * @return bool
	 */
	public function save()
	{
		if($this->hash) {
			$curl = curl_init('https://ctaint.wufoo.com/api/v3/forms/'.$this->hash.'/entries.json');
			curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: multipart/form-data'));
			curl_setopt($curl, CURLOPT_POST, true);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $this->toArray());
			curl_setopt($curl, CURLOPT_USERPWD, 'ZJ5Z-BOU5-M5WJ-CLEV:footastic');
			curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
			curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
			$response = json_decode(curl_exec($curl));

			error_log(print_r($response, true));
			error_log(print_r($this->getData(), true));
		}


		if($response->Success === 1) {
			$result = true;
		} else {
			$result = false;
		}

		return (bool) $result;
	}
}