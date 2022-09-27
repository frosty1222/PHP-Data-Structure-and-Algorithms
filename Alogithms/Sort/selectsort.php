<?php
/*
 Thuật toán chia mảng thành hai mảng :
    Mảng đã sắp xếp
    Mảng chưa sắp xếp
Sau mỗi bước lặp, số phần tử cuả mảng đã sắp xếp tăng lên 1
*/
// ham  de xep
function selectionsort(&$Array, $n) {
  for($i=0; $i<$n; $i++) {
    $min_idx = $i;

    for($j=$i+1; $j<$n; $j++) {
      if($Array[$j] < $Array[$min_idx])
      {$min_idx = $j;}
    }

    $temp = $Array[$min_idx];
    $Array[$min_idx] = $Array[$i];
    $Array[$i] = $temp;
  }
}

//ham de in mang 
function PrintArray($Array, $n) { 
  for ($i = 0; $i < $n; $i++) 
    echo $Array[$i]." ";
  echo "\n"; 
}  

// thu chay 
$MyArray = array(1, 10, 23, 50, 4, 9, -4);
$n = sizeof($MyArray); 
echo "Mang ban dau\n";
PrintArray($MyArray, $n);
echo "<pre/>";
selectionsort($MyArray, $n);
echo "\nMang da duoc xep\n";
PrintArray($MyArray, $n);
?>

