<?php
class productcontroller extends corecontroller{
    protected $product;
    public function __construct(){
        $this->product = $this->loadmodel('product');
    }
public function productdetail($MaSP){
    $this->loadview('v_header');
        $data['sp'] = $this->product->getbyid($MaSP);  
        $this-> loadview('v_productdetail',$data);
    
}
public function getcategory(){
    $this->loadview('v_header');
        $data['ctt'] = $this->product->GetAllcategory();  
        $this-> loadview('v_product',$data);
    
}


}



?>