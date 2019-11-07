<?php
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */

    function mergeTwoLists($l1, $l2) {
        $new = [];
        while (current($l1) || current($l2)){
            if (!current($l1)){
                $new[] = current($l2);
                next($l2);
            }elseif (!current($l2)){
                $new[] = current($l1);
                next($l1);
            }elseif (current($l1) <= current($l2)){
                $new[] = current($l1);
                next($l1);
            }else{
                $new[] = current($l2);
                next($l2);
            }
        }
        return $new;
    }
}