<?php

namespace App\TwoSum;

class Solution
{
    /**
     * @param array<array-key, int> $nums
     * @param int $target
     * @return array|null
     */
    public function twoSum(array $nums, int $target): ?array
    {
        foreach ($nums as $index1 => $num1) {
            foreach ($nums as $index2 => $num2) {
                if ($index1 !== $index2 && ($num1 + $num2) === $target) {
                    return [$index1, $index2];
                }
            }
        }
        return null;
    }
}
