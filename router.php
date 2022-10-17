<?php
require_once './app/controllers/catalogue.controller.php';
require_once './app/controllers/genre.controller.php';
require_once './app/controllers/auth.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}else{
    $action = 'show_home'; // pag por defecto
}

// parsea la accion
$params = explode('/', $action);

// instancio controllers
$catalogueController = new CatalogueController();
$genreController = new GenreController();
$authController = new AuthController();

// tabla de ruteo
switch ($params[0]) {
    case 'show_home':
        $catalogueController->showTablesAlls();
        break;
    case 'show_forms_adds':
        $catalogueController->showFormsAdds();
        break;
    case 'show_login':
        $authController->showFormLogin();
        break;
    case 'show_form_edit_from_catalogue':
        $id = $params[1];
        $catalogueController->showEditeFromCatalogue($id);
        break;
    case 'show_form_edit_genre':
        $id = $params[1];
        $genreController->showEditeGenre($id);
        break;
    case 'validate':
        $authController->validateUser();
        break;
    case 'logout':
        $authController->logout();
        break;
    case 'add_catalogue':
        $catalogueController->addToCatalogue();
        break;
    case 'add_genre':
        $genreController->addToGenre();
        break;
    case 'delete_from_catalogue':
        $id = $params[1];
        $catalogueController->deleteFromCatalogue($id);
        break;
    case 'delete_genre':
        $id = $params[1];
        $genreController->deleteGenre($id);
        break;
    case 'edit_from_catalogue':
        $id = $params[1];
        $catalogueController->EditeFromCatalogue($id);
        break;
    case 'edit_genre':
        $id = $params[1];
        $genreController->editeGenre($id);
        break;
    default:
        echo('404 Page not found');
    break;
}
