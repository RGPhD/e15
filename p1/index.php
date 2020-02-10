<?php
/* Multi-line comment.  
This is the controller file.
*/
function isPalindrome($inputString)
{
    if (strrev($inputString)==($inputString)) {
        return 'This is a Palindrome';
    } else {
        return 'This is not a Palindrome';
    }
}

function vowelCount($inputString)
{

preg_match_all('/[aeiou]/i', $inputString, $vowels);
    return count($vowels[0]);
}

function upperCase($inputString)
{
   return strtoupper($inputString);
}

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

$result3 = isPalindrome('siamese');
$result4 = isPalindrome('madam');

$result5 = vowelCount('basketball');
$result6 = vowelCount('arizona');

$result7 = upperCase('senior games');
$result8 = upperCase('scottsdale');

# Can remove the closing php tag if only php is in the file.
require 'index-view.php';