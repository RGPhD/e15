<?php

# (Required) Is palindrome? same forward and back
function isPalindrome($inputString)
{
}

# 2. (Required) Vowel count
# Indicates a count of how many vowels (aeiou) 
# are in the input string. Case insensitive.

# Susan Buck sample code
function isBigWord($inputString)
{
    if (strlen($inputString) > 7) {
        return 'Yes';
    } else {
        return 'No';
    }
}

$result1 = isBigWord('cat');
$result2 = isBigWord('mississippi');

# Can remove the closing php tag if only php is in the file.
require 'index-view.php';