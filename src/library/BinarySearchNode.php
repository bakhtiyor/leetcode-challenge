<?php

namespace App\library;

/**
 * An efficient binary search tree (BST) implementation in PHP.
 *
 * https://gist.github.com/meetrajesh/4570999
 */
class BinarySearchNode {
    public ?int $val;
    public ?BinarySearchNode $left = null;
    public ?BinarySearchNode $right = null;
    public function __construct(?int $val)
    {
        $this->val = $val;
    }

    public function insert(BinarySearchNode $node): bool
    {
        if ($node->val > $this->val) {
            $this->right ? $this->right->insert($node) : ($this->right = $node);
        } elseif ($node->val < $this->val) {
            $this->left ? $this->left->insert($node) : ($this->left = $node);
        }
        return false;
    }
}
