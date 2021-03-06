<?php

namespace Pokedex\Models;

use Pokedex\Utils\Database;
use \PDO;

class Type extends CoreModel
{
    private $name;
    private $color;

    public function findAll()
    {
        $sql = " SELECT * FROM `type` ";

        $pdo = Database::getPDO();

        $pdoStatement = $pdo->query($sql);

        $types = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);

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

        $pdoStatement = $pdo->query($sql);

        $type = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);

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
