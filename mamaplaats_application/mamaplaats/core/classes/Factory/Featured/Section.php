<?php

class Factory_Featured_Section {

	public static function load($tag)
	{
		$featured_section = Factory_Guest::gets_featured_section()->execute($tag);
		if (empty($featured_section->id))
		{
			return FALSE;
		}

		$renderer = Kostache::factory();
		$featured_section_view = new View_Featured_Section($featured_section);

		return $renderer->render($featured_section_view, 'featured/section/'.$featured_section->template);
	}
}