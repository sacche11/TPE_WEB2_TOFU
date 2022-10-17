<?php

class GenreModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tofu;charset=utf8', 'root', '');
    }

    //devuelve los generos
    public function getGenre() {
        $query = $this->db->prepare("SELECT * FROM gender");
        $query->execute();
        $genre = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $genre;
    }

    //Busca y devuelve un genero dado un id.
    public function getGenreById($id){
        $query = $this->db->prepare("SELECT * FROM gender WHERE id_gender = ?");
        $query->execute([$id]);
        $genre = $query->fetchAll(PDO::FETCH_OBJ);

        return $genre;
    }

    //Inserta un genero en la base de datos.
    public function insertGenre ($genre) {
        $query = $this->db->prepare("INSERT INTO gender (gender) VALUES (?)");
        $query->execute([$genre]);
    }

    //elimina un genero en la base de datos.
    function deleteGenreById($id) {
        $query = $this->db->prepare('DELETE FROM gender WHERE id_gender = ?');
        $query->execute([$id]);
    }

    //Edita un genero de la base de datos.
    function editeGenre($id,$genre){
        $query = $this->db->prepare("UPDATE gender SET gender = ?  WHERE id_gender = ?");
        $query->execute([$genre, $id]);
    }
}