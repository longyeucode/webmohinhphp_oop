 <?php
    //Xử lý các trang như trang chủ liên hệ giối thiệu
class usercontroller extends corecontroller{
   
protected $user;

public function __construct(){
    $this->user = $this->loadmodel('user');
}

   public function index(){
    $this->loadview('v_header');
   $data['userlistt']=$this->user->getAlluser();
       $this->loadview('v_userlogin',$data);
       $this->loadview('v_footer');
    }

    public function login(){
       
       
        if ($_SERVER['REQUEST_METHOD']=='POST') {
           $kq= $this->user->userlogin($_POST['email'], $_POST['password']);  
          $each=$kq;
            if($kq){
                $FK_id_position = $each['FK_id_position'];
            switch ($FK_id_position) {
                case 1:
                    header('location: ?url=user/admin');
                    break;
                // case 2:
                  
                //     $_SESSION['account'] = $kq; 
                //     header('Location: index.php');
                //     break;
                default:
                $_SESSION['account'] = $kq; 
                    header('location:index.php');
                    break;
            }
            }
            else{
               showNoti('tài khoàn hoặc mật khẩu không chính xác');
              
            }
            
        }
        $this->loadview('v_header');
        $this->loadview('v_userlogin');
        $this->loadview('v_footer');
      }
      public function register(){
        $this->loadview('v_header');
        if ($_SERVER['REQUEST_METHOD']=='POST'){
            $kq =$this->user->userregister($_POST['fullname'],$_POST['email'], $_POST['password']);
        
        
        if($kq){
            header('location: ?url=user/login');
        }
    }
           $this->loadview('v_userregister');
        
           }

     public function logout(){
    unset( $_SESSION['account']);
    header('location: index.php');


     } 
     
     public function admin(){
        $this->loadview('v_admin_header');
        $this->loadview('v_adminindex');
 
     }
     public function admin_product(){
        $this->loadview('v_admin_header');
        $this->user = $this->loadmodel('product');
        $data['productall'] = $this->user->getAll();
        $this->loadview('v_admin_product',$data);

     }
     public function delete_product($MaSP){
        $product=$this->loadmodel('product');
        $product->delete_product($MaSP);   
        header('location:' .APPURL.'index.php?url=user/admin_product');
     }
     public function addproduct(){
        $this->loadview('v_admin_header');
        $user=$this->loadmodel('product');
        if ($_SERVER['REQUEST_METHOD']=='POST'){
            if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
                $upload_dir = 'productphoto/';
    
                // Tạo thư mục nếu nó chưa tồn tại
                if (!file_exists($upload_dir)) {
                    if (!mkdir($upload_dir, 0755, true)) {
                        echo 'Không thể tạo thư mục lưu trữ tệp.';
                        exit;
                    }
                }
    
                $photo = $upload_dir . $_FILES['photo']['name'];
    
                // Di chuyển tệp tải lên vào thư mục lưu trữ
                move_uploaded_file($_FILES['photo']['tmp_name'], $photo);
    
            
             $user->add_product($_POST['name'],$photo,$_POST['price'],$_POST['soluong'], $_POST['description'],);
        header('location:'.APPURL.'index.php?url=user/admin_product');   
    }
}

        $this->loadview('v_admin_addproduct'); 
       ;
     }
   
    public function productshow($MaSP){
        $this->loadview('v_admin_header');
        $user=$this->loadmodel('product');
        $data['sp'] = $user->getbyid($MaSP);  

    $this-> loadview('v_admin_editproduct',$data);
    }
    
    public function productedit($MaSP){
        $user=$this->loadmodel('product');
            // $this->loadview('v_admin_header');
           
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Bỏ chú thích và hoàn tất mã tải lên tệp nếu cần
                // ...
        
                $user->update_product(
                    $_POST['MaSP'],
                    $_POST['name'],
                    $_POST['price'],
                    $_POST['soluong'],
                    $_POST['description']
                );
        
                // Đảm bảo không có đầu ra trước khi chuyển hướng header
                header('location: ' . APPURL . 'index.php?url=user/admin_product');
                exit;
            }
                header('location:'.APPURL.'index.php?url=user/admin_product'); 
           
            }
            
    }




  


   
?>