<?php

namespace App\library;

class BinarySearchTree {
    private BinarySearchNode $root;

    public function __construct()
    {
        $this->root = new BinarySearchNode(null);
    }

    public function getRoot(): ?BinarySearchNode
    {
        return $this->hasNode() ? $this->root->right : null;
    }

    public function insert(BinarySearchNode $node): BinarySearchTree
    {
        $this->root->insert($node);
        return $this;
    }

    public function hasNode(): bool
    {
        return (bool) $this->root->right;
    }
}
