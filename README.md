# Alogithms and Data Structure in PHP

0. you can download the code here in this link 'https://github.com/frosty1222/PHP-Data-Structure-and-Algorithms.git';
+visit the site here "https://github.com/frosty1222/PHP-Data-Structure-and-Algorithms"
# 1.Data ta Structure in php

Cấu trúc dữ liệu (Data Structure) là gì ?

    Cấu trúc dữ liệu là cách lưu trữ, tổ chức dữ liệu có thứ tự, có hệ thống để dữ liệu có thể được sử dụng một cách hiệu quả.

Dưới đây là hai khái niệm nền tảng hình thành nên một cấu trúc dữ liệu:

    Interface: Mỗi cấu trúc dữ liệu có một Interface. Interface biểu diễn một tập hợp các phép tính mà một cấu trúc dữ liệu hỗ trợ. Một Interface chỉ cung cấp danh sách các phép tính được hỗ trợ, các loại tham số mà chúng có thể chấp nhận và kiểu trả về của các phép tính này.
    Implementation (có thể hiểu là sự triển khai): Cung cấp sự biểu diễn nội bộ của một cấu trúc dữ liệu. Implementation cũng cung cấp phần định nghĩa của giải thuật được sử dụng trong các phép tính của cấu trúc dữ liệu.

# Đặc điểm của một Cấu trúc dữ liệu

    Chính xác: Sự triển khai của Cấu trúc dữ liệu nên triển khai Interface của nó một cách chính xác.
    Độ phức tạp về thời gian (Time Complexity): Thời gian chạy hoặc thời gian thực thi của các phép tính của cấu trúc dữ liệu phải là nhỏ nhất có thể.
    Độ phức tạp về bộ nhớ (Space Complexity): Sự sử dụng bộ nhớ của mỗi phép tính của cấu trúc dữ liệu nên là nhỏ nhất có thể.

# Tại sao Cấu trúc dữ liệu là cần thiết ?

Ngày nay, các ứng dụng ngày càng phức tạp và lượng dữ liệu ngày càng lớn với nhiều kiểu đa dạng. Việc này làm xuất hiện 3 vấn đề lớn mà mỗi lập trình viên phải đối mặt:

    Tìm kiếm dữ liệu: Giả sử có 1 triệu hàng hóa được lưu giữ vào trong kho hàng hóa. Và giả sử có một ứng dụng cần để tìm kiếm một hàng hóa. Thì mỗi khi thực hiện tìm kiếm, ứng dụng này sẽ phải tìm kiếm 1 hàng hóa trong 1 triệu hàng hóa. Khi dữ liệu tăng lên thì việc tìm kiếm sẽ càng trở lên chậm và tốn kém hơn.
    Tốc độ bộ vi xử lý: Mặc dù bộ vi xử lý có tốc độ rất cao, tuy nhiên nó cũng có giới hạn và khi lượng dữ liệu lên tới hàng tỉ bản ghi thì tốc độ xử lý cũng sẽ không còn được nhanh nữa.
    Đa yêu cầu: Khi hàng nghìn người dùng cùng thực hiện một phép tính tìm kiếm trên một Web Server thì cho dù Web Server đó có nhanh đến mấy thì việc phải xử lý hàng nghìn phép tính cùng một lúc là thực sự rất khó.

Để xử lý các vấn đề trên, các cấu trúc dữ liệu là một giải pháp tuyệt vời. Dữ liệu có thể được tổ chức trong cấu trúc dữ liệu theo một cách để khi thực hiện tìm kiếm một phần tử nào đó thì dữ liệu yêu cầu sẽ được tìm thấy ngay lập tức.
Độ phức tạp thời gian thực thi trong cấu trúc dữ liệu và giải thuật

## Có 3 trường hợp thường được sử dụng để so sánh thời gian thực thi của các cấu trúc dữ liệu khác nhau:

```
 Trường hợp xấu nhất (Worst Case): là tình huống mà một phép tính của cấu trúc dữ liệu nào đó tốn thời gian tối đa (thời gian dài nhất). Ví dụ với ba số 1, 2, 3 thì nếu sắp xếp theo thứ tự giảm dần thì thời gian thực thi sẽ là dài nhất (và đây là trường hợp xấu nhất); còn nếu sắp xếp theo thứ tự tăng dần thì thời
 gian thực thi sẽ là ngắn nhất (và đây là trường hợp tốt nhất).
Trường hợp trung bình (Average Case): miêu tả thời gian thực thi trung bình một phép tính của một cấu trúc dữ liệu.
Trường hợp tốt nhất (Best Case): là tình huống mà thời gian thực thi một phép tính của một cấu trúc dữ liệu là ít nhất. Ví dụ như trên.
```
## Thuật ngữ cơ bản trong Cấu trúc dữ liệu
```
    Dữ liệu: Dữ liệu là các giá trị hoặc là tập hợp các giá trị.
    Phần tử dữ liệu: Phần tử dữ liệu là một đơn vị đơn lẻ của giá trị.
    Các phần tử nhóm: Phần tử dữ liệu mà được chia thành các phần tử con thì được gọi là các phần tử nhóm.
    Các phần tử cơ bản: Phần tử dữ liệu mà không thể bị chia nhỏ thành các phần tử con thì gọi là các phần tử cơ bản.
    Thuộc tính và Thực thể: Một thực thể là cái mà chứa một vài thuộc tính nào đó, và các thuộc tính này có thể được gán các giá trị.
    Tập hợp thực thể: Các thực thể mà có các thuộc tính tương tự nhau thì cấu thành một tập hợp thực thể.
    Trường: Trường là một đơn vị thông tin cơ bản biểu diễn một thuộc tính của một thực thể.
    Bản ghi: Bản ghi là một tập hợp các giá trị trường của một thực thể đã cho.
    File: Là một tập hợp các bản ghi của các thực thể trong một tập hợp thực thể đã cho.
```

### Một vài cấu trúc dữ liệu

    +Mảng: Mảng là một cấu trúc dữ liệu cũ và quan trọng nhất. Hầu hết các cấu trúc dữ liệu đều sử dụng mảng để triển khai giải thuât.

    + Phần tử: Mỗi mục được lưu trữ trong một mảng được gọi là phần tử của mảng.
    + Chỉ mục: Mỗi phần tử trong mảng có 1 chỉ mục để nhận diện phần tử.
    Các phép toán được sử dụng:
        -Duyêt
        -Chèn
        -xóa
        -Tìm kiếm
        -Cập nhật
### Danh sách liên kết:
 ```
 Là một dãy các câu trúc dữ liệu đươc liên kết với nhau qua thông qua các link liên kết. Hiểu đơn giản, danh sách liên kêt là một cấu trúc dữ liệu bao gồm các nút (node) tạo thành một chuỗi. Mỗi node bao gồm dữ liệu và và tham chiếu đến nút kế tiếp .
 ```
### Danh sách liên kết được sử dụng phổ biến sau mảng
    +Các loại danh sách liên kết
        -Danh sách liên kết đơn: Chỉ duyệt các phần tử theo chiều về trước.
        -Danh sách liên kết đôi: Duyệt phần tử theo hai chiều.
        -Danh sách liên kết vòng: Là dạng liên kết đôi đặc biệt, khi mà con trỏ prev của head trỏ đến tail và con trỏ next của tail trỏ đến head.

## Các phép toán:

    +Tìm kiếm :
    +Thêm:
    +Xóa

## Ngăn xếp:
```
    Là một dạng cấu trúc dữ liệu trừu tượng (Abstract Data Type - ADT ), đặt tên theo ngăn xếp vì nó hoạt động như 1 ngăn xếp: Chỉ cho phép hoạt động tại vị trí đỉnh của ngăn xếp.
    Cấu trúc dữ liệu này hoạt động theo quy tắt: LIFO ( Last - in First - out : Vào sau ra trước. )
    Một ngăn xếp có thể được triển khai bằng con trỏ, mảng, danh sách liên kết,
```
### Các phép toán trên ngăn xếp

    Push: Thêm phần tử vào đỉnh của ngăn xếp.
    pop: Xóa phần tử ở đỉnh của ngăn xếp.
    top: Trả về phần tử ở đỉnh của ngăn xếp (không xóa ).
    isEmpty: Kiểm tra mảng rỗng.

    Queue: là một dạng cấu trúc dữ liệu trừu tượng giông ngăn xếp,chỉ khác là hoạt động theo nguyên tắc: FILO ( First in Last Out ). Chỉ có thể thêm phần tử ở một đầu và lấy phần tử ở đầu còn lại
# ví dụ về Stack

```php
<?php
/*
stck:Stack (ngăn xếp) là một cấu trúc dữ liệu danh sách, trong đó việc thêm và lấy các phần tử được thực hiện theo quy tắc FILO (Fist-In/Last-Out),
 có nghĩa là phần tử nào được đưa vào đầu tiên thì sẽ được lấy ra sau cùng. Nguyên tắc này cũng được gọi là LIFO (Last-IN/First-Out),
 có nghĩa là phần tử nào được đưa vào sau cùng thì sẽ được lấy ra trước tiên.
Các phép toán cơ bản trên ngăn xếp:
- InitStack(Stack): Khởi tạo Stack rỗng
- Push(Stack,Item): Đẩy một phần tử Item vào Stack
- Pop(Stack): Hủy bỏ một phần tử khỏi Stack
- Top(Stack): Xem nội dung của phần tử đầu tiên
- isEmpty(Stack): Kiểm tra Stack có rỗng hay không?
- isFull(Stack): Kiểm tra danh sách đầy hay không?
*/
class Stack{
    protected $stack;
    protected $limit;
    //  Khởi tạo Stack rỗng
    public function __construct($limit = 10) {
        $this->stack = array();
        // ngăn xếp chỉ có thể chứa những mục này
        $this->limit = $limit;
    }
    // add items into stack
    public function push($item) {
        // nếu số lượng nhỏ hơn số lượng giới hạn thì chúng ta tiếp tục xếp chồng lên nhau nếu không chúng ta sẽ dừng nó lại ngay lập tức
        if (count($this->stack) < $this->limit) {
            // thêm mục vào đầu mảng
            array_unshift($this->stack, $item);
        } else {
            throw new RunTimeException('Stack is full!'); 
        }
    }
    // Hủy bỏ một phần tử khỏi Stack
    public function pop() {
        if ($this->isEmpty()) {
            // kiểm tra xem ngăn xếp có rỗng hay không
	      throw new RunTimeException('Stack is empty!');
	  } else {
            // xóa một phần tử khỏi đầu mảng
            return array_shift($this->stack);
        }
    }
    //Xem nội dung của phần tử đầu tiên
    public function top() {
        return current($this->stack);
    }
    //Kiểm tra danh sách đầy hay không?
    public function isEmpty() {
        return empty($this->stack);
    }
    // return stack array
    public function getData(){
        if($this->stack){
            foreach($this->stack as $key=>$val){

                echo "<h3>$key->$val</h3>";
            }
        }
        else{
            return 0;
        }
    }
}
$stack = new Stack();
$stack->push('1');
$stack->push('2');
$stack->push('3');
$stack->push('4');
$stack->push('5');
$stack->push('6');
$stack->push('7');
echo "the first element is->".$stack->top();
print_r($stack->getData());
?>

```
```
// kết quả
0->7
1->6
2->5
3->4
4->3
5->2
6->1
// 0->6 là keys của array
// 7->1 là các values được thêm vào stack class 
```
### queue:

    +enqueue( Thêm phần tử)
    +dequeue: Xóa phần tử.
    +isEmpty: Kiểm tra hàng đợi rỗng.
    +peek: trả về phần tử ở đầu hàng đợi mà không xóa.

    Hash table
    Tree
    Heaps
    Graphs

# ví dụ 
```php 
<?php 
/*
    queue:Hàng đợi là một cấu trúc dữ liệu động tuyến tính tuân theo nguyên tắc Nhập trước / Xuất trước (FIFO)
    + init – tạo hàng đợi.
    + enqueue – thêm một mục vào “cuối” (đuôi) của hàng đợi.
    + dequeue – loại bỏ một mục khỏi “mặt trước” (đầu) của hàng đợi.
    + isEmpty – trả về cho dù hàng đợi không còn mục nào nữa.
    + getData -trả lại dữ liệu được lưu trữ trong hàng đợi
*/

class CreateQueue {
  public $front;
  public $rear;
  // khoi tao mot array rong
  public $queue = array();

  function __construct() {
    $this->rear = -1;
    $this->front = -1;
  }

  // tạo một chức năng để kiểm tra xem
  // hàng đợi trống hay không
  public function isEmpty() {
    if($this->rear == $this->front) {
      echo "Queue is empty. \n";
    } else {
      echo "Queue is not empty. \n";
    }
  }

  //tạo một hàm để trả về kích thước của hàng đợi
  public function size() {
     return ($this->rear - $this->front);
  }

  //thêm một mục vào “cuối” (đuôi) của hàng đợi 
  public function EnQueue($x) {
    $this->queue[++$this->rear] = $x;
    echo "<pre>";
    echo $x." is added into the queue. \n";
  }

  //loại bỏ một mục khỏi “mặt trước” (đầu) của hàng đợi.
  public function DeQueue() {
    if($this->rear == $this->front){
      echo "Queue is empty. \n";
    } else {
      $x = $this->queue[++$this->front];
      echo $x." is deleted from the queue. \n";
    }
  }

  //tạo một hàm để lấy phần tử phía trước
  public function frontElement() {
    if($this->rear == $this->front) {
      echo "Queue is empty. \n";
    } else {
      return "the front element is->".$this->queue[$this->front+1];
    }
  }

  //tạo một hàm để lấy phần tử phía sau
  public function rearElement() {
    if($this->rear == $this->front) {
      echo "Queue is empty. \n";
    } else {
      return "the last element is->".$this->queue[$this->rear];
    }
  }
  // return the array data if it is not empty
  public function getData(){
    if($this->queue !=Null){
        return $this->queue;
    }
    else{
        return 0;
    }
  }
}

// test the code 
$MyQueue = new CreateQueue();
$MyQueue->EnQueue(10);
$MyQueue->EnQueue(20);
$MyQueue->EnQueue(30);
$MyQueue->EnQueue(40);

$MyQueue->DeQueue();
$MyQueue->isEmpty();
echo $MyQueue->rearElement();
echo "<br>";
echo $MyQueue->frontElement();
print_r($MyQueue->getData());
?>
```
```
// kết quả
    10 is added into the queue. 
    20 is added into the queue. 
    30 is added into the queue. 
    40 is added into the queue. 
    10 is deleted from the queue. 
    Queue is not empty. 
    the last element is->40
    the front element is->20Array
    (
        [0] => 10
        [1] => 20
        [2] => 30
        [3] => 40
    )
```
### 2.0 Alogrithm in PHP(Thuật toán trong PHP)
```
Khái niệm Thuật toán là một tập hợp hữu hạn các chỉ thị để thực thi theo một thứ tự nào đó để thu được kết quả mong muốn. Giải thuật độc lập với các ngôn ngữ lập trình.
```
### Đặc điểm của 1 giải thuật
```
    Tính xác định: Một giải thuật nên rõ ràng. Mỗi bước nên rõ ràng và chỉ mang 1 mục đích nhất định
    Dữ liệu đầu vào xác định: Giải thuật nên có 0 hay nhiều hơn 1 đầu vào xác định
    Dữ liệu đầu ra: Một giải thuật nên có 1 hoặc nhiều dữ liệu đầu ra đã xác định, nên kết nối với kiểu dữ liệu đầu ra mong muốn.
    Tính dừng: Giải thuật nên kết thúc sau một số bước hữu hạn.
    Tính hiệu quả: Một giải thuật nên là có thể thi hành được với các nguồn có sẵn, tức là có khả năng giải quyết hiệu quả vấn đề trong điều kiện thời gian và tài nguyên cho phép.
    Tính phổ biến: Một giải thuật có tính phổ biến nếu giải thuật này có thể giải quyết được một lớp các vấn đề tương tự.
    Độc lập: Một giải thuật nên có các chỉ thị độc lập với bất kỳ phần code lập trình nào.
```
### Các thuật toán
## 1.1 Search

### Linear search:
        là một giải thuật tìm kiếm cơ bản. Thuật toán này duyệt qua từng phần tử của mảng cho đến khi tìm được giá trị cần tìm hoặc đến khi hết mảng.
        Thuật toán này phù hợp cho tìm kiểm trong một danh sách vừa và chưa được sắp xếp .
## ví dụ
```php
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
// kết quả :the value is 4
```
### Binary search:

        + Là một thuật toán phổ biến trong tìm kiếm sắp xếp.

        ý tưởng của thuật toán: Thuật toán thực hiện tìm kiếm bằng cách chia liên tục các mảng thành hai nửa. Thực hiện so sánh giá trị tìm kiếm với giá trị ở giữa mảng.
            Nếu bằng: Trả về và kết thúc thuật toán
            Giá trị search > : Tiếp tục tìm kiêm ở mảng bên con bên phải
            Giá trị search <: tiếp tục tìm kiếm ở mảng bên trái .
```php
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
// kết quả: 5 Exists
```
## 1.2 Sort
### selectsort:

    Ý tưởng thuật toán: Duyệt qua từng phần tử mảng và tìm kiếm phần tử lớn nhất ( nhỏ nhất ) trong mảng chưa sắp xếp và đổi chỗ cho phần tử ở đầu mảng chưa sắp xếp.

    Thuật toán chia mảng thành hai mảng :
        Mảng đã sắp xếp
        Mảng chưa sắp xếp

    Sau mỗi bước lặp, số phần tử cuả mảng đã sắp xếp tăng lên 1
## ví dụ
```php
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
// kết quả:
Mang ban dau 1 10 23 50 4 9 -4
Mang da duoc xep
-4 1 4 9 10 23 50 
```
## Insertsort:
 Thuật toán duyệt qua từng phần tử mảng và chèn nó vào đúng vị trí trong mảng con(từ phần tử đầu tien đến phần tử trước mảng con ) sao cho vẫn bảo đảm đúng tính chất.

    Tạo mảng con đã xắp xếp có 1 phần tử.
    Duyệt từ phần tử thứ 2 của mảng và sắp xếp vào mảng con đã săp xếp ( từ vị trí đâu tiên tới vị trí trước phần tử đang xét)
    Sau mỗi lần duyệt, số phần tử trong mảng con đã sắp xếp sẽ tăng lên.
```php
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
//kết quả
Original Array : 3, 0, 2, 5, -1, 4, 1 Sorted Array : Array ( [0] => -1 [1] => 0 [2] => 1 [3] => 2 [4] => 3 [5] => 4 [6] => 5 )
```
## Buble sort:

    Ý tưởng: Thuật toán này thực hiện sắp xếp liên tục các phần tử ở cạnh nhau nếu phần tử đứng sau nhỏ hơn phần tử đứng truóc cho đến khi cuối mảng ( Phần tử lớn nhất sẽ nổi lên cuối mảng ).
```php
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
// kết quả:
original array is->1235648790
0
1
2
3
4
5
6
7
8
9
```
## merge sort:
 Thuật toán này sử dụng phương pháp chia để tri. Trong đó chia liên tiếp mảng thành các mảng con cho đến khi mảng con chỉ có một phần tử. Sau đó sẽ tiến hành gộp các mảng con lại. Khi gộp sẽ tiến hành sắp xếp luon
 ## ví dụ
```php
<?php
/*
 Thuật toán này sử dụng phương pháp chia để tri.
 Trong đó chia liên tiếp mảng thành các mảng con cho đến khi mảng con chỉ có một phần tử.
 Sau đó sẽ tiến hành gộp các mảng con lại. Khi gộp sẽ tiến hành sắp xếp luon
*/
function merge_sort($my_array){
	if(count($my_array) == 1 ) return $my_array;
	$mid = count($my_array) / 2;
    $left = array_slice($my_array, 0, $mid);
    $right = array_slice($my_array, $mid);
	$left = merge_sort($left);
	$right = merge_sort($right);
	return merge($left, $right);
}
function merge($left, $right){
	$res = array();
	while (count($left) > 0 && count($right) > 0){
		if($left[0] > $right[0]){
			$res[] = $right[0];
			$right = array_slice($right , 1);
		}else{
			$res[] = $left[0];
			$left = array_slice($left, 1);
		}
	}
	while (count($left) > 0){
		$res[] = $left[0];
		$left = array_slice($left, 1);
	}
	while (count($right) > 0){
		$res[] = $right[0];
		$right = array_slice($right, 1);
	}
	return $res;
}
$test_array = array(100, 54, 7, 2, 5, 4, 1);
echo "<pre/>";
echo "Original Array : ";
echo implode(', ',$test_array );
echo "<pre/>";
echo "\nSorted Array :";
echo implode(', ',merge_sort($test_array))."\n";
?>
// kết quả
Original Array : 100, 54, 7, 2, 5, 4, 1
Sorted Array :1, 2, 4, 5, 7, 54, 100
```
## Quick sort:
 Thuật tóan này sử dụng phương pháp chia để trị giống merge sort, nhưng chia theo phương pháp pivot. Thuật toán sẽ chọn 1 phần tử trong mảng là làm pivot ( điểm đánh dấu). Mấu chốt chính của thuật toán là phân đoạn (hàm partition ): Chọn pivot và sắp xếp vào đúng vị trí trong mảng, chuyển tất cả các phần tử nhỏ hơn pivot sang bên trái pivot và chuyển tất cả các phần tử lớn hơn pivot sang bên phải pivot. Khi đó ta có hai mảng con bên trái pivot và bên phải pivot. Tiếp tục phân đoạn cho hai mảng con đó.
## ví dụ
```php
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
// kết quả:
key.0->.value.2
key.1->.value.2
key.2->.value.4
key.3->.value.4
key.4->.value.4
key.5->.value.5
key.6->.value.5
key.7->.value.43
key.8->.value.63
key.9->.value.63
```