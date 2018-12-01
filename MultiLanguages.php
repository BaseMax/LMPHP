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
	function language_exists($key)
	{
		return isset($this->languages[$key]) ? true : false;
	}
	function language_current()
	{
		return $this->language;
	}
