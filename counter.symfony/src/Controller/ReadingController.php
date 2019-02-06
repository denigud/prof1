<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ReadingController extends AbstractController
{
    /**
     * @Route("/reading", name="reading")
     */
    public function index()
    {
        return $this->render('reading/index.html.twig', [
            'controller_name' => 'ReadingController',
        ]);
    }
}
