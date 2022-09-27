<?php
/*
 Insertsort: Thuật toán duyệt qua từng phần tử mảng và chèn nó vào đúng vị trí trong mảng con(từ phần tử đầu tien đến phần tử trước mảng con )
  sao cho vẫn bảo đảm đúng tính chất.
  
    Tạo mảng con đã xắp xếp có 1 phần tử.
    Duyệt từ phần tử thứ 2 của mảng và sắp xếp vào mảng con đã săp xếp ( từ vị trí đâu tiên tới vị trí trước phần tử đang xét)
    Sau mỗi lần duyệt, số phần tử trong mảng con đã sắp xếp sẽ tăng lên.
*/
 function insertion_Sort($my_array)
{
	for($i=0;$i<count($my_array);$i++){
		$val = $my_array[$i];
		$j = $i-1;
		while($j>=0 && $my_array[$j] > $val){
			$my_array[$j+1] = $my_array[$j];
			$j--;
		}
		$my_array[$j+1] = $val;
	}
return $my_array;
}
$test_array = array(3, 0, 2, 5, -1, 4, 1);
echo "Original Array :\n";
echo implode(', ',$test_array );
echo "\nSorted Array :\n";
print_r(insertion_Sort($test_array));
?>