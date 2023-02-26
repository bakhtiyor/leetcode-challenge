<?php

namespace App;

/**
 * Jewels and Stones
 *
 * You're given strings jewels representing the types of stones that are jewels, and stones representing the stones you
 * have. Each character in stones is a type of stone you have. You want to know how many of the stones you have are also
 * jewels. Letters are case-sensitive, so "a" is considered a different type of stone from "A".
 *
 * Example 1:
 * Input: jewels = "aA", stones = "aAAbbbb"
 * Output: 3
 *
 * Example 2:
 * Input: jewels = "z", stones = "ZZ"
 * Output: 0
 *
 * https://leetcode.com/problems/jewels-and-stones
 */
class JewelsAndStones
{
    /**
     * @param string $jewels
     * @param string $stones
     * @return int
     */
    public function numJewelsInStones(string $jewels, string $stones): int
    {
        $numJewels = 0;
        for ($i = 0, $iMax = strlen($stones); $i < $iMax; $i++) {
            if (str_contains($jewels, $stones[$i])) {
                $numJewels++;
            }
        }
        return $numJewels;
    }
}
