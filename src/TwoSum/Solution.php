<?php

namespace App\TwoSum;

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    public function twoSum($nums, $target)
    {
        foreach ($nums as $index1 => $num1) {
            foreach ($nums as $index2 => $num2) {
                if ($index1 !== $index2 && ($num1 + $num2) === $target) {
                    return [$index1, $index2];
                }
            }
        }
    }
}
