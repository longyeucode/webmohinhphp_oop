<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/css/bootstrap.min.css">
</head>
<body>
   
     <div class="container ">
     <div class="row mt-5">
         <div class="col-md-9 ">
     <table  class="table mt-4"><thead>
    <tr>
      <th style="width: 100px;">ảnh</th>
      <th>Sản phẩm</th>
      <th>Giá bán</th>
      <th>Số lượng</th>
      <th> Thành tiền</th>
      <th>Hành động</th>
    </tr>
  </thead>
  <tbody>
    <?php 
     $tongsp=0;
     $tongtien=0;
     $tienship=18000;
    if (isset($_SESSION['account']))
    
    foreach ($cart as $sp):;

    ?>
      <tr>
    <td><img src="<?php echo $sp['photo'];?> "class="w-100"></td>
    <td><?php echo $sp['name'];?></td>

    <td>

      <?php echo $sp['price'];?>
   </td>
    <td>
    <a href="<?= APPURL?>index.php?url=cart/cartitem/<?=$sp['MaDH']?>/<?=$sp['MaSP']?>/more ">+</a>
    <?php echo $sp['SoLuongSP'];?>
    <a class="<?= ($sp['SoLuongSP']>=1) ? 'disabled' : '' ?>" 
   href="<?= APPURL ?>index.php?url=cart/cartitem/<?= $sp['MaDH'] ?>/<?= $sp['MaSP'] ?>/less">-</a>
</td>
    <td><?php echo $sp['price'] * $sp['SoLuongSP'];?>
   
   </td>
    <td><a href="<?= APPURL?>index.php?url=cart/cartitem/<?=$sp['MaDH']?>/<?=$sp['MaSP']?>/remove ">Xóa</a>
    </tr>
    
<?php
    $tongsp=$tongsp+$sp['SoLuongSP'];
$tongtien+=$sp['SoLuongSP']*$sp['price'];

endforeach;?>
  </tbody>
</table>
</div>
<div class="col-md-3">
  
<div class="card mt-4">
<div class="card-header">
  <strong>Hóa đơn</strong>
</div>
<div class="card-body">
  <div class="row mb-2">
  <div class="col-6">Tổng sản phẩm :</div>
    <div class="col-6 text- end">
      <strong><?php echo $tongsp?> sản phẩm</strong>
    </div>
    <div class="col-6">Tạm tính :</div>
    <div class="col-6 text- end">
      <strong><?php echo number_format($tongtien)?> $</strong>
    </div>
  </div>
  <?php

  $GiaGiam=0;
if(isset($voucher['GiaGiam'])){
  $GiaGiam=$voucher['GiaGiam'];

}
else if(isset($voucher['TiLeGiam'])){
$GiaGiam = min(($tongtien*$tienship)*$voucher['TiLeGiam']/100,
$voucher['GiamToiDa']);
}
  
  
  
  ?>
  <div class="col-6">Tiền ship :</div>
    <div class="col-6 text- end">
      <strong><?php echo number_format($tienship)?> $</strong>
    </div>
  </div>
  <div class="row mb-2">
    <div class="col-6">mã giảm giá :</div>
    <div class="col-6 text- end">
     
      <strong>-<?=  number_format($GiaGiam); ?>đ</strong>
    </div>
<div class="col-12 text end">
  <div class="input-group">
    <form action="../public/index.php?url=order/addvoucher" method="post">
  <input name="voucher"type="text" class="form-control" value="<?=(isset($sp['MaGG']))?$sp['MaGG']:''?>">
<input type="hidden" name="MaDH" value="<?=$sp['MaDH']?>">
  <button type=""submit>Áp dụng</button> 
</form>
</div>
</div>
  </div>
  <div class="row mb-2">
    <div class="col-6">
      <strong>Tổng tiền</strong></div>
    <div class="col-6 text- end">
      <strong><?=number_format($tongtien+$tienship-$GiaGiam)?></strong>
    </div>
  </div>
</div>

</div>
<a href="../public/index.php?url=cart/cartdetail">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-top: 20px;">
  Thanh toán sản phẩm
</button>
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
      <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button type="button" class="btn btn-primary">Save changes</button>
    </div>
 </div>
  </div>
</div>
</div>
     </div>
     </div>
     
 
    
    <script src="../js/js/bootstrap.bundle.min.js">
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })
    </script>
</body>
</html>