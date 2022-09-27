<?php
/*
Thuật toán này thực hiện sắp xếp liên tục các phần tử ở cạnh nhau nếu phần tử đứng sau nhỏ hơn phần tử đứng truóc cho đến khi cuối mảng 
( Phần tử lớn nhất sẽ nổi lên cuối mảng)
*/
function bubbleSort($arr) {
    $size = count($arr)-1;
    for ($i=0; $i<$size; $i++) {
        for ($j=0; $j<$size-$i; $j++) {
            $k = $j+1;
            if ($arr[$k] < $arr[$j]) {
                // Hoán đổi các phần tử tại các chỉ số  : $j, $k
                list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
            }
        }
    }
    return $arr;
}
$arr =[1,2,3,5,6,4,8,7,9,0];
echo "original array is->";
foreach($arr as $key=>$value){
   echo $value;
}
$data = bubbleSort($arr);
foreach($data as $key=>$val){
    echo "<h3>$val</h3>";
}