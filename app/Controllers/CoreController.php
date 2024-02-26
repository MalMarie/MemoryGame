<?php

namespace MemoryGame\Controllers;

use MemoryGame\Models\Score;

// Cette classe sert de parent aux autres controllers, elle contient le code commun à tous les controllers
class CoreController
{
    /**
     * Méthode qui se charge d'afficher les templates de la page
     *
     * @param string $pageName Nom du template principal
     * @param array $viewData Tableau contenant les données à transmettre à la vue
     * @return void
     */
    public function show($pageName, $viewData = [])
    {
        $absoluteUrl = $_SERVER['BASE_URI'];
        global $router;

        // $scoreModel  = new Score;
        // $navigationScore = $scoreModel->findAll();

        extract($viewData);

        require_once __DIR__ . '/../Views/header.tpl.php';
        require_once __DIR__ . '/../Views/' . $pageName . '.tpl.php';
        require_once __DIR__ . '/../Views/footer.tpl.php';
    }
}
