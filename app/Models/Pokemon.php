<?php

namespace Pokedex\Models;

use Pokedex\Utils\Database;
use \PDO;

class Pokemon extends CoreModel
{
    private $nom;
    private $pv;
    private $attaque;
    private $defense;
    private $attaque_spe;
    private $defense_spe;
    private $vitesse;
    private $numero;

    // We get all the data from the pokemon table
    public function findAll()
    {
        $sql = " SELECT * FROM `pokemon` ";

        // Database::getPDO() get the object from the connexion
        $pdo = Database::getPDO();

        // Execute the sql query
        $pdoStatement = $pdo->query($sql);

        $pokemons = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);

        // renvoie un tableau d'objets
        return $pokemons;
    }

    // Get one pokemon from table thx to id
    public function find($id)
    {
        $sql = "SELECT * FROM `pokemon` WHERE `numero` = $id";
        
        $pdo = Database::getPDO();

        $pdoStatement = $pdo->query($sql);

        $pokemon = $pdoStatement->fetchObject(self::class);

        return $pokemon;
    }

    // Get all pokemon thx to the link with de type database
    public function findAllByType($id)
    {
        $sql = "SELECT pokemon_type.*, type.id, type.name, pokemon.numero, type.color, pokemon.nom
        FROM `pokemon_type`
        JOIN `type`
        ON pokemon_type.type_id = type.id
        JOIN `pokemon`
        ON pokemon_type.pokemon_numero = pokemon.numero
        WHERE type.id = $id";

        $pdo = Database::getPDO();

        $pdoStatement = $pdo->query($sql);

        $pokemon = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);

        return $pokemon;
    }



    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of pv
     */
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * Set the value of pv
     *
     * @return  self
     */
    public function setPv($pv)
    {
        $this->pv = $pv;

        return $this;
    }

    /**
     * Get the value of attaque
     */
    public function getAttaque()
    {
        return $this->attaque;
    }

    /**
     * Set the value of attaque
     *
     * @return  self
     */
    public function setAttaque($attaque)
    {
        $this->attaque = $attaque;

        return $this;
    }

    /**
     * Get the value of defense
     */
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * Set the value of defense
     *
     * @return  self
     */
    public function setDefense($defense)
    {
        $this->defense = $defense;

        return $this;
    }

    /**
     * Get the value of attaque_spe
     */
    public function getAttaque_spe()
    {
        return $this->attaque_spe;
    }

    /**
     * Set the value of attaque_spe
     *
     * @return  self
     */
    public function setAttaque_spe($attaque_spe)
    {
        $this->attaque_spe = $attaque_spe;

        return $this;
    }

    /**
     * Get the value of defense_spe
     */
    public function getDefense_spe()
    {
        return $this->defense_spe;
    }

    /**
     * Set the value of defense_spe
     *
     * @return  self
     */
    public function setDefense_spe($defense_spe)
    {
        $this->defense_spe = $defense_spe;

        return $this;
    }

    /**
     * Get the value of vitesse
     */
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * Set the value of vitesse
     *
     * @return  self
     */
    public function setVitesse($vitesse)
    {
        $this->vitesse = $vitesse;

        return $this;
    }

    /**
     * Get the value of numero
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }
}
