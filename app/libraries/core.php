<?php
class core{
   protected $controller = 'page';
   protected  $method = 'index';
   protected $params=[];
public function __construct(){
    if( isset($_GET['url']) ){
        $url = explode("/", $_GET['url']);
        $this ->controller = $url[0];
        unset($url[0]);
        $this ->method = $url[1];
        unset($url[1]);
        $this ->params = array_values($url);
        // print_r($url);
    }
    spl_autoload_register (function($class){
        $ctrlPath='../app/controller/'.$class.'.php';
        $modellPath='../app/model/'.$class.'.php';
        $liPath='../app/libraries/'.$class.'.php';
        if(file_exists( $ctrlPath)){
    include_once $ctrlPath;
        }
     if(file_exists( $modellPath)){
            include_once $modellPath;
        }
    if(file_exists( $liPath)){
            include_once $liPath;
        }            
    });
    $class = new ( $this->controller.'controller')(); // tạo class tên là controller 
    call_user_func_array([$class, $this ->method ], $this->params);
}



    



}


?>