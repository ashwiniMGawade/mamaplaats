<?php

class View_Widget_RelatedExpertAdvice {

	use View_Helper_ImagePath;

	private $_related_expert_advice;

	public function __construct($related_expert_advice)
	{
		$this->_related_expert_advice = $related_expert_advice;
	}

	public function related_expert_advice()
	{
		$related_expert_advice = array();
		foreach ($this->_related_expert_advice as $expert_advice)
		{
			$expert_advice['advise']->excerpt = $expert_advice['advise']->get_excerpt(110).'...';
			$expert_advice['media']->path = $this->get_image_legacy($expert_advice['media']->path, 132, 132);

			$related_expert_advice[] = $expert_advice;
		}

		return $related_expert_advice;
	}
}