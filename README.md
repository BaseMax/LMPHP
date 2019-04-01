# LM PHP (Language management PHP)

## Multi Language PHP

Multi-language management and support on the php (web).

## LMPHP Features 

- Easy
- Compact
- Useful

# LM-PHP Functions

## **word_add**
Add a word to active language.

**Return :**
Bool

**Parameters :**
- $name(name of the word)
- __Optional__, $value(value of the word)

## word_get
Get a word from active language.

**Return :**
The value of word.

**Parameters :**
- $name(name of the word)

## word_add_to
Add a word to custom language.

**Return :**
Bool

**Parameters :**
- $lang(language name)
- $name(name of the word)
- __Optional__, $value(value of the word)

## language_add
Add a new language.

**Return :**
Bool

**Parameters :**
- $key(language name)

## language_remove
Remove a language. 

**Return :**
Bool

**Parameters :**
- $key(language name)

## language_active
Activate a language.

**Return :**
Bool

**Parameters :**
- $key(language name)

## language_current
Get current active language.

**Return :**
Name of the active language.

**Parameters :**
None

## language_exists
Check a language is exists or not.

**Return :**
Bool

**Parameters :**
- $key (language name)

## language
Get list of the languages or list of the words of a language.

**Return :**
Array

**Parameters :**
- __Optional__, $filter(language name)

## Introduction

This library is simple and lightweight and can be used for language management.
**It called LM-PHP(LMPHP).**

This project started to be used for personal use.
At the very beginning, the project was used in the infrastructure of the servers of a project in India.
To be able to manage language and vocabulary more easily. (International projects)

With my decision, this project was put up for free.

## History

- **Version 0.1 (first)** : 2018 - 2018-12-01
- **Version 1.0** : 2018-12-01 - 2019-01-22
- **Version 1.1** : 2019-01-22

# License

LMPHP is licensed under the [GNU General Public License](https://github.com/BaseMax/LMPHP/blob/master/LICENSE).
