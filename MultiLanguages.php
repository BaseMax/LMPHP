<?php
class MultiLanguages
{
	public $languages = [];
	public $language = null;
	public $language_default = null;
	public $words = [];
	public $word = null;
	function language($filter=null)
	{
		if($filter == null)
		{
			return $this->languages;
		}
		else
		{
			if(language_exists($filter))
			{
				return $this->words[$filter];
			}
			else{}//#soon #error
		}
	}
