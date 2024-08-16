<?php
class cartcontroller extends corecontroller{
        
        protected $order;

        // public function __construct(){
        //     $this->order = $this->loadmodel('cart');
        // }
    public function index($MaSP){
     
    //  echo "theem san pham".$MaSP;
    if(isset($_SESSION['account'])){
        // đã dăng nhập -> lưu database
        $idtk = $_SESSION['account']['idtk'];
        $order=$this->loadmodel('cart');
       
        $cart=$order->getcart($idtk);

        if(!$cart){//chưa có giỏ hàng -> tạo giỏ hàng
        $order->addcart($idtk);
        $order=$order->getcart($idtk);
        }
        // 
        // thêm sản phẩm vào giỏ hàng
        $order->addproduct($cart['MaDH'],$MaSP);
        //đã có giỏ hàng chỉ thêm vào giỏ hàng thôi
        header('location: ../public/index.php');
    }  
     else{
    // chưa đăng nhập thì lưu vào session
    // chưa có giỏ hàng 
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart']=[];
    }
    //có giỏ hàng thì thêm sp
    //sp đã có giỏ hàng chưa
    // chưa thì thêm vào
    $timthay= false;
    $i=0;
    foreach($_SESSION['cart'] as $sp){
        if($sp['MaSP']==$MaSP){// đá có trong giỏ hàng 
            $_SESSION['cart'][$i]['SoLuongSP']++;
            $timthay=true;
            break;
            

        }
        $i++;
    }
    if(!$timthay){// chưa có trong giỏ->thêm vào
        array_push($_SESSION['cart'],[
            "MaSP"=>$MaSP,
            "photo"=>$photo,
            "name"=>$name,
            "price"=>$price,
            "SoLuongSP"=>1,
        ]);

    }
   } 
    

} 
public function cart(){
    $order=$this->loadmodel('cart');
    $this->loadview('v_header');
    //đã đăng nhập load cart từ database
   
    if(isset($_SESSION['account'])){
        $cart =$order->getproductincart($_SESSION['account']['idtk']);
        $order=$this->loadmodel('voucher');
        if(isset($cart[0]['MaGG'])){
            $data['voucher']=$order->getbyid($cart[0]['MaGG']);
        }
        $data['cart']=$cart;
        $this->loadview('v_cart',$data);
    
    }/////
       
    else{
        //chưa đăng nhập -> loadcart từ session và database
        $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

        $data['cart'] = $cart;
       
        $this->loadview('v_cart', $data);
      
        
    }
    
    $this->loadview('v_footer');
}
public function cartitem($MaDH,$MaSP,$loai){
    $order=$this->loadmodel('cart');
    if($loai=="more"){
$order->increaseitem($MaDH,$MaSP);
    }
    elseif($loai=="remove"){
        $order->removeitem($MaDH,$MaSP);
    }
    else{
        $order->decreaseitem($MaDH,$MaSP);
    }
    header('location:' .APPURL.'index.php?url=cart/cart');
}
public function cartdetail(){
    $order=$this->loadmodel('cart');
    if(isset($_SESSION['account'])){
        $cart =$order->getproductincart($_SESSION['account']['idtk']);

        $data['cart']=$cart;    
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $order->addorder($_POST['MaDH'],$_POST['SoLuongSP'],$_POST['TongTien']);
            showNoti('Đặt hàng thành công! Đơn hàng của bạn sẽ được xử lí trong thời gian sớm nhất vui lòng theo dõi đơn hàng tại tài khoản','success');
            header('location:index.php');
        }

        $this->loadview('v_cartdetail', $data);
    }
    else{
        header('location:' .APPURL.'index.php?url=user/login');
    }
       
        
    }






   
}

    


?>