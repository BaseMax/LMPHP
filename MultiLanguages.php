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
	function language_default($key)
	{
		if($this->language_exists($key))
		{
			$this->language_default = $key;
		}
		else{}//#soon #error
	}
	function language_active($key)
	{
		if($this->language_exists($key))
		{
			$this->language = $key;
		}
		else{}//#soon #error
	}
	function language_remove($key)
	{
		if($this->language_exists($key))
		{
			unset($this->languages[$key]);
		}
		else{}//#soon #error
	}
	function language_add($key,$name=null)
	{
		if($name == null)
		{
			$name = $key;
		}
		if(! $this->language_exists($key))
		{
			$this->languages[$key]=$name;
		}
		else{}//#soon #error
		$this->language_active($key);
		$this->words[$key]=[];
	}
	///////////////////////////////////////////////
	function word_add_to($lang,$name,$value=null)
	{
		if($value == null)
		{
			$value = $name;
		}
		if(isset($this->words[$lang]))
		{
			$this->words[$lang][$name]=$value;
			return true;
		}
		else{}//#soon #error
		return false;
	}
