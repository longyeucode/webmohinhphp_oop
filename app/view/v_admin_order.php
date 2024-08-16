<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/8c204d0fdf.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container-fluid main-page">
        <div class="app-main">
          
            <div class="main-content">
                <h3 class="title-page">
                    Quản lí đơn hàng
                </h3>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Mã tài khoản</th>
                            <th>Ngày Đặt hàng</th>
                            <th>Số Lượng</th>
                            <th>Tổng tiền</th>
                            <th>Cài đặt</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($cart as $od):?>
          
          <tr>
            <td><?=$od['MaDH']?></td>
            <td><?=$od['idtk']?></td>
            <td><?=$od['NgayDat']?></td>
            <td><?=$od['SoLuongSP']?></td>
            <td><?=$od['TongTien']?></td>
            <td><?php switch ($od['TrangThai']) {
              case 'cho-xac-nhan':
                echo'  <div class="badge text-bg-warning">Chờ xác nhận</div>';
                break;
                case 'chuan-bi-hang':
                  echo'  <div class="badge text-bg-info">Đang chuẩn bị</div>';
                  break;
                  case 'dang-giao-hang':
                    echo'  <div class="badge text-bg-primary">Đang giao hàng</div>';
                    break;
                    case 'giao-thanh-cong':
                      echo'  <div class="badge text-bg-success">Giao thành công</div>';
                      break;
                      case 'huy-don':
                        echo'  <div class="badge text-bg-warning">Đã hủy</div>';
                        break;
            
            }
           ?>
            </td>
           
            <td>
          
              <a href="../public/index.php?url=order/updatetrangthai/<?=$od['MaDH']?>/chuan-bi-hang" class="btn btn-outline-danger btn-sm">Xác nhận</a>
              <a href="../public/index.php?url=order/updatetrangthai/<?=$od['MaDH']?>/dang-giao-hang" class="btn btn-outline-danger btn-sm">Đang giao hàng</a>
             
              <a href="../public/index.php?url=order/updatetrangthai/<?=$od['MaDH']?>/giao-thanh-cong" class="btn btn-outline-danger btn-sm">Giao Thành Công</a>

          
            </td>
          </tr>
          <?php endforeach;?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Mã tài khoản</th>
                            <th>Ngày Đặt hàng</th>
                            <th>Số Lượng</th>
                            <th>Tổng tiền</th>
                            <th>Cài đặt</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <script src="assets/js/main.js"></script>
    <script>
        new DataTable('#example');
    </script>
</body>

</html>