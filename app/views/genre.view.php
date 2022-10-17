<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class GenreView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); 
    }

    function showGenre($genre) {
        $this->smarty->assign('genre', $genre);
        $this->smarty->display('tableGenre.tpl');
    }

    function showEditeGenre($genre,$allGenre){
        $this->smarty->assign('genre', $genre);
        $this->smarty->assign('allGenre', $allGenre);
        $this->smarty->display('formEditeGenre.tpl');
    }
}