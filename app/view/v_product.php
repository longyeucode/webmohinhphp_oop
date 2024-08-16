
<?php
if(isset($_POST['search'])){
    $search=$_POST['search'];
}
else{
    $search='';
}

?>







<h1> đây là danh mục</h1>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                
                <li class="nav-item">
                <?php foreach( $ctt as $sp): ?>
                 
                    <?php echo '<li><a class="nav-link" href="index.php?url=page/product&iddm=' . $sp['id_category'] . '">' . $sp['name_category'] . '</a></li>'; ?>

                <?php endforeach ;?> 
                </li>
               
            </ul>
        </div>
    </div>
</nav>
<form class="searchForm" action="" method="POST">
                    <input type="search" name="search"  placeholder="Nhập tìm kiếm của bạn">
                    <button type="submit">Tìm kiếm</button>
                </form>





                <h2>Các dòng thẻ</h2>
<div class="container">
    <div class="row">
        <?php foreach ($productall as $prđ): ?>
        <div class="col-lg-3 p-2">
            <div class="card">
                <a href="index.php?url=product/productdetail/<?php echo $prđ['MaSP']; ?>">
                    <div class="boximg">
                        <img src="<?php echo $prđ['photo']; ?>" alt="" style="width: 100%;">
                    </div>
                    <a><?php echo $prđ['name']; ?></a>
                    <p><?php echo $prđ['price']; ?></p>
                </a>
                <button>Thêm vào giỏ hàng</button>
            </div>
        </div>
        <?php endforeach; ?>
        <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php
    for ($i=1; $i <=$page ; $i++) { 
        # code...
    
    ?>
    <li class="page-item"><a class="page-link" href="?url=page/product&page=<?php echo $i?>"><?php echo $i;?></a></li>
   
   <?php
    }
   ?>
  
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
    </div>
    
</div>



<script src="../public/js/bootstrap.bundle.min.js"></script>
</body>
</html>