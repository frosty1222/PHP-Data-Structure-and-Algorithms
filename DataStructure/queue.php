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