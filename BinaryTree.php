<?php

namespace Tree;

use Tree\TreeNode;

final class BinaryTree
{
    private TreeNode $root;

    public function __construct(TreeNode $node)
    {
        $this->root = $node;
    }

    public function traverse(callable $func)
    {
        $func($this->root);
    }
}