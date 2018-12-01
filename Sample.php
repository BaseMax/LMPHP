<?php
include "MultiLanguages.php";
$langs = new MultiLanguages();
$langs -> language_add("en");
$langs -> language_add("fa","Farsi");
//$langs -> language_remove("en");
$langs -> language_active("fa");
print_r( $langs -> languages );
echo $langs -> language;

$langs -> language_active("en");
$langs -> word_add("Bye","Good Bye!");

$langs -> language_active("fa");

$langs -> word_add("Hi","Hello!");
$langs -> word_add("HowAre");
$langs -> word_add("HowAre","How are you?");//update a word!
print_r( $langs -> words );

echo $langs -> word_get("Bye");
