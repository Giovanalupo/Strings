<?php

$text = "O perigo de verdade não é que os computadores passem a pensar com humanos, e sim que as pessoa passem a pensar como computadores";

$length= strpos($text, "computadores passen"); // possição onde inicia a string "computadores passem" - 30

$result = substr($text, 0, $length); //possiçãoo inicial = 0, comprimento = 20

echo $result;
?>