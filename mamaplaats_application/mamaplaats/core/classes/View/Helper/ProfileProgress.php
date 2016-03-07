<?php

trait View_Helper_ProfileProgress {

	protected function calculate_profile_percentage($profile_progress_data)
	{
		$profile_percentage = 0;
		$total_stages = count($profile_progress_data);

		$stages_completed = 0;
		foreach ((array)$profile_progress_data as $stage_key=>$stage)
		{
			if($stage_key == 'profile_completed')
			{
				$stage = $this->_check_profile_completion($stage);
			}

			if($stage == 1)
			{
				$stages_completed = $stages_completed+1;
			}
		}

		if( !empty ($stages_completed))
		{
			$profile_percentage = $stages_completed/$total_stages*100;
		}

		return $profile_percentage.'%';
	}

	private function _check_profile_completion($profile_info)
	{
		$profile_completion = 0;
		if( ! empty($profile_info['id']) AND ! empty($profile_info['biography']))
		{
			$profile_image = glob("uploads/avatar/".$profile_info['id']."*");
			$profile_completion = ( ! empty($profile_image)) ? 1 : 0;
		}

		return $profile_completion;
	}

	protected function profile_stages(array $profile_progress_data)
	{
		$stages = array();
		foreach ($profile_progress_data as $progress_stage_key => $progress_stage)
		{
			switch ($progress_stage_key)
			{
				case 'profile_completed':
					$progress_stage = $this->_check_profile_completion($progress_stage);
					$stage_data['text'] = 'Maak je profiel compleet';
					break;
				case 'blog_written':
					$stage_data['text'] = 'Schrijf een blog bericht';
					break;
				case 'writers_followed':
					$stage_data['text'] = 'Inschrijven voor een review';
					break;
				case 'review_joined':
					$stage_data['text'] = 'Volg moeders';
					break;
			}
			$stage_data['complete'] = ( ! empty($progress_stage)) ? TRUE : FALSE;
			$stages[] = $stage_data;
		}

		return $stages;
	}
}
