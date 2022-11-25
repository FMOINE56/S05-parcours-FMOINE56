<?php

require __DIR__ . '/../vendor/autoload.php';

require_once  __DIR__ . '/../app/Models/Character.php';
require_once  __DIR__ . '/../app/Models/Type.php';
require_once '../app/utils/Database.php';

require_once '../app/views/header.tpl.php';
require_once '../app/views/home.tpl.php';
require_once '../app/views/footer.tpl.php';



$router = new AltoRouter();
// var_dump($router);
$router->setBasePath($_SERVER['BASE_URI']);


$router->map(
    'GET',
    '/',
    ['controller'=>'MainController',
    'method'=>'findAll'
    ],
    'home'
);

$router->map(
    'GET',
    '/creators',
    ['controller'=>'MainController',
    'method'=>'findAll'
    ],
    'creators'

)
;
// var_dump($_SERVER['BASE_URI']);

// instanciation de la classe Character
$test=new Character();
$test->findAll();




