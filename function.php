<?php
function maxHight(array $arr = []){
$max = $arr[0];
$count = 0;
foreach ($arr as $item){
 if($item == $max) $count++;
 if($item > $max) {
   $max = $item;
    $count = 1;
 }
}
return $count;
}

echo (maxHight([4 , 5 , 7, 7 ,8 , 8 ,8]));