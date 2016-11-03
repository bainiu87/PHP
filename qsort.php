<?php
/* 不使用数组快速排序 */
function main(&$arr,$left,$right){
    if ($left==$right-1){
        return $left;
    }
    $pos=$left;
    $key=$arr[$left];
    $pl=$left;
    $pr=$right;
    while ($pl<$pr){
        while ($pl<$right && $arr[$pl]<=$key){$pl++;}
        while ($pr>$left && $arr[$pr]>$key){$pr--;}
        if ($pl<$pr){
            $a=$arr[$pl];
            $arr[$pl]=$arr[$pr];
            $arr[$pr]=$a;
        }
    }
    $b=$arr[$pos];
    $arr[$pos]=$arr[$pr];
    $arr[$pr]=$b;
    return $pr;
}
function qsort(&$arr,$left,$right){
    if ($left>=$right){
        return;
    }
    $pos=main($arr, $left, $right);
    qsort($arr,$left,$pos);
    qsort($arr,$pos+1,$right);
    return $arr;
}
$arr=array(3,5,2,7,4,1);
$c=qsort($arr,0,5);
var_dump($c);
?>