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
     * @param BinarySearchNode $root
     * @param int $target
     * @return bool
     */
    public function findTarget(BinarySearchNode $root, int $target): bool
    {
        $result = [];
        $this->inorder($root, $result);
        $left = 0;
        $right = count($result) - 1;
        while ($left < $right) {
            if ($result[$left] + $result[$right] == $target) {
                return true;
            } elseif ($result[$left] + $result[$right] < $target) {
                $left++;
            } else {
                $right--;
            }
        }
        return false;
    }

    private function inorder(?BinarySearchNode $root, array &$result)
    {
        if (!$root) {
            return null;
        }
        $this->inorder($root->left, $result);
        $result[] = $root->val;
        $this->inorder($root->right, $result);
    }
}
