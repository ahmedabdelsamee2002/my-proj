<?php
function isPalindrome($str) {
    
    $str = strtolower(str_replace(' ', '', $str));

    
    $reversedStr = strrev($str);

    
    if ($str === $reversedStr) {
        return true;
    } else {
        return false;
    }
}

$string1 = "eye";
$string2 = "madam";

if (isPalindrome($string1)) {
    echo "The string \"$string1\" is a palindrome.";
} else {
    echo "The string \"$string1\" is not a palindrome.";
}

echo "\n";

if (isPalindrome($string2)) {
    echo "The string \"$string2\" is a palindrome.";
} else {
    echo "The string \"$string2\" is not a palindrome.";
}
?>





