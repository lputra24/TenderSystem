<?php
include 'koneksi.php';
class Query {
  private $conn = null;

  public function __construct() {
    if ($this->conn == null) {
      $connection = new Connection();
      $this->conn = $connection->connect();
        }
  }
  public function tambahCompany($IdCompany,$NamaCom,$PBF,$NoIjinPBF,$PBFMasaBerlaku,$NoSiup,$SiupMasaBerlaku,$APJNama,$NoSIKA,$APJMasaBerlaku,$NamaPajak,$NPWP,$PhoneWork,$PhoneFax,$PhoneMobile,$Username,$Password,$Email){
    $data = array($IdCompany,$NamaCom,$PBF,$NoIjinPBF,$PBFMasaBerlaku,$NoSiup,$SiupMasaBerlaku,$APJNama,$NoSIKA,$APJMasaBerlaku,$NamaPajak,$NPWP,$PhoneWork,$PhoneFax,$PhoneMobile,$Username,$Password,$Email);
    try {
      $query = $this->conn->prepare('INSERT into company VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
      $query->execute($data);
      if ($query) {
        return $query->fetch();
      }
      else {
        return '0';
      }
    }catch (PDOException $e) {
      return 'Cannot save data !<br>'.$e->getMessage();
    }
  }
  public function tambahSupplier($IdSupplier,$NamaSup,$PBF,$NoIjinPBF,$PBFMasaBerlaku,$NoSiup,$SiupMasaBerlaku,$APJNama,$NoSIKA,$APJMasaBerlaku,$NamaPajak,$NPWP,$Kontak,$PhoneWork,$PhoneFax,$PhoneMobile,$Username,$Password,$Email){
    $data = array($IdSupplier,$NamaSup,$PBF,$NoIjinPBF,$PBFMasaBerlaku,$NoSiup,$SiupMasaBerlaku,$APJNama,$NoSIKA,$APJMasaBerlaku,$NamaPajak,$NPWP,$Kontak,$PhoneWork,$PhoneFax,$PhoneMobile,$Username,$Password,$Email);
    try {
      $query = $this->conn->prepare('INSERT into supplier VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
      $query->execute($data);
      if ($query) {
        return $query->fetch();
      }
      else {
        return '0';
      }
    }catch (PDOException $e) {
      return 'Cannot save data !<br>'.$e->getMessage();
    }
  }
  public function cekAdmin($Email,$Password){
    try {
      $query = $this->conn->prepare('SELECT * FROM administrator where Email=? AND Password=?');
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
      return 'Cannot save date!<br>'.$e->getMessage();
    }
  }
  public function cekLogin($Email,$Password){
    try {
      $query = $this->conn->prepare('SELECT * FROM supplier WHERE Email=? AND Password=?');
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
  public function tambahProvinsi($IdProvinsi,$NamaProvinsi){
    $data = array ($IdProvinsi,$NamaProvinsi);
    if($NamaProvinsi!=null){
      try {
        $query = $this->conn->prepare('INSERT INTO provinsi VALUES (?,?)');
        $query->execute($data);
        if ($query) {
          return $query->fetch();
        }
        else {
          return '0';
        }
      } catch (PDOException $e) {
        return 'Cannot save data!<br>'.$e->getMessage();
      }
    } else {
      echo "<script>alert('ISI DONG');document.location='createProvinsi.php'</script>"; return 0;
    }
  }
  public function tambahKota($IdKota,$NamaKota,$IdProvinsi){
    $data = array ($IdKota,$NamaKota,$IdProvinsi);
    if($NamaKota!=null){
      try{
        $query =$this->conn->prepare('INSERT INTO kota VALUES (?,?,?)');
        $query->execute($data);
        if ($query){
          return $query->fetch();
        } else {
            return '0';
    }
  } catch (PDOException $e) {
    return 'Cannot save data!<br>'.$e->getMessage();
  }
  } else {
    echo "<script>alert('ISI DONG');document.location='createKota.php'</script>"; return 0;
    }
  }
  public function tambahKecamatan($IdKecamatan,$NamaKecamatan,$IdKota,$IdProvinsi){
    $data = array ($IdKecamatan,$NamaKecamatan,$IdKota,$IdProvinsi);
    try {
      $query = $this->conn->prepare('INSERT INTO kecamatan VALUES (?,?,?,?)');
      $query->execute($data);
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
  public function tambahKategori($IdKategori,$NamaKategori,$ImgURL){
    $data = array ($IdKategori,$NamaKategori,$ImgURL);
    if($NamaKategori!=null && $ImgURL!=null){
      try {
        $query = $this->conn->prepare('INSERT INTO kategori VALUES (?,?,?)');
        $query->execute($data);
        if ($query) {
          return $query->fetch();
        }
        else {
          return '0';
        }
      } catch (PDOException $e) {
        return 'Cannot save data!<br>'.$e->getMessage();
      }
    } else {
      echo "<script>alert('ISI DONG');document.location='createCategory.php'</script>"; return 0;
    }
  }
  public function tambahSub($IdSubkategori,$NamaKategori,$IdKategori){
    $data = array ($IdSubkategori,$NamaKategori,$IdKategori);
    try {
      $query = $this->conn->prepare('INSERT INTO subkategori VALUES (?,?,?)');
      $query->execute($data);
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
