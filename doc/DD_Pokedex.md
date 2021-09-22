# Dictionnaire de données

## Pokemons (`pokemon`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant de notre pokemon|
|nom|VARCHAR(255)|NOT NULL|Le nom du pokemon|
|pv|INT(11)|NOT NULL|Le nombre de PV|
|attaque|INT(11)|NOT NULL|Le nombre de d'attaque|
|defense|INT(11)|NOT NULL|Le nombre de de défense|
|attaque_spe|INT(11)|NOT NULL|Le nombre d'attaque spé|
|defense_spe|INT(11)|NOT NULL|Le nombre de défense spé|
|vitesse|INT(11)|NOT NULL|Le nombre de point en vitesse|
|numero|INT(10)|NOT NULL|Le numéro du pokemon dans le pokedex|

## Lien entre le tableau Pokemon et type (`pokemon_type`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant du type|
|pokemon_numero|INT(10)|NOT NULL|Le numéro du pokemon|
|pokemon_id|INT(10)|NOT NULL|Le numéro du type|

## Type de pokemon (`type`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant du type|
|name|VARCHAR(255)|NOT NULL|Le nom du type|
|color|VARCHAR(255)|NOT NULL|La couleur du type|
