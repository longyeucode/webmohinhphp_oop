<?php
class vouchermodel {
    protected $db;
    public function __construct(){
        $this->db = new database();
    }
    public function __destruct(){
        unset($this->db);
    }
    public function checkvoucher($MaGG){
        //voucher có tồn tại không?
       $voucher= $this->db->pdo_query_one("SELECT * FROM magiamgia WHERE MaGG=? ",$MaGG);
        if(!$voucher) return false;

        //voucher còn lượt sử dụng không?
        if($voucher['SoLuong']<=0)return false;
        //voucher còn hạn ?
        // $now = new DateTime();
        // if(!(new DateTime($voucher['NgayBatDau'])<=$now
        // && $now<= new DateTime($voucher['NgayKetThuc']))
        // )
        // {
        //     return false;

        // }
        return true;
    }
    public function getbyid($MaGG){
        return $this->db->pdo_query_one("SELECT * FROM magiamgia WHERE MaGG=?", $MaGG);
    }
    public function addvoucher($MaDH,$voucher){
        return $this->db->pdo_execute("UPDATE donhang SET MaGG=? WHERE MaDH=?",$voucher,$MaDH);
    }
}




?>