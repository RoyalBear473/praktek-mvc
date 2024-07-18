<?php
class buku_model{
    private $table = 'buku';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
    public function getBukuById($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind(':id' , $id);
        return $this->db->single();
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
    public function deleteDataBuku($id){ 
        $query = "DELETE FROM " . $this->table . " WHERE id=:id";
        $this->db->query($query);
        $this->db->bind(':id' , $id);
        $this->db->execute();
        return $this->db->rowCount(); 
    }
    public function updateDataBuku($data){
        $query = "UPDATE " . $this->table . " SET judul = :judul , kode_buku = :kode , pengarang = :pengarang , penerbit = :penerbit , tahun_terbit = :tahun";
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