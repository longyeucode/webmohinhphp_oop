<?php
class productmodel{

protected $db;
public function __construct(){
    $this->db = new database();
}
public function __destruct(){
    unset($this->db); 
}

  
    public function get4(){
      return  $this->db->pdo_query("SELECT * From product limit 4 ");
  }
  public function getAll(){
    return  $this->db->pdo_query("SELECT * From product ");
}
public function getdssp($iddm,$search) {
  if(isset($_POST['search'])){
    $search=$_POST['search'];
}
else{
    $search='';
}

if (isset($_GET['pages'])) {
  $pages = $_GET['pages'];
} else {
  $pages = 1;
}
$limit=9;// số bản ghi 
$row_page=($pages-1)*$limit;

  $sql = "SELECT * FROM product WHERE 1 ";
  if ($iddm > 0) {
      $sql .= "AND FK_id_category = " . $iddm;
  }
  if (!empty($search)) {
      $sql .= " AND name LIKE '%$search%'";
  }
  $sql .= " ORDER BY MaSP DESC LIMIT " . $limit . " OFFSET " . $row_page;
print_r($pages);
  return $this->db->pdo_query($sql);
}
public function getnumberpage(){
  if (isset($_GET['pages'])) {
    $pages = $_GET['pages'];
} else {
    $pages = 1;
}
  $limit=8;// số bản ghi 
$row_page=($pages-1)*$limit;
$sql_check = $this->db->pdo_query_one("SELECT COUNT(*) FROM product") ;
$totalRecords=$sql_check; 


$getResult = $totalRecords['COUNT(*)'];
$num_page = ceil($getResult / $limit);

return $num_page;
}
  

public function GetAllcategory(){
  return  $this->db->pdo_query("SELECT * From category ORDER BY id_category DESC");
}
  public function getbyid($MaSP){
    return $this->db->pdo_query_one("SELECT * From product where MaSP = ? ",$MaSP);
  }
  // public function GetAllcategory(){
  //   return $this->db->pdo_query("SELECT * FROM category ORDER BY id_category desc");
  // }
  public function delete_product($MaSP){
    return $this->db->pdo_execute("DELETE FROM product WHERE MaSP=?",$MaSP);
}
public function add_product( $name,$photo,$price,$soluong,$description){
  return $this->db->pdo_execute(" INSERT INtO product (name, photo, price, soluong, description)VALUE (?, ?, ?, ?, ?)", $name, $photo,$price,$soluong,$description);
}
public function update_product($MaSP, $name, $price, $soluong, $description) {
   return $this->db->pdo_execute( "UPDATE product 
          SET 
              name = ?,
              price = ?,  
              soluong = ?,
              description = ?
          WHERE 
              MaSP = ?",$name, $price, $soluong, $description, $MaSP); // Thêm điều kiện để cập nhật sản phẩm nào

}

}



?>