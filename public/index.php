<?php

require __DIR__ . '/../vendor/autoload.php';

$page = $_GET['page'] ?? '/';
$router = new AltoRouter();
$router->setBasePath($_SERVER['BASE_URI']);

$router->map(
    'GET',
    '/', 
    [    
        'controller' => 'MainController',
        'method' => 'index'
    ],
    'homepage'
);

$router->map(
    'GET',
    '/a-propos', 
    [    
        'controller' => 'MainController',
        'method' => 'about'
    ],
    'about'
);

$router->map(
    'GET',
    '/scores', 
    [    
        'controller' => 'ScoreController',
        'method' => 'index'
    ],
    'scores'
);

$match = $router->match();

if ($match !== false) {
    $controllerToUse = $match['target']['controller'];
    $controllerToUse = "MemoryGame\Controllers\\" . $controllerToUse;
    $methodToUse = $match['target']['method'];
    $controller = new $controllerToUse;
    $controller->$methodToUse($match['params']);
} else {
    echo "Page 404";
}