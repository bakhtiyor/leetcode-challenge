<?php

namespace App;

/**
 * Hamming Distance
 *
 * The Hamming distance between two integers is the number of positions at which the corresponding bits are different.
 * Given two integers x and y, return the Hamming distance between them.
 *
 * Example 1:
 * Input: x = 1, y = 4
 * Output: 2
 * Explanation:
 * 1   (0 0 0 1)
 * 4   (0 1 0 0)
 *        ↑   ↑
 * The above arrows point to positions where the corresponding bits are different.
 *
 * Example 2:
 * Input: x = 3, y = 1
 * Output: 1
 *
 * https://leetcode.com/problems/hamming-distance
 */
class HammingDistance
{
    /**
     * @param int $x
     * @param int $y
     * @return int
     */
    public function hammingDistance(int $x, int $y): int
    {
        $binaryX = $this->numberToBinary($x);
        $binaryY = $this->numberToBinary($y);
        $zeroDiff = abs(count($binaryX) - count($binaryY));
        $zerroArr = array_fill(0, $zeroDiff, 0);
        if (count($binaryX) < count($binaryY)) {
            array_splice($binaryX, 0, 0, $zerroArr);
        } else {
            array_splice($binaryY, 0, 0, $zerroArr);
        }
        $xIndex = count($binaryX) - 1;
        $yIndex = count($binaryY) - 1;
        $diff = 0;
        while ($xIndex >= 0 || $yIndex >= 0) {
            if (isset($binaryX[$xIndex], $binaryY[$yIndex])) {
                if ($binaryX[$xIndex] !== $binaryY[$yIndex]) {
                    $diff++;
                }
            } else {
                $diff++;
            }
            $xIndex--;
            $yIndex--;
        }

        return $diff;
    }

    /**
     * There is a built-in function called decbin for converting a digit to a binary but for contest tasks it is not
     * recommended to use built-in functions.
     * @param int $number
     * @return array<array-key, int>
     */
    private function numberToBinary(int $number): array
    {
        $binary = [];
        while ($number > 0) {
            $binary[] = $number % 2;
            $number = (int) floor($number / 2);
        }
        return array_reverse($binary);
    }
}
