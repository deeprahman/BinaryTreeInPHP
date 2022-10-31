<?php
use Tree\TreeNode;
$levelOrderTraversalLambda = function(TreeNode $root){
    if(! ($root instanceof TreeNode)) return;
     $q = new SplQueue();
     $q->enqueue($root);
     while(1){
         if($q->count() === 0){break;}
         $level_items_no = $q->count();
        while($level_items_no > 0){
            $item = $q->dequeue();
            printf("%f",$item->getData());
            if($item->hasPre()){
                $q->enqueue($item->getPre());
            }
            if($item->hasPost()){
                $q->enqueue($item->getPost());
            }
            $level_items_no--;
            printf("  ");
        }
        printf("\n");
     }

};