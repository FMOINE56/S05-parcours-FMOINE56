<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/Controllers/MainController.php';
// require __DIR__ . '/../app/Controller/CoreController.php';
require __DIR__ . '/../app/Models/Character.php';
require __DIR__ . '/../app/Models/Type.php';
require __DIR__ . '/../app/Utils/Database.php';





$router = new AltoRouter();

$router->setBasePath($_SERVER['BASE_URI']);


$router->map(
    'GET',
    '/',
    ['controller'=>'MainController',
    'method'=>'home'
    ],
    'home'
);

$router->map(
    'GET',
    '/creators',
    ['controller'=>'MainController',
    'method'=>'creators'
    ],
    'creators'

)
;
/*$router->addRoutes([
    [
      'GET', '/', ['method' => 'home',], 'home'
    ],
  
    [
      'GET', '/creators', ['method' => 'creators',], 'creators'
    ]
  
  ]);
*/

//var_dump($_SERVER['BASE_URI']);

$match = $router->match();
//var_dump($match['target']['controller']);

$infoRoutes = $match['target'];
//var_dump($infoRoutes);
//var_dump($infoRoutes['controller']);
//var_dump($infoRoutes['method']);

/*
$test = new MainController;
$test->creators();
*/

// Si c'est pas le cas, on affiche une page 404
if ($match) {
  $controllerName = $infoRoutes['controller'];
  $controller = new $controllerName;
  $methodName = $infoRoutes['method'];
  $controller->$methodName();
}
else {
  header('HTTP/1.0 404 Not Found');
  exit;
}




