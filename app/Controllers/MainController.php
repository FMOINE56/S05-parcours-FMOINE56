<?php

    /**
     * Affichage de la page d'accueil.
     *
     * @return void
     */

    class MainController
    {
        /**
         * Affiche la page HTML.
         *
         * @param string $viewName Vue à afficher
         * @param array  $viewData Tableau de données pour la vue
         * @return void
         */
        protected function show($viewName, $viewData = [])
        {
            // global permet d'utiliser une variable déclarée dans le fil classique du code
            // (dans index.php). Ici on va pouvoir utiliser la variable $router
            // déclarée dans index.php
            // !ATTENTION C'est une mauvaise pratique d'utiliser global
            global $router;
    
            // la méthode show() affiche les pages : elle est appelée sur toutes les pages, donc je peux charger ici les données communes à toutes pages
    
            /*********************************************************************/
            /* Gestion du menu                                                   */
            /*********************************************************************/
            
            
            // instanciation du modèle Character
            $character = new Character();
    
            require_once __DIR__ . '/../views/header.tpl.php';
            require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
            require_once __DIR__ . '/../views/footer.tpl.php';
        }
    }