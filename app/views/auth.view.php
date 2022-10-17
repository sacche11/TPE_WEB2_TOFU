<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class AuthView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function showFormLogin($error = null,$logged = false) {
        $this->smarty->assign('error', $error);
        $this->smarty->assign('logged', $logged);
        $this->smarty->display('formLogin.tpl');
    }
}