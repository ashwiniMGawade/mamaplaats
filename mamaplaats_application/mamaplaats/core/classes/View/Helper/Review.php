<?php

trait View_Helper_Review {

	public function format_remarks(array $remarks)
	{
		return array(
			'positive' => $this->_get_remarks_by_type($remarks, 'positive'),
			'negative' => $this->_get_remarks_by_type($remarks, 'negative'),
		);
	}

	private function _get_remarks_by_type($remarks, $type)
	{
		$filtered_remarks = array();
		foreach ($remarks as $remark)
		{
			if ($remark['type'] != $type)
			{
				continue;
			}

			$filtered_remarks[] = $remark;
		}

		return $filtered_remarks;
	}
}