<?php

namespace App;

use App\library\BinarySearchNode;
use App\library\BinarySearchTree;
use App\library\TreeNode;

/**
 * Two Sum IV - Input is a BST
 *
 * Given the root of a Binary Search Tree and a target number k, return true if there exist two elements in the BST
 * such that their sum is equal to the given target.
 *
 * Example 1:
 * Input: root = [5,3,6,2,4,null,7], k = 9
 * Output: true
 *
 * Example 2:
 * Input: root = [5,3,6,2,4,null,7], k = 28
 * Output: false
 *
 * https://leetcode.com/problems/two-sum-iv-input-is-a-bst/
 */
class TwoSumIVBST
{
    /**
     * @psalm-suppress MixedOperand
     * @param BinarySearchNode|null $root
     * @param int $target
     * @return bool
     */
    public function findTarget(?BinarySearchNode $root, int $target): bool
    {
        /** @var array<array-key, int> $sortedArray */
        $sortedArray = [];
        $this->convertToSortedArray($root, $sortedArray);
        $left = 0;
        $right = count($sortedArray) - 1;
        while ($left < $right) {
            /** @var int $sum */
            $sum = $sortedArray[$left] + $sortedArray[$right];
            if ($sum === $target) {
                return true;
            } elseif ($sum < $target) {
                $left++;
            } else {
                $right--;
            }
        }
        return false;
    }

    private function convertToSortedArray(?BinarySearchNode $root, array &$result): void
    {
        if (!$root) {
            return;
        }
        $this->convertToSortedArray($root->left, $result);
        $result[] = $root->val;
        $this->convertToSortedArray($root->right, $result);
    }
}
