<?php

namespace App\Controller;

use App\Entity\personnage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonnagesController extends AbstractController
{
    #[Route('accueil', name: 'accueil')]
    public function index(): Response
    {
        return $this->render('personnages/index.html.twig', [
            'controller_name' => 'PersonnagesController',
        ]);
    }

    #[Route('persos', name: 'persos')]
    public function persos(): Response
    {
        personnage::creerPersonnage();

        return $this->render('personnages/persos.html.twig', [
            "tabPerso" => personnage::$personnages
        ]);
    }

    #[Route('persos/{nom}', name: 'afficherPersonnage')]
    public function afficherPersonnage(): Response
    {
        // personnage::creerPersonnage();

        // return $this->render('personnages/persos.html.twig', [
        //     "tabPerso" => personnage::$personnages
        // ]);
    }
}
