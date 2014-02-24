<?php

class ComWufooDatabaseRowsetDefault extends KDatabaseRowsetAbstract
{
	/**
	 * @param array $data
	 * @param bool $new
	 * @return $this|KDatabaseRowsetAbstract
	 */
	public function addData(array $data, $new = true)
	{
		foreach($data as $k => $row)
		{
			$options = array(
				'data'   =>  array_change_key_case($row, CASE_LOWER),
				'status' => $new ? NULL : KDatabase::STATUS_LOADED,
				'new'    => $new,
			);

			$this->insert($this->getRow($options));
		}

		return $this;
	}
}