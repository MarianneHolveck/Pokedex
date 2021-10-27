<?php

namespace Pokedex\Controllers;

use Pokedex\Models\Pokemon;
use Pokedex\Models\Type;

class TypeController extends CoreController
{
    // We get all different page
    function type($params)
    {

        $modelType = new Type();

        $types = $modelType->findAll();


        $this->show('type', ['types' => $types]);
    }

    // We get one specific type thanks to the link with the pokemon database
    function typeID($params)
    {
        $modelType = new Pokemon();

        $type = $modelType->findAllByType($params['id']);


        $this->show('typeId', ['type' => $type]);
    }
}
