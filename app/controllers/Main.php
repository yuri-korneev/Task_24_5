<?php

namespace App\controllers;
use App\core\Controller;

class Main extends Controller{ 

    public function index() {

        $this->view->generate('main_view.php', 'template_view.php'); 
        
        }

     public function about() {

        $this->view->generate('about_view.php', 'template_view.php'); 
            
        }
    public function contacts() {

        $this->view->generate('contacts_view.php', 'template_view.php'); 
                
        }

    public function news() {

        $this->view->generate('news_view.php', 'template_view.php'); 
                    
        }

}

?>