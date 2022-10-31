<?php

namespace Tree;

final class TreeNode
{
    private float $data;
    private TreeNode $pre;
    private TreeNode $post;

    public function __construct(float $data)
    {
        $this->data = $data;
    }

    public function getData():float
    {
        return $this->data;
    }
    /**
     * Undocumented function
     *
     * @param TreeNode $node
     * @param int $type pre=-1 or post = 1 
     * @return void
     */
    public function addChild(TreeNode $node, int $type):void
    {
        if(-1 === $type){
            $this->pre = $node;
        }else if(1 === $type){
            $this->post = $node;
        }
    }

    public function hasPre():bool
    {
        return isset($this->pre);
    }

    public function hasPost():bool
    {
        return isset($this->post);
    }

    public function getPre():TreeNode
    {
        return $this->pre;
    }

    public function getPost():TreeNode
    {
        return $this->post;
    }
}