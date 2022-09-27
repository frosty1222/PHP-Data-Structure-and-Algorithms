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