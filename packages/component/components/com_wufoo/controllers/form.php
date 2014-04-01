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

class ComWufooControllerForm extends ComDefaultControllerDefault
{
	/**
	 * @param KConfig $config
	 */
	protected function _initialize(KConfig $config)
	{
		$cacheable = $this->getBehavior('com://site/moyo.controller.behavior.cacheable',
			array(
				'modules' => array(
					'banner'
				)
			)
		);

		$config->append(array(
			'behaviors' => array(
				$cacheable,
			)
		));

		parent::_initialize($config);
	}

	/**
	 * @param KCommandContext $context
	 * @return object
	 */
	protected function _actionSubmit(KCommandContext $context)
	{
		$data = $this->getModel()->getItem();

		$row = $this->getService('com://admin/wufoo.database.row.api_entry');
		$row->setData($context->data->toArray());
		$row->hash = $data->hash;

		if($row->save() === false)
		{
			$error = $row->getStatusMessage();
			$context->setError(new KControllerException(
				$error ? $error : 'Add Action Failed', KHttpResponse::INTERNAL_SERVER_ERROR
			));
		}
		else {
			$context->status = KHttpResponse::CREATED;
		}

		return $row;
	}
}