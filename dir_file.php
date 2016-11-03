<?php
/*写一个遍历指定目录下所有子目录和子文件的函数（提示：可以使用递归的方法）  */
function dir_file($path){
    if (is_dir($path)){
        $od=opendir($path);
        while (($info=readdir($od))!==false){
            if (is_dir($path.'/'.$info)){
                if ($info=='.'||$info=='..'){
                    continue;
                }
                echo "路径:". $info."<br/>";
                dir_file($path.'/'.$info);
            }else {
                echo $info."<br/>";
            }
        }
    }else {
        echo "请输入正确的路劲";
    }
}

dir_file("../api");
?>