<?php

use Tree\TreeNode as Node;
Use Tree\BinaryTree as BT;

require_once __DIR__ . DIRECTORY_SEPARATOR . "BinaryTree.php";
require_once __DIR__ . DIRECTORY_SEPARATOR . "TreeNode.php";
require_once __DIR__ . DIRECTORY_SEPARATOR . "LevelOrderTraversal.php";


$root = new Node(0);

$pre_l1 = new Node(1);
$post_l1 = new Node(2);

$pre_l2_1 = new Node(3);
$post_l2_2 = new Node(4);

$pre_l2_3 = new Node(5);
$post_l2_4 = new Node(6);


$root->addChild($pre_l1,-1);
$root->addChild($post_l1,1);

$pre_l1->addChild($pre_l2_1,-1);
$pre_l1->addChild($post_l2_2,1);

$post_l1->addChild($pre_l2_3,-1);
$post_l1->addChild($post_l2_4,1);

$b = new BT($root);
$b->traverse($levelOrderTraversalLambda);

 