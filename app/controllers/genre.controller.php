<?php
require_once './app/models/genre.model.php';
require_once './app/views/genre.view.php';

class GenreController{
    private $model;
    private $view;

    public function __construct() {
        $this->model = new GenreModel();
        $this->view = new GenreView();
    }

    public function showGenre() {
        $genre = $this->model->getGenre();
        $this->view->showGenre($genre);
    }

    public function showEditeGenre($id){
        $genre = $this->model->getGenreById($id);
        $allGenre = $this->model->getGenre();
        $this->view->showEditeGenre($genre,$allGenre);
    }

    function addToGenre() {
        $genre = $_POST['genre'];
        $this->model->insertGenre($genre);
        header("Location: ".BASE_URL."show_home");
    }

    function deleteGenre($id){
        $this->model->deleteGenreById($id);
        header("Location: " . BASE_URL . "show_home");
    }

    function editeGenre($id){
        $genre = $_POST['gender'];
        $this->model->editeGenre($id,$genre);
        header("Location: ".BASE_URL."show_home");
    }
}