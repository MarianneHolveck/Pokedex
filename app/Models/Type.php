<?php

namespace Pokedex\Models;

use Pokedex\Utils\Database;
use \PDO;

class Type extends CoreModel
{
    private $name;
    private $color;


    // on récupère toutes les données contenues dans la table pokemon

    public function findAll()
    {
        $sql = " SELECT * FROM `type` ";

        // Database::getPDO() me retourne l'objet PDO représentant la connexion à la BDD
        $pdo = Database::getPDO();

        // j'execute ma requête pour récupérer les pokemon
        $pdoStatement = $pdo->query($sql);

        $types = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);

        // renvoie un tableau d'objets
        return $types;
    }

    public function find($id)
    {
        $sql = "SELECT pokemon_type.*, type.id, type.name, pokemon.numero, type.color
        FROM `pokemon_type`
        JOIN `type`
        ON pokemon_type.type_id = type.id
        JOIN `pokemon`
        ON pokemon_type.pokemon_numero = pokemon.numero
        WHERE pokemon.numero = $id";

        $pdo = Database::getPDO();

        // j'execute ma requête pour récupérer les pokemon
        $pdoStatement = $pdo->query($sql);

        $type = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);

        // renvoie un tableau d'objets
        return $type;
    }



   

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}
