<?php
class ListNode{
    public function __construct(public $val=null,public $next=null){}
}

class TreeNode{
    public function __construct(public $val=null,public $left=null,public $right=null){}
}

$node1 = new TreeNode(-1);
$node2 = new TreeNode(-2);
$node3 = new TreeNode(-3,$node1,$node2);

var_dump($node3);
