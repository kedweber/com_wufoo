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
	protected function _actionSubmit(KCommandContext $context)
	{
		$data = $this->getModel()->getItem();

		$row = $this->getService('com://admin/wufoo.model.api.entries')->id($data->hash)->getItem();
		$row->setData($context->data);

		if($row->save() === false)
		{
			$error = $data->getStatusMessage();
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