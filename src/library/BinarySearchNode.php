<?php

namespace App\library;

class BinarySearchNode {
    public $val;
    public $left = null;
    public $right = null;
    public function __construct($val)
    {
        $this->val = $val;
    }
    public function delete(BinarySearchNode $node, BinarySearchNode $parent = null, $left_right = '')
    {
        if ($node->val > $this->val) {
            return $this->right && $this->right->delete($node, $this, 'right');
        } elseif ($node->val < $this->val) {
            return $this->left && $this->left->delete($node, $this, 'left');
        } else {
            // found my search node
            if ($this->left) {
                // promote the left node
                $parent->$left_right = $this->left;
                $this->right && $this->left->insert($this->right);
            } elseif ($this->right) {
                // promote the right node
                $parent->$left_right = $this->right;
                $this->left && $this->right->insert($this->left);
            } else {
                // leaf node
                $parent->$left_right = null;
            }
            return true;
        }
    }
    public function detect(BinarySearchNode $node)
    {
        if ($node->val > $this->val) {
            return $this->right && $this->right->detect($node);
        } elseif ($node->val < $this->val) {
            return $this->left && $this->left->detect($node);
        } else {
            // found the node
            return true;
        }
    }
    public function insert(BinarySearchNode $node)
    {
        if ($node->val > $this->val) {
            $this->right ? $this->right->insert($node) : ($this->right = $node);
        } elseif ($node->val < $this->val) {
            $this->left ? $this->left->insert($node) : ($this->left = $node);
        } else {
            // found duplicate node
            return false;
        }
    }
}
