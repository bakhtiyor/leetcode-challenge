<?php

namespace App;

/**
 * Flipping an Image
 *
 * Given an n x n binary matrix image, flip the image horizontally, then invert it, and return the resulting image.
 * To flip an image horizontally means that each row of the image is reversed. For example, flipping [1,1,0]
 * horizontally results in [0,1,1]. To invert an image means that each 0 is replaced by 1, and each 1 is replaced by 0.
 * For example, inverting [0,1,1] results in [1,0,0].
 *
 * Example 1:
 * Input: image = [[1,1,0],[1,0,1],[0,0,0]]
 * Output: [[1,0,0],[0,1,0],[1,1,1]]
 * Explanation: First reverse each row: [[0,1,1],[1,0,1],[0,0,0]].
 * Then, invert the image: [[1,0,0],[0,1,0],[1,1,1]]
 *
 * https://leetcode.com/problems/flipping-an-image
 */
class FlippingAnImage
{
    /**
     * @param array<array-key, array<array-key, int>> $image
     * @return array<array-key, array<array-key, int>>
     */
    public function flipAndInvertImage(array $image): array
    {
        $arrayCount = count($image);
        for ($i = 0; $i < $arrayCount; $i++) {
            $image[$i] = $this->flipHorizontally($image[$i]);
            $image[$i] = $this->invert($image[$i]);
        }
        return $image;
    }

    /**
     * @param array<array-key, int> $imageElement
     * @return array<array-key, int>
     */
    private function flipHorizontally(array $imageElement): array
    {
        $result = [];
        $arrayCount = count($imageElement);
        for ($i = $arrayCount - 1; $i >= 0; $i--) {
            $result[] = $imageElement[$i];
        }

        return $result;
    }

    /**
     * @param array<array-key, int> $imageElement
     * @return array<array-key, int>
     */
    private function invert(array $imageElement): array
    {
        $result = [];
        $arrayCount = count($imageElement);
        for ($i = 0; $i < $arrayCount; $i++) {
            if ($imageElement[$i] === 1) {
                $result[] = 0;
            } else {
                $result[] = 1;
            }
        }
        return $result;
    }
}
