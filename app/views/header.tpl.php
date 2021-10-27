<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- we get the path so we don't loose our links -->
    <base href="<?= $_SERVER['BASE_URI'] ?>/">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">

    <title>Pokédex</title>
</head>

<body>
    <section id="container">
        <header>
            <h1><a href="<?= $router->generate('home') ?>">Pokédex</a></h1>

            <nav>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= $router->generate('home') ?>">Liste</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $router->generate('type') ?>">Types</a>
                    </li>
                </ul>

            </nav>

        </header>