<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class indexControlleur extends AbstractController
{
    #[Route('/index/{id}', name: 'index')]
    public function index($id): Response
    {
        return $this->render('index.html.twig',[
            "id" => $id
        ]);
    }
}