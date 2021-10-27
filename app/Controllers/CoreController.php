<?php

namespace Pokedex\Controllers;


class CoreController
{

    protected function show($viewName, $viewData = [])
    {
        // We give the possibility to the show method to access $router which define in the global context
        global $router;

        // Our view can now be link with the current page
        // All our dynamic data to use is in $viewData
        $viewData['currentPage'] = $viewName;

        // dump($viewData);

        // __DIR__ = /var/www/html/S05/..../Controllers
        require __DIR__ . '/../views/header.tpl.php';
        require __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require __DIR__ . '/../views/footer.tpl.php';
    }
}
