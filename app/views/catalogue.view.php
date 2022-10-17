<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class CatalogueView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); 
    }

    function showCatalogue($catalogue) {
        $this->smarty->assign('catalogue', $catalogue);
        $this->smarty->display('tableCatalogue.tpl');
    }
    
    function showTablesAlls($catalogue,$genre,$logged){     
        $this->smarty->assign('catalogue', $catalogue);
        $this->smarty->assign('genre', $genre);
        $this->smarty->assign('logged', $logged);

        $this->smarty->display('tablesAlls.tpl');
    }

    function showFormsAdds(){
        $this->smarty->display('formsAdds.tpl');
    }

    function showEditeFromCatalogue($element,$allGenre){
        $this->smarty->assign('element', $element);
        $this->smarty->assign('allGenre', $allGenre);
        $this->smarty->display('formEditeCatalogue.tpl');
    }
}