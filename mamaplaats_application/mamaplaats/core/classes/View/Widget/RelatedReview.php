<?php

class View_Widget_RelatedReview {

	public function prepare_widget($related_review)
	{
		$related_review['object'] = $this->_prepare_content($related_review['object']);
		return $related_review;
	}

	private function _prepare_content($content)
	{
		$prepared_content = array();
		foreach ($content as $related_review)
		{
			$prepared_content[] = $related_review;
		}

		return $prepared_content;
	}
}