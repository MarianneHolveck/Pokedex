# Requêtes pokemon

## Home page

- récupérer tous les pokemons, leur nom et leurs numéros

```sql
SELECT * FROM `pokemon`
```

## Pokemon page

- récupérer un pokemon par rapport à son numéro

```sql
SELECT * FROM `pokemon` WHERE `numero` = $id
```

- récupérer tous les type

```sql
SELECT * FROM `type`
```

- récupérer tous les type

```sql
SELECT * FROM `type`
```

- récupérer les types par rapport au numéro du pokemon

```sql
SELECT pokemon_type.*, type.id, type.name, pokemon.numero, type.color
FROM `pokemon_type`
JOIN `type`
ON pokemon_type.type_id = type.id
JOIN `pokemon`
ON pokemon_type.pokemon_numero = pokemon.numero
WHERE pokemon.numero = $id
```

## Pokemon type

- récupérer les pokemons par rapport au type

```sql
SELECT pokemon_type.*, type.id, type.name, pokemon.numero, type.color, pokemon.nom
        FROM `pokemon_type`
        JOIN `type`
        ON pokemon_type.type_id = type.id
        JOIN `pokemon`
        ON pokemon_type.pokemon_numero = pokemon.numero
        WHERE type.id = $id
```
