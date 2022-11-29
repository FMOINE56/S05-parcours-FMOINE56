<?php



    /**
     * Affichage de la page d'accueil.
     *
     * @return void
     */

    class MainController
    {
        public function home()
        
        {
            $characterObject = new Character;
            $characters = $characterObject->findAll();
            //var_dump($characters);
            $data = ['characters' => $characters];
           // var_dump($data);

           $this->show('home', $characters);
        }

        public function creators()
        {
            $this->show('creators');
        }

        public function show($viewName, $data= [])
        {
            global $router;
    
            $absoluteUrl = $_SERVER['BASE_URI'];
          //  var_dump(extract($viewData));
      
    
            require_once __DIR__ . '/../views/header.tpl.php';
            require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
            require_once __DIR__ . '/../views/footer.tpl.php';
        }

    }