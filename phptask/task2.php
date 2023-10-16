<?php

  function areAnagrams($str1, $str2) {
    
    $str1 = strtolower(str_replace(' ', '', $str1));
    $str2 = strtolower(str_replace(' ', '', $str2));

    $charCount1 = array_count_values(str_split($str1));
    $charCount2 = array_count_values(str_split($str2));

    
    if ($charCount1 === $charCount2) {
        return true;
    } else {
        return false;
    }
}

$string1 = "abcd";
$string2 = "bcda";

if (areAnagrams($string1, $string2)) {
    echo "The strings are anagrams.";
} else {
    echo "The strings are not anagrams.";
    }
    
?>