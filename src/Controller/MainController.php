<?php
// src/Controller/MainController.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class MainController
{

    #[Route('/')]

    public function Accueil()
    {
        die('Accueil');
    }

    public function A_propos()
    {
        die('À propos');
    }
}

?>
