<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/profil")
 * @method render(string $string, array $array)
 */

class ProfilController extends AbstractController
{
    /**
     * @Route("/detail", name="profil")
     */
    public function detail() :Response
    {
        // affichage de la page d'accueil
        $info = ['Loper', 'Dave', 'daveloper@code.dom', '01/01/1970'];

        return $this->render('profil/detail.html.twig', ['info' => $info]);
    }
}


