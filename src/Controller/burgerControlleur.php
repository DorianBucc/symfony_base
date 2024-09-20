<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Constraints\Length;

class burgerControlleur extends AbstractController
{

    #[Route('/burgers/', name: 'list')]
    public function list(): Response
    {
        return $this->render('burger_list.html.twig');
    }

    #[Route('/burgers/{id}', name: 'burgers')]
    public function show($id): Response
    {
        $tab = [["id"=>1,"titre"=>"Burger Classic","content"=>"C'est un Classic Burger."],
                ["id"=>2,"titre"=>"Whooper","content"=>"C'est un Whooper de chez Burger King."]];
        for($i = 0; $i < 4; $i++){
            if($id == $tab[$i]["id"])
                return $this->render('burger.html.twig', ["titre"=>$tab[$i]["titre"],"content"=>$tab[$i]["content"]]);
        }
        return $this->render('burger_list.html.twig');
    }

    
}