# Multi Languages PHP
Multi-language management and support on the php.


## Features 

  - Easy
  - Compact
  - Useful


## Functions

| Function Name  | Goal | Parameter(s) | Return |
| ------------- | ------------- | ------------- | ------------- |
| word_add  	| Add a word to active language. | $name(name of the word) , __Optional__ : $value(value of the word) | Bool |
| word_get  |  Get a word from active language. | $name(name of the word) | The value of word. |
|  word_add_to | Add a word to custom language. | $lang(language name) , $name(name of the word) , __Optional__ : $value(value of the word) | Bool |
|  language_add | Add a new language. | $key(language name) | Bool |
|  language_remove | Remove a language. | $key(language name) | Bool |
| language_active  |  Activate a language. |  $key(language name) | Bool |
| language_current  | Get current active language. |  | Name of the active language. |
| language_exists  | Check a language is exists or not.  | $key (language name)  | Bool |
| language  |  Get list of the languages or list of the words of a language. | __Optional__ : $filter(language name)  | Array |

