<?php 
/*
là một giải thuật tìm kiếm cơ bản. 
Thuật toán này duyệt qua từng phần tử của mảng cho đến khi tìm được giá trị cần tìm hoặc đến khi hết mảng.
Thuật toán này phù hợp cho tìm kiểm trong một danh sách vừa và chưa được sắp xếp .
*/
// hàm này trả về giá trị bằng giá trị đầu vào
function linearSearch($arr, $x) {
    for($i = 0; $i < sizeof($arr); $i++) {
        if($arr[$i] == $x) return "the value is ".$i;
    }
    return -1;
}
$arr = array(4, 2, 5, 6, 14, 7, 15, 3);
echo linearSearch($arr, 14);