<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theo Giỏi Đơn Hàng</title>
    <link rel="stylesheet" href="../public/css/css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary mt-4" >
       
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
  </nav>

  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th>Mã Đơn Hàng</th>
          <th>Ngày Mua</th>
          <th>Số Sản Phẩm</th>
          <th>Tổng Tiền</th>
          <th>Trạng Thái</th>
          <th>Hành Động</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($orderlist as $od):?>
          
        <tr>
          <td><?=$od['MaDH']?></td>
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
          
          }($od['TrangThai'])?></td>
         
          <td>
         <?php if($od['TrangThai']=='cho-xac-nhan'):?>
            <a href="#" class="btn btn-outline-danger btn-sm">Hủy đơn</a>
            <?php elseif($od['TrangThai']=='giao-thanh-cong'):?>
            <a href="#" class="btn btn-outline-warning btn-sm">Trả hàng</a>
            <?php else:?>
              <a href="#" class="btn btn-outline-warning btn-sm">liên hệ </a>
              <?php endif;?>
          </td>
        </tr>
        <?php endforeach;?>
      </tbody>
    </table>
  </div>





    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>