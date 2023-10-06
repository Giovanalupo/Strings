<?php 

$text = "O perigo de verdade não é que os computadores passem a pensar com humanos, e sim que as pessoa passem a pensar como computadores";

$result = strstr($text, "não é que"); //false é default - podemos omitir

echo $result; 

?>