<?php
/**
*
* @Name : LMPHP.php
* @Version : 1.1
* @Programmer : Max
* @Date : 2018-12-01 - 2019-01-22
* @Released under : https://github.com/BaseMax/LMPHP/blob/master/LICENSE
* @Repository : https://github.com/BaseMax/LMPHP
*
**/
class LMPHP
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
		return false;
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
			return true;
		}
		else{}//#soon #error
		return false;
	}
	function language_active($key)
	{
		if($this->language_exists($key))
		{
			$this->language = $key;
			return true;
		}
		else{}//#soon #error
		return false;
	}
	function language_remove($key)
	{
		if($this->language_exists($key))
		{
			unset($this->languages[$key]);
			return true;
		}
		else{}//#soon #error
		return false;
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
			$this->language_active($key);
			$this->words[$key]=[];
			return true;
		}
		else{}//#soon #error
		return false;
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
	function word_add($name,$value=null)
	{
		if($this->language_current() != null)
		{
			return $this->word_add_to($this->language_current(),$name,$value);
		}
		else{}//#soon #error
		return false;
	}
	function word_get($name)
	{
		if($this->language_current() != null)
		{
			if(isset($this->words[ $this->language_current() ][$name]))
			{
				return $this->words[ $this->language_current() ][$name];
			}
			else
			{
				//Only check language_default? or all?
				foreach($this->words as $lang)
				{
					if(isset($lang[$name]))
					{
						return $lang[$name];
					}
				}
				return false;
			}
		}
		else{}//#soon #error
		return false;
	}
}
