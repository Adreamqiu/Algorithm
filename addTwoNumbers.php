<?php
class ListNode {
    public $val;
    public $next ;
    public function __construct($val)
    {
        $this->val = $val;
    }
}
$L11 = new ListNode(2);
$L12 = new ListNode(4);
$L13 = new ListNode(3);
$L11->next = $L12;
$L12->next = $L13;

$L21 = new ListNode(5);
$L22 = new ListNode(6);
$L23 = new ListNode(4);
$L21->next = $L22;
$L22->next = $L23;


error_reporting(0);
function addTwoNumbers($l1, $l2)
{
    $i = 0;
    $num1 = 0;
    $num2 = 0;
    while (!is_null($l1->val) || !is_null($l2->val))
    {
        $num1 += ($l1->val * pow(10, $i));
        $l1 = $l1->next;
        $num2 += ($l2->val * pow(10, $i));
        $l2 = $l2->next;
        $i++;
    }
    $sum = strrev($num1 + $num2);//zheli sum 是什么类型？字符串？不用理他的类型，

    $last = new ListNode($sum[0]);
    $l = $last;//这里
    for ($i=1; $i<strlen($sum); $i++) {//这里是把数字转换成链表是把？是，我想想，有点集中不了注意力// nizuo le shenme
        $last->next = new ListNode($sum[$i]);//
        $last = $last->next;//这句是什么意思，让last是最后一个
    }
    return $l;
}
$s = microtime(true);
$res = addTwoNumbers($L11, $L21);
var_dump($res);
echo 1000*(microtime(true) - $s).'ms';