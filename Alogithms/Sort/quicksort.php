<?php 
/*
Thuật tóan này sử dụng phương pháp chia để trị giống merge sort, nhưng chia theo phương pháp pivot.
Thuật toán sẽ chọn 1 phần tử trong mảng là làm pivot ( điểm đánh dấu). Mấu chốt chính của thuật toán là phân đoạn (hàm partition ):
Chọn pivot và sắp xếp vào đúng vị trí trong mảng,
chuyển tất cả các phần tử nhỏ hơn pivot sang bên trái pivot và chuyển tất cả các phần tử lớn hơn pivot sang bên phải pivot.
Khi đó ta có hai mảng con bên trái pivot và bên phải pivot. Tiếp tục phân đoạn cho hai mảng con đó.
*/

$unsorted = array(2,4,5,63,4,5,63,2,4,43);
 
    function quicksort($array)
    {
        if (count($array) == 0)
            return array();
 
        $pivot = $array[0];
        $left = $right = array();
 
        for ($i = 1; $i < count($array); $i++) {
            if ($array[$i] < $pivot)
                $left[] = $array[$i];
            else
                $right[] = $array[$i];
        }
 
        return array_merge(quicksort($left), array($pivot), quicksort($right));
    }
 
    $sorted = quicksort($unsorted);
 
    foreach($sorted as $key=>$val)
	{
		echo "<h3>key.$key->.value.$val</h3>";
	}
