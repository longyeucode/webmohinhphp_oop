<section class="row2" id="anh">
            
            <!-- <div  id="anh" ">
             <img src="../public/img/banner1.png" alt="" class="anh" height="820px">
            </div> -->
        
    

        <div class="container"> 
        <div class="wrapper">
    <div class="slideshow">
        <img id="img" src="/img/10.png" alt="" class="floating-slide" >
    </div>
       <ul class=" menu3">
       <p class="title_menu3">MeGaGundam</p>
       <p class="ttct">Đã bao giờ bạn tự hỏi Gundam Ver Ka là gì chưa? Hôm nay chúng ta hãy cùng với nShop tìm hiểu về thuật ngữ cực kỳ hay ho này, biết được tại sao các mẫu Gundam Ver Ka lại đẹp và "chuẩn" hơn các bản Gundam thường nhiều đến vậy. Fan của Gunpla cũng như Bandai chắc chắn không thể bỏ qua video clip này được rồi!</p>
      
       <button class="button" style="vertical-align:middle"><span>Xem thêm</span></button>
   </ul>
   
    </div>
</div>
</section>

 <section class="row3">
    <div class="container">
        <h2>Các dòng thẻ </h2>
        <?php foreach ($productall as $prđ):?>
<div class="box">
<a href="index.php?url=product/productdetail/<?php echo $prđ['MaSP']; ?>">
    <div class="boximg">
        <img src="<?php echo $prđ['photo']; ?>" alt="" style="width: 100%;">
    </div>
    <a ><?php echo $prđ['name'];?></a>
    <p><?php echo $prđ['price'];?></p>
        </a>
        <a href="index.php?url=cart/index/<?php echo $prđ['MaSP'] ?>">
    <button>Thêm vào giỏ hàng +</button>
    </a>
</div>
<?php endforeach;?>
<?php foreach ($productall as $prđ):?>
<div class="box">
<a href="index.php?url=product/productdetail/<?php echo $prđ['MaSP']; ?>">
    <div class="boximg">
        <img src="<?php echo $prđ['photo']; ?>" alt="" style="width: 100%;">
    </div>
    <a ><?php echo $prđ['name'];?></a>
    
    <p><?php echo $prđ['price'];?></p>
        </a>

        <a href="index.php?url=product/productdetail/<?php echo $prđ['MaSP']; ?>">
    <button>Thêm vào giỏ hàng +</button>
</a>
</div>
<?php endforeach;?>

    </div>

        
 </section>
 <!-- <section class="row2" id="anh">
 <div class="container"> 
    <div class="wrapper">
<div class="slideshow">
    <img id="img" src="../public/img/snapedit_1705686898605.png" alt="" class="floating-slide" >
</div>
   <ul class=" menu3">
   <p class="title_menu3">MeGaGundam</p>
   <p class="ttct">Đã bao giờ bạn tự hỏi Gundam Ver Ka là gì chưa? Hôm nay chúng ta hãy cùng với nShop tìm hiểu về thuật ngữ cực kỳ hay ho này, biết được tại sao các mẫu Gundam Ver Ka lại đẹp và "chuẩn" hơn các bản Gundam thường nhiều đến vậy. Fan của Gunpla cũng như Bandai chắc chắn không thể bỏ qua video clip này được rồi!</p>
  
   <button class="button" style="vertical-align:middle"><span>Xem thêm</span></button>
</ul> -->
    <!-- <ul class="menu4">
        <li> <a >Hỗ trợ</a></li>
        <li><a href="">  Ranking</a></li>
        <li><a href="">VIP Membem</a></li>
        <li><a href="">Reset Pass 2</a></li>
        <li><a href="">Nhập code</a></li>
        <li> <a href="">Khóa TK gấp</a></li>
    </ul> -->
</div>
</div>
        
        
   

</body>
<script src="fo4.js">
   
</script>
</html>


