<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Clients2Controller extends AbstractController
{
    /**
     * @Route("/clients2", name="clients2")
     */
    public function index(): Response
    {
        return $this->render('clients2/index.html.twig', [
            'controller_name' => 'Clients2Controller',
        ]);
    }
}
