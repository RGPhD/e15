<?php
// PHP Form Design C
session_start();

$inputString = $_POST['inputString'];

function isPalindrome($inputString)
{
    $inputStringlower = strtolower($inputString);

    if (strrev($inputStringlower)==($inputStringlower)) {
        return 'This is a Palindrome';
    } else {
        return 'This is not a Palindrome';
    }
}

function vowelCount($inputString)
{

preg_match_all('/[aeiou]/i', $inputString, $vowelCount);
    return count($vowelCount[0]);
}

function upperCase($inputString)
{
   return strtoupper($inputString);
}

$_SESSION['results'] = [
    'isPalindrome' => isPalindrome($inputString),
    'vowelCount' => vowelCount($inputString),
    'upperCase' => upperCase($inputString),
    'inputString' => ($inputString)
];

// header means redirect
header('Location: index.php');