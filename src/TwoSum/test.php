<?php

use App\TwoSum\Solution;

require_once 'vendor/autoload.php';


$solution = new Solution();
$nums = [2,7,11,15];
$target = 9;
/** @var null|array<int, int> $result */
$result  = $solution->twoSum($nums, $target);
if (is_array($result)) {
    echo sprintf("First number is at index %s", $result[0] . PHP_EOL);
    echo sprintf("Second number is at index %s", $result[1] . PHP_EOL);
}
