<h1>đây là trang bill chi tiết</h1>

<form method="POST" action="">
         
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Địa chỉ</label>
            <input type="password" class="form-control" name="diachi">
          </div>
<?php 
     
     $tongtien=0;
     $tongsp=0;
     $tienship=18000;
      
     foreach ($cart as $sp):;
     $tongsp=$tongsp+$sp['SoLuongSP'];
     $tongtien+=$sp['SoLuongSP']*$sp['price'];
    ?>
      
 
       
         <input type="hidden" name="MaDH" value="<?=$sp['MaDH']?>">
         <input type="hidden" name="SoLuongSP"value=" <?=$tongsp?>">
        
         <input type="hidden" name="TongTien"value=" <?=$tongtien?>">
         <?php
  //  $tongsp=$tongsp+$sp['SoLuongSP'];
  
endforeach;
?>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
          <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Bill Page</title>
  </head>
  <body>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="card-header bg-primary text-white">
            <h2 class="mb-0">Bill Chi tiết</h2>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="orderCode">Mã Đơn Hàng:</label>
              <p class="form-control-static"><?=$sp['MaDH']?></p>
            </div>
            <div class="form-group">
              <label for="quantity">Số lượng sản phẩm:</label>
              <p class="form-control-static"><?=$tongsp?></p>
            </div>
           
            <div class="form-group">
              <label for="shippingFee">Shipping:</label>
              <p class="form-control-static"><?=$tienship?></p>
            </div>
            <div class="form-group">
              <label for="totalAmount">Tổng tiền:</label>
              <p class="form-control-static"><?=$tongtien?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Script Bootstrap (JS) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

       
        

        


   

    