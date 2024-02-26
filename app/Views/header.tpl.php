<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $absoluteUrl ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= $absoluteUrl ?>/css/styles.css">
    <title>Memory Game</title>
</head>

<body>
    <header>
        <nav>
            <a href="<?= $router->generate('homepage') ?>" alt="Lien vers le jeu">Le Jeu</a>
            <a href="<?= $router->generate('scores') ?>" alt="Lien vers les scores">Scores</a>
            <a href="<?= $router->generate('about') ?>" alt="Lien vers à propos"> À Propos </a>

        </nav>
    </header>
    <h1>Memory Game </h1>