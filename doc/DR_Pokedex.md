# Routes

## Sprint 1

| URL | Méthode HTTP | Controller | Méthode | Identifiant | Titre de la page | Contenu | Commentaire |
|--|--|--|--|--|--|--|--|
| `/` | `GET` | `MainController` | `home` | `home` | `Pokédex` | `Page d'accueil avec tous les pokemons` | `quand on clique sur le pokemon on arrive sur la description détaillée` |
| `/pokemon/[id]` | `GET` | `PokemonController` | `pokemon` | `pokemon` | `nom du pokemon` | `nom du pokemon + description + stat` | `[id] sera un entier non-signé correspondant à l'identifiant unique de chaque pokemon` |
| `/type` | `GET` | `TypeController` | `type` | `type` | `type` | `liste de type de pokemon` | `cette page sera une liste de tous les type de pokemon` |
| `/type/[id]` | `GET` | `TypeController` | `typeID` | `typeID` | `Nom du type` | `Liste des pokemons du type selon l'id` | `[id] sera un entier non-signé correspondant à l'identifiant unique de chaque type` |
