<?php

class Mahasiswa_model{
    // private $mhs = [
    //     [
    //         "nama"=>"Wira",
    //         "nim"=>"12150311480",
    //         "email"=>"wira@gmail.com",
    //         "jurusan"=>"Sistem Informasi"
    //     ],
    //     [
    //         "nama"=>"Fardhan",
    //         "nim"=>"12151234480",
    //         "email"=>"fardhan@gmail.com",
    //         "jurusan"=>"Sastra Pertanian"
    //     ],
    //     [
    //         "nama"=>"Agung Hapsah",
    //         "nim"=>"12150354321",
    //         "email"=>"agung@gmail.com",
    //         "jurusan"=>"DKV"
    //     ]
    // ];

    private $dbh; // dabase handler
    private $stmt;

    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try{
            $this->dbh = new PDO($dsn, 'root', '12345678');
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa(){
        // return $this->mhs;
        $this->stmt = $this->dbh->prepare('SELECT * from mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>