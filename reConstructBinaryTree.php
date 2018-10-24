<?php
/*
 * 输入某二叉树的前序遍历和中序遍历的结果，请重建出该二叉树。
 * 假设输入的前序遍历和中序遍历的结果中都不含重复的数字。
 * 例如输入前序遍历序列{1,2,4,7,3,5,6,8}和中序遍历序列{4,7,2,1,5,3,8,6}，则重建二叉树并返回。
 */
/*class TreeNode{
    var $val;
    var $left = NULL;
    var $right = NULL;
    function __construct($val){
        $this->val = $val;
    }
}*/
error_reporting(E_ERROR);
function reConstructBinaryTree($root, $vin)
{
    if (!is_null($root)) {
        //这里用到常量__FUNCTION__，获取当前函数名，好处是假如修改函数名的时候，里面的实现不用修改
        $function = __FUNCTION__;
        echo $root->key . " ";die;
        $this->$function($root->left);
        $this->$function($root->right);
    }
}


$pre = '{1,2,4,7,3,5,6,8}';
$vin = '{4,7,2,1,5,3,8,6}';
reConstructBinaryTree($pre, $vin);