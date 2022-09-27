<?php 
/*
Binary Search:là một kỹ thuật tìm kiếm được sử dụng để tìm kiếm một phần tử trong một mảng đã được sắp xếp.
-Nếu bằng:
Trả về và kết thúc thuật toán
Giá trị search > : Tiếp tục tìm kiêm ở mảng con bên phải
Giá trị search <: tiếp tục tìm kiếm ở mảng bên trái .

*/
function binarySearch(Array $arr, $x)
{
	// kiểm tra mảng trống
	if (count($arr) === 0) return false;
	$low = 0;
	$high = count($arr) - 1;
	while ($low <= $high) {
		
		// tính toán chỉ số giữa
		$mid = floor(($low + $high) / 2);

		//phần tử được tìm thấy ở giữa
		if($arr[$mid] == $x) {
			return true;
		}

		if ($x < $arr[$mid]) {
			// tìm kiếm bên trái của mảng
			$high = $mid -1;
		}
		else {
			//tìm kiếm phía bên phải của mảng
			$low = $mid + 1;
		}
	}
	
	// Nếu chúng ta đến đây thì phần tử x không tồn tại
	return false;
}

// Mã trình điều khiển
$arr = array(1, 2, 3, 4, 5);
$value = 5;
if(binarySearch($arr, $value) == true) {
	echo $value." Exists";
}
else {
	echo $value." Doesnt Exist";
}
?>
