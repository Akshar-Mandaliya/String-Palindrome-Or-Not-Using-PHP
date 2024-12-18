<?php
function isPalindrome($str) {
    $reversedStr = strrev($str);
    return $str === $reversedStr;
}

$str = "radar";

if (isPalindrome($str)) {
    echo "$str is a palindrome.";
} else {
    echo "$str is not a palindrome.";
}
?>
