<h2>
    用迴圈列出3,5,7,11,17....97數列
    質數:
    除了1和自己以外 沒有其他因數

</h2>
<?php
    for($i=3;$i<100;$i*2+1){
        $test=false; //表示質數
        for($j=2;$j<$i;$j++){
            if($i % $j == 0){
                $test=true; //表示不是質數
                
            }
        }
        if ($test==false){
            echo $i . ",";
        }
    }
    //測試
?>
<h1>j完成了上傳github的功課</h1>