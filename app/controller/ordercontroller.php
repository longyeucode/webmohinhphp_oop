<?php
class ordercontroller extends corecontroller{
    protected $order;
    protected $voucher;
public function addvoucher(){
    // $this->loadview('v_header');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $order=$this->loadmodel('cart');
        $voucher=$this->loadmodel('voucher');
        //kiểm tra vocher hợp lệ 
        if($voucher->checkvoucher($_POST['voucher'])){
            $voucher->addvoucher($_POST['MaDH'],$_POST['voucher']);
        }
     
       
        //nếu không hợp lệ->add vào order
        else{
    showNoti("Mã giảm giá không hợp lệ hoặc hết hạn sử dụng","warning");
        }
}


//tính số tiền được giảm dựa trên voucher
      header('Location: ../public/index.php?url=cart/cart'); 
    }
  public function ordercheck(){
    $this->loadview('v_header');
    $order=$this->loadmodel('cart');
$data['orderlist']=$order->getorderbyuser($_SESSION['account']['idtk']);
$this->loadview('v_ordercheck',$data);
  }
  public function orderfull(){
    $this->loadview('v_admin_header');
    $order=$this->loadmodel('cart');
    $data['cart']=$order->getcartall();
$this->loadview('v_admin_order',$data);
  }
  public function updatetrangthai($MaDH,$trangthai){
    
    $order=$this->loadmodel('cart');
    $order->updatetrangthai($MaDH,$trangthai);
header('location:../public/index.php?url=order/orderfull');
  }
//   public function deletetrangthai($MaDH){
    
//     $order=$this->loadmodel('cart');
//     $order->deletetrangthai($MaDH);
// header('location:../public/index.php?url=order/ordercheck');
//   }
}






?>