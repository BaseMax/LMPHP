<?php
/**
*
* @Name : LMPHP (Language management, Multi-Language)
* @Version : 1.1
* @Programmer : Max
* @Date : 2018-12-01 - 2019-01-22
* @Released under : https://github.com/BaseMax/LMPHP/blob/master/LICENSE
* @Repository : https://github.com/BaseMax/LMPHP
*
**/
include "LMPHP.php";
$langs = new LMPHP();

$langs -> language_add("en");
$langs -> language_add("fa","Farsi");

//$langs -> language_remove("en");

$langs -> language_active("fa");
echo $langs -> language;

print_r( $langs -> languages );

$langs -> language_active("en");
$langs -> word_add("Bye","Good Bye!");

$langs -> language_active("fa");
$langs -> word_add("Hi","Hello!");
$langs -> word_add("HowAre");
$langs -> word_add("HowAre","How are you?");//update a word!

print_r( $langs -> words );

echo $langs -> word_get("Bye");//It should get word from active language(fa) , but this is not exists. so will get value from en.
