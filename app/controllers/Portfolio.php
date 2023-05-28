<?php

namespace App\controllers;
use App\core\Controller;
use App\models\Portfolio_Model;
use App\core\View;

class Portfolio extends Controller{ 

    function __construct() {
        $this->model = new Portfolio_Model();
        $this->view = new View();
    }


    public function index() {

        $data = $this->model->get_data();
        $this->view->generate('portfolio_view.php', 'template_view.php', $data); 
        
        }

     
}

?>