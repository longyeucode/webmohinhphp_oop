
<div class="main-content">
          <h3 class="title-page">Sản phẩm</h3>
          <div class="d-flex justify-content-end">
            <a href="../public/index.php?url=user/addproduct" class="btn btn-primary mb-2"
              >Thêm sản phẩm</a
            >
          </div>
          <table id="example" class="table table-striped" style="width: 100%">
            <thead>
              <tr>
              <th>MaSP</th>
                <th>Name</th>
                <th>Photo</th>
                <th>Price</th>
                <th>SoLuong</th>
                <th>Start date</th>
               
              </tr>
            </thead>
            <tbody>
                <?php foreach($productall as $sp):?>
              <tr>
                <td><?=$sp['MaSP']?></td>
                <td><?=$sp['name']?></td>
                <td><img src="<?=$sp['photo']?>" alt="" width="20%">  </td>
                <td><?=$sp['price']?></td>
                <td><?=$sp['soluong']?></td>
                <td>
                  <a href="../public/index.php?url=user/productshow/<?=$sp['MaSP']?>" class="btn btn-warning"
                    ><i class="fa-solid fa-pen-to-square"></i> Sửa</a
                  >
                  <a href="<?= APPURL?>index.php?url=user/delete_product/<?=$sp['MaSP']?>" class="btn btn-danger"
                    > Xóa</a
                  >
                </td>
              </tr>
       <?php endforeach;?>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
    <script src="assets/js/main.js"></script>
    <script>
      new DataTable("#example");
    </script>
  </body>
</html>