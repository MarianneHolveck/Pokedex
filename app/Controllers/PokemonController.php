<?php

namespace Pokedex\Controllers;

use Pokedex\Models\Pokemon;
use Pokedex\Models\Type;

class PokemonController extends CoreController
{

    function pokemon($params)
    {
        // $params est un array fourni par le dispatcher lors de l'appel à cette action
        // il contient toutes les valeurs variables de la route courante
        // ici pokemon/[i:id] => $params['id'] contient le numéro du  pokemon

        $modelPokemon = new Pokemon();

        $pokemon = $modelPokemon->find($params['id']);

        $modelType = new Type();

        $type = $modelType->find($params['id']);

        $this->show('pokemon', [
            'pokemon' => $pokemon,
            'type' => $type
        ]);
    }
}
