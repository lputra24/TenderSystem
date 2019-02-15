<?php
include 'connection.php';
class Query {
  private $conn = null;

  public function __construct() {
    if ($this->conn == null) {
      $connection = new Connection();
      $this->conn = $connection->connect();
    }
  }
  public function addAdmin($Email,$Password,$Name,$PhoneMobile,$Status,$Level){
    $data = array ($Email,$Password,$Name,$PhoneMobile,$Status,$Level);
    // if ($Email!=null && $Password!=null) {
    //   try {
        $query = $this->conn->prepare('INSERT INTO administrator (Email,Password,Name,PhoneMobile,Status,Level) VALUES (?,?,?,?,?,?)');
        $query->execute($data);
    //     if ($query) {
    //       return $query->fetch();
    //     }
    //     else {
    //       return '0';
    //     }
    //   } catch (PDOException $e) {
    //     return 'Cannot save data!<br>'.$e->getMessage();
    //   }
    // }else {
    //   return '0';
    // }
  }
  public function ceklogin($Email,$Password){
    try {
      $query = $this->conn->prepare('SELECT * FROM administrator WHERE Email=? AND password=?');
      $query->bindParam(1, $Email, PDO::PARAM_INT);
      $query->bindParam(2, $Password, PDO::PARAM_INT);
      $query->execute();
      if ($query) {
          return $query->fetch();
      }
      else {
        return '0';
      }
    } catch (PDOException $e) {
      return 'Cannot save data!<br>'.$e->getMessage();
    }
  }

}

?>
