<?php
$string = $_POST["text"];
$words_in_string = str_word_count($string);
echo "В строке $string <br> $words_in_string слов";
?>
