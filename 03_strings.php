<?php

$str = "this";
echo $str;
$lenn = strlen($str);
echo "the length of the string is". $lenn ."thank you<br>";
//echo $lenn;
echo "the length of word in the string is". str_word_count($str).".thank you<br>";
echo "the reversed in the string is". strrev($str).".thank you<br>";
echo "the search  of is in the string is". strpos($str,"is").".thank you<br>";
echo "the replaced string is".str_replace("is","at",$str). ".Thank you <br>";

?>