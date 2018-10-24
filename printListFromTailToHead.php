<?php
class ListNode
{
    var $val;
    var $next = NULL;
    function __construct($x){
        $this->val = $x;
    }
}

$l1 = new ListNode(1);
$l2 = new ListNode(2);
$l3 = new ListNode(3);
$l4 = new ListNode(4);
$l1->next = $l2;
$l2->next = $l3;
$l3->next = $l4;
printListFromTailToHead($l1);
function printListFromTailToHead($head)
{
    $arrayList = array();
    while(!is_null($head->val))
    {
        array_unshift($arrayList, $head->val);
        $head = $head->next;
    }
    return $arrayList;
}