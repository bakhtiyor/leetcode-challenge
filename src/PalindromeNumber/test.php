<?php

use App\PalindromeNumber\Solution;

require_once 'vendor/autoload.php';

$solution = new Solution();
$number = 101;
$isPalindrom = $solution->isPalindrome($number);
if ($isPalindrom) {
    echo sprintf('%s is palindrome' . PHP_EOL, $number);
} else {
    echo sprintf('%s is not palindrome' . PHP_EOL, $number);
}
