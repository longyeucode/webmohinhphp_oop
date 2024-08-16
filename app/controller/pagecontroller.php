<?php
    //Xử lý các trang như trang chủ liên hệ giối thiệu
class pagecontroller extends corecontroller{
protected $product;
public function __construct(){
    $this->product = $this->loadmodel('product');
}
   public function index(){
    $this->loadview('v_header');
    $data['productall'] = $this->product->get4();
       $this-> loadview('v_page_home',$data);
       $this->loadview('v_footer');
    }
    public function product(){
        $this->loadview('v_header');
       
        if(!isset($_GET['iddm'])){
            $iddm=0;

        }
        else{
            $iddm=$_GET['iddm'];
        }
        if(isset($_POST['search'])){
            $search=$_POST['search'];
        }
        else{
            $search='';
        }
        $data['page']=$this->product->getnumberpage();
        $data['productall'] = $this->product->getdssp($iddm, $search);
       
        $data['ctt'] = $this->product->GetAllcategory();  
        $this->loadview('v_product',$data);
        $this->loadview('v_footer');
       
    }
    
    public function about(){
        $this->loadview('v_header');
        echo "Trang Giới Thiệu";
        $this->loadview('v_footer');
    }
   

    public function contact(){
        $this->loadview('v_header');
        echo "Trang Liên Hệ";
    }

}

   
?>