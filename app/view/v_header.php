
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/fo4.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head> 

    <body>
      
    <header class="menungang">

<a href="fo4.html">
    <img src="/img/logo.png" alt="" ></a>
        <div class="headerleft">
            <ul class="menu1">
                <li><a href="index.php">Trang chủ</a> </li>
                <li> <a href="index.php?url=page/product">Sản phẩm</a></li>
                <li> <a href="index.php?url=cart/cart">Giỏ hàng</a> </li>
             
            </ul>
        
        </div>
        <div class="headerright">
            <ul class="menu2">
            <?php
                if(isset($_SESSION['account'])){
                    echo '<li><a href="index.php?url=order/ordercheck">' . $_SESSION['account']['name'] . '</a></li>';
                    echo '<li> <a href="index.php?url=user/logout">đăng xuất</a></li>';
                }
                else{
                    echo '<li><a href="index.php?url=user/login">Đăng nhập</a></li>';
                    echo '<li><a href="index.php?url=user/register">Đăng ký</a></li>';
                    
                }
                ?>
                
            </ul>
          
                    
              
             </span>
            
            </a> 
                
        </div>
    </header>
        
       

   