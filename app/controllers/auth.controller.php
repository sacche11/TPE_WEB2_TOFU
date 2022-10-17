<?php

require_once './app/views/auth.view.php';
require_once './app/models/user.model.php';
require_once './app/helpers/auth.helper.php';

class AuthController {
    private $view;
    private $model;
    private $authHelper;
    
    public function __construct() {
        $this->model = new UserModel();
        $this->view = new AuthView();
        $this->authHelper = new AuthHelper();
    }

    public function showFormLogin() {
        $logged = $this->authHelper->checkLoggedIn();
        $this->view->showFormLogin("",$logged);
    }

    public function validateUser() {
        $logged = $this->authHelper->checkLoggedIn();

        if(!$logged){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = $this->model->getUserByEmail($email);

            if (!empty($user) && password_verify($password, $user->password)) {
                session_start();
                $_SESSION['USER_ID'] = $user->id_user;
                $_SESSION['USER_EMAIL'] = $user->email;
                $_SESSION['IS_LOGGED'] = true;
                header("Location: ".BASE_URL."show_home");
            }else{
                $this->view->showFormLogin("El usuario o la contraseña no existe.");
            }
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: ".BASE_URL." login");
    }
}