<?php

namespace App;

/**
 * Can Place Flowers
 *
 * You have a long flowerbed in which some plots are planted, and some are not. However, flowers cannot be planted in
 * adjacent plots. Given an integer array flowerbed containing 0's and 1's, where 0 means empty and 1 means not empty,
 * and an integer n, return if n new flowers can be planted in the flowerbed without violating the no-adjacent-flowers
 * rule.
 *
 * Example 1:
 * Input: flowerbed = [1,0,0,0,1], n = 1
 * Output: true
 *
 * Example 2:
 * Input: flowerbed = [1,0,0,0,1], n = 2
 * Output: false
 *
 * https://leetcode.com/problems/can-place-flowers
 */
class CanPlaceFlowers
{
    /**
     * @param int[] $flowerbeds
     * @param int $number
     * @return bool
     */
    public function canPlaceFlowers(array $flowerbeds, int $number): bool
    {
        if (count($flowerbeds) === 1 && $flowerbeds[0] === 0) {
            return true;
        }
        $flowerbedsCount = count($flowerbeds);
        $plantedFlowers = 0;
        for ($i = 0; $i < $flowerbedsCount - 1; $i++) {
            if ($flowerbeds[$i] === 0 && $flowerbeds[$i - 1] !== 1 && $flowerbeds[$i + 1] !== 1) {
                $plantedFlowers++;
                $flowerbeds[$i] = 1;
            }
        }
        if ($flowerbeds[$i] === 0 && $flowerbeds[$i - 1] === 0) {
            $plantedFlowers++;
        }
        return $plantedFlowers >= $number;
    }
}
