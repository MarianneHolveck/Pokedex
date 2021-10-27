<?php

//* Front Controller

// include our composer dependancy
require __DIR__ . '/../vendor/autoload.php';

//* creation of an AltoRouter instance
$router = new AltoRouter();

//* we indicate where our files are
$router->setBasePath($_SERVER['BASE_URI']);

//* road table

$routes = [
    //* 'HOME'
    [
        'GET', // HTTP method
        '/', // url 
        // target
        [ 
            'controller' => 'MainController',
            'action' => 'home' // method to use
        ],
        'home' 
    ],
    //* 'pokemon'
    [
        'GET', // HTTP method
        '/pokemon/[i:id]', // url 
        // target
        [ 
            'controller' => 'PokemonController',
            'action' => 'pokemon' // method to use
        ],
        'pokemon' 
    ],
      //* 'types'
    [
        'GET', // HTTP method
        '/type', // url
        // target
        [ 
            'controller' => 'TypeController',
            'action' => 'type' // method to use
        ],
        'type' 
    ],
      //* 'type'
      [
        'GET', // HTTP method
        '/type/[i:id]', // url 
        // target
        [ 
            'controller' => 'TypeController',
            'action' => 'typeID' // method to use
        ],
        'typeID' 
    ]
    
    ];

//* I give my roads to AltoRouter
$router->addRoutes($routes);


//* Dispatcher

$match = $router->match();
// dump($match);

if ($match !== false) {
    $controllerToUse = 'Pokedex\\Controllers\\' . $match['target']['controller'];
    $methodToUse = $match['target']['action'];

    $controller = new $controllerToUse();
    $controller->$methodToUse($match['params']);
}
else {
    http_response_code('404');
}