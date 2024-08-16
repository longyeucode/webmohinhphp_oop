<?php
class usermodel{


protected $db;
public function __construct(){
    $this->db = new database();
}
public function __destruct(){
    unset($this->db);
}

   public function getAlluser(){
        $kq = $this->db->pdo_query("SELECT * From account");
        return $kq;
    }
   public function userlogin($email, $password){
        $kq=$this->db->pdo_query_one("SELECT * From account where email=? and password =? ", $email, $password);
        return $kq;   
    }
   public function userregister($fullname,$email, $password){
    return $this->db->pdo_execute("INSERT INTO account (name, email, password) VALUE (?, ?, ?)", $fullname, $email,$password);
    }
    public function isEmailRegistered($email) {
        
        return $this->db->pdo_execute("SELECT COUNT(*) as count FROM account     WHERE email = ?", $email);
    
        
    }

}

?>