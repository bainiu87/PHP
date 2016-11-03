<?php
/* 冒泡排序 */
function bubblesort($arr){
    if (empty($arr)){
        return "该数组为空";
    }else{
        for ($i=0;$i<count($arr);$i++){
            for ($j=$i+1;$j<count($arr);$j++){
                if ($arr[$i]>$arr[$j]){
                    $a=$arr[$i];
                    $arr[$i]=$arr[$j];
                    $arr[$j]=$a;
                }
            }
        }
        return $arr;
    }
}
$num=array(20,40,60,80,30,70,90,10,50,0);
$b=bubblesort($num);
var_dump($b);
?>