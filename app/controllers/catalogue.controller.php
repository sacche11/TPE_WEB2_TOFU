<?php
require_once './app/models/catalogue.model.php';
require_once './app/models/genre.model.php';
require_once './app/views/catalogue.view.php';
require_once './app/helpers/auth.helper.php';


class CatalogueController {
    private $model;
    private $view;
    private $authHelper;

    public function __construct() {
        $this->model = new CatalogueModel();
        $this->model_genre = new GenreModel();
        $this->view = new CatalogueView();
        $this->authHelper = new AuthHelper();
    }

    public function showCatalogue() {
        $catalogue = $this->model->getCatalogue();
        $this->view->showCatalogue($catalogue);
    }

    public function showTablesAlls(){
        $catalogue = $this->model->getCatalogue();
        $genre = $this->model_genre->getGenre();
        $logged = $this->authHelper->checkLoggedIn();
        $this->view->showTablesAlls($catalogue,$genre,$logged);
    }

    public function showFormsAdds(){
        $this->view->showFormsAdds();
    }
    
    function showEditeFromCatalogue($id){
        $element = $this->model->getElementCatalogueById($id);
        $allGenre = $this->model_genre->getGenre();
        $this->view->showEditeFromCatalogue($element,$allGenre);
    }

    function addToCatalogue() {
        $id_gender = $_POST['id_gender'];
        $name = $_POST['name'];
        $type = $_POST['type'];
        $synopsis = $_POST['synopsis'];
        $duration = $_POST['duration'];
        $release_year = $_POST['release_year'];

        $this->model->insertToCatalogue($id_gender, $name, $type, $synopsis, $duration, $release_year);
        header("Location: ".BASE_URL."show_home");
    }
   
    function deleteFromCatalogue($id) {
        $this->model->deleteToCatalogueById($id);
        header("Location: ".BASE_URL."show_home");
    }

    function EditeFromCatalogue($id){
        $id_gender = $_POST['id_gender'];
        $name = $_POST['name'];
        $type = $_POST['type'];
        $synopsis = $_POST['synopsis'];
        $duration = $_POST['duration'];
        $release_year = $_POST['release_year'];

        $this->model->editeElementCatalogue($id_gender, $name, $type, $synopsis, $duration, $release_year,$id);
        header("Location: ".BASE_URL."show_home");
    }
}
