<?php
class cartmodel {

    protected $db;
    public function __construct(){
        $this->db = new database();
    }
    public function __destruct(){
        unset($this->db);
    }
    public function getcart($idtk){
        return $this->db->pdo_query_one("SELECT * From donhang WHERE idtk=? AND TrangThai='gio-hang'", $idtk);

    }
    public function addcart($idtk){
        return $this->db->pdo_execute("INSERT INTO donhang(`idtk`) VALUES(?)", $idtk );
    }
    public function addproduct($MaDH,$MaSP){
        $kq=$this->hascart($MaDH,$MaSP);
        if($kq){
        // Đã có tăng số lượng
        // Tăng số lượng sản phẩm 
        return $this->db->pdo_execute("UPDATE chitietdonhang SET SoLuongSP = SoLuongSP + 1 WHERE MaDH=? AND MaSP=?",$MaDH, $MaSP);
    }
      else{ 
         return $this->db->pdo_execute("INSERT INTO chitietdonhang(`MaDH`,`MaSP`) VALUES (?, ?)",$MaDH, $MaSP);
      }
    }
public function hascart($MaDH,$MaSP){
    return $this->db->pdo_query_one("SELECT * FROM chitietdonhang WHERE MaDH=? AND MaSP=?",$MaDH,$MaSP);
}
public function getproductincart($idtk){
    return $this->db->pdo_query("SELECT dh.MaDH, sp.MaSP, sp.name,sp.price,sp.photo,ct.SoLuongSP,sp.soluong AS tonkho,dh.MaGG FROM donhang dh INNER JOIN chitietdonhang ct ON dh.MaDH=ct.MaDH INNER JOIN product sp ON ct.MaSP=sp.MaSP where idtk=?",$idtk);

}
public function increaseitem($MaDH,$MaSP){
    return $this->db->pdo_execute("UPDATE  chitietdonhang SET SoLuongSP=SoLuongSP+1 WHERE MaDH=? AND MaSP=?",$MaDH,$MaSP);
}
public function decreaseitem($MaDH,$MaSP){
    return $this->db->pdo_execute("UPDATE  chitietdonhang SET SoLuongSP=SoLuongSP-1 WHERE MaDH=? AND MaSP=?",$MaDH,$MaSP);
}
public function removeitem($MaDH,$MaSP){
    return $this->db->pdo_execute("DELETE FROM chitietdonhang WHERE MaDH=? AND MaSP=?",$MaDH,$MaSP);
}

public function addorder($MaDH,$tongsp,$TongTien){
     $this->db->pdo_execute("UPDATE donhang SET SoLuongSP=?, TongTien=?, NgayDat=?, TrangThai='cho-xac-nhan' WHERE MaDH=?",$tongsp,$TongTien,date('y-m-d h:i:s'),$MaDH);
    $this->db->pdo_execute("UPDATE chitietdonhang ct SET GiaBan=(SELECT price FROM product sp WHERE ct.MaSP =sp.MaSP) WHERE MaDH=?",$MaDH);
    }
 public function getorderbyuser($idtk){
    return $this->db->pdo_query("SELECT * FROM donhang WHERE idtk=? AND TrangThai != 'giohang'",$idtk);
 }  
 public function getcartall(){
    return $this->db->pdo_query("SELECT * From donhang ");

}
public function updatetrangthai($MaDH,$trangthai){
    return $this->db->pdo_query("UPDATE donhang SET TrangThai=? WHERE MaDH=? ",$trangthai,$MaDH);

}
// public function updatetrangthai($MaDH,$trangthai){
//     return $this->db->pdo_query("UPDATE donhang SET TrangThai=? WHERE MaDH=? ",$trangthai,$MaDH);

// }
}





?>