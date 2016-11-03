<?php 
/* 使用数组快速排序 */
function Aqsort(&$arr){
    if (count($arr)>1){
        $key=$arr[0];
        $left=array();
        $right=array();
        for ($i=1;$i<count($arr);$i++){
            if ($arr[$i]>$key){
                $right[]=$arr[$i];
            }
            if ($arr[$i]<=$key){
                $left[]=$arr[$i];
            }
        }
        $lef=Aqsort($left);
        $righ=Aqsort($right);
    return array_merge($lef,array($key),$righ);
    }else{
        return $arr;
    }
}
$arr=array(3,5,2,7,4,1);
$c=Aqsort($arr,0,5);
var_dump($c);
?>