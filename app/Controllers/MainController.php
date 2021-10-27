<?php

namespace Pokedex\Controllers;

use Pokedex\Models\Pokemon;

class MainController extends CoreController
{
    // This method will get us to the home page
    function home($params)
    {
        $modelPokemon = new Pokemon();

        $pokemons = $modelPokemon->findAll();

        $this->show('home', ['pokemons' => $pokemons]);
    }
}
