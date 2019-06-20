<?php
function arrMax2($arr){
    $maxArr = $arr[0][0];
    for ($i = 0;$i < count($arr); $i++){
        for ($j = 0;$j< count($arr[$i]);$j++){
            if ($maxArr < $arr[$i][$j]){
                $maxArr = $arr[$i][$j];
            }
        }
    }
    echo "gia tri lon nhat la: ".$maxArr;
}
$arr = [
    [1,3,6,9,6,15,20],
    [3,5,8,1,4,9,0],
];
arrMax2($arr);