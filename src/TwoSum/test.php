<?php

use App\TwoSum\Solution;

require_once 'vendor/autoload.php';


$solution = new Solution();
$nums = [2,7,11,15];
$target = 9;
$result  = $solution->twoSum($nums, $target);
var_dump($result);
