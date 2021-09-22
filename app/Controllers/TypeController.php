<?php

namespace Pokedex\Controllers;

use Pokedex\Models\Pokemon;
use Pokedex\Models\Type;

class TypeController extends CoreController
{

    function type($params)
    {
        // $params est un array fourni par le dispatcher lors de l'appel à cette action
        // il contient toutes les valeurs variables de la route courante
        // ici pokemon/[i:id] => $params['id'] contient le numéro du  pokemon
        $modelType = new Type();

        $types = $modelType->findAll();


        $this->show('type', ['types' => $types]);
    }

    function typeID($params)
    {
        $modelType = new Pokemon();

        $type = $modelType->findAllByType($params['id']);


        $this->show('typeId', ['type' => $type]);
    }
}
