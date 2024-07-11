<?php
class buku_model{
    private $table = 'buku';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
    public function getAllBuku(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();  
    }

    public function tambahDataBuku($data){
        $query = "INSERT INTO buku (judul, kode_buku, pengarang, penerbit, tahun_terbit) VALUES (:judul, :kode, :pengarang, :penerbit, :tahun)";
        $this->db->query($query);
        $this->db->bind(':judul' , $data['judul']);
        $this->db->bind(':kode' , $data['kode']);
        $this->db->bind(':pengarang' , $data['pengarang']);
        $this->db->bind(':penerbit' , $data['penerbit']);
        $this->db->bind(':tahun' , $data['tahun']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}