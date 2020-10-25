<?php
    $str = "Rasana";
    echo $str;
    echo "<br>";
    $lenn = strlen($str);
    echo "The length of the string is ".$lenn.". Thank you <br>";
    echo "The number of words in the string are ".str_word_count($str).". Thank you <br>";
    echo "The reversed string is " .strrev($str).". Thank you <br>";
    echo "The position of name in a string is " .strpos($str, "s").". Thank you <br>";
    echo "The replaced string is " .str_replace("s","x",$str).". Thank you <br>";
    
?>