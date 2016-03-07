<?php

class Review_RatingHelper {

	public function format(array $ratings)
	{
		foreach ($ratings as $i => $rating)
		{
			$rating['rating'] = str_replace(',', '.', $rating['rating']);
			if (empty($rating['rating']))
			{
				$rating['rating'] = 0.0;
			}

			$ratings[$i] = $rating;
		}

		return $ratings;
	}

	public function calculate_overal(array $ratings)
	{
		// Filter The Ratings
		$ratings = array_filter($ratings, function ($rating) {
			return ( ! empty($rating['rating']) AND $rating['rating'] !== '0.0');
		});

		$ratings = array_column($ratings, 'rating');

		// Return zero if empty
		if (empty($ratings))
		{
			return 0.0;
		}

		return (array_sum($ratings) / count($ratings));
	}
}