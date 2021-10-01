<?php  

class Mahasiswa_model {

  private $dbh;
  private $stmt;

  public function __construct()
  {
    //data source name
    $dsn = 'mysql:host=localhost;dbname=phpmvc';
    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch(PDOException $e) {
      die($e->getMessage());
    }
  }
 /* private $mhs = [
    [
      "nama" => "Elti Rahmawati",
      "nrp" => "193040154",
      "email" => "193040154@mail.unpas.ac.id",
      "jurusan" => "Teknik informatika"

    ],
    [
      "nama" => "Fajri Khoirunnisa",
      "nrp" => "193040159",
      "email" => "193040159@mail.unpas.ac.id",
      "jurusan" => "Teknik informatika"
    ],
    [
      "nama" => "Neli Marliana",
      "nrp" => "193040165",
      "email" => "193040165@mail.unpas.ac.id",
      "jurusan" => "Teknik informatika"
    ]

  ]; */

  public function getAllMahasiswa()
  {
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}