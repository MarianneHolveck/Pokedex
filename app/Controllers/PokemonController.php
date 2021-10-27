<?php

namespace Pokedex\Controllers;

use Pokedex\Models\Pokemon;
use Pokedex\Models\Type;

class PokemonController extends CoreController
{

    // This method get us to one specific pokemon page
    function pokemon($params)
    {
        // $params has the value of the varible in the route

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
