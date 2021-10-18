<?php
    // 菱形
    // 多設一些變數
$row=18;

if($row%2 == 0){
    $row=$row+1;    
}

for($i=1;$i<=$row;$i++){

    $mid=($row+1)/2;

    if($i<=$mid){
        $stars=2*$i-1;
        $space=$mid-$i;
    }
    else{
        $stars=($row-$i)*2+1;
        $space=($mid-1)-($row-$i);    
    }

    for($k=1;$k<=$space;$k++){
        
        echo "&ensp;";

    }
    for($j=1;$j<=$stars;$j++){
        echo "*";
    }
    echo "<br>";

}

?>
<?php
// 矩形
$row=6;
// 總共有六行
for($i=1;$i<=$row;$i=$i+1){
    for($j=1;$j<=$row;$j++){
        //在印之前每行都判斷一次
        //如果是就印*
        // 不是就印空白 
        if($i==1 || $i==$row){
            echo "*";
        }else{
            if($j==1 || $j==$row){
                echo "*";
            
        }else{

            echo "&ensp;";
            }

        }
    }

    echo "<br>";
}
echo $i;
echo "<hr>"

?>

<?php
// 矩形複製
$row=6;
// 總共有六行
// for($i=1;$i<=$row;$i=$i+1){
    for($j=1;$j<=$row;$j++){
        //在印之前每行都判斷一次
        //如果是就印*
        // 不是就印空白 
        if($i==1 || $i==$row){
            echo "*";
        }else{
            if($j==1 || $j==$row){
                echo "*";
            
        }else{

            echo "&ensp;";
            }

        }
    }

    echo "<br>";
// }
echo "<hr>"
?>

<?php
// 矩形對角線
$row=7;

for($i=1;$i<=$row;$i=$i+1){
    for($j=1;$j<=$row;$j++){

        if($i==1 || $i==$row){
            echo "*";
        }else{
            if($j==1 || $j==$row || $j==$i || $j==$row+1-$i){
                echo "*";
            // 加入更多 or 印出*
        }else{

            echo "&ensp;";
            }

        }
    }

    echo "<br>";
}
?>