<?php

namespace App\Controller;

use App\Entity\Meters;
use App\Entity\Reading;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MeterController extends AbstractController
{
    /**
     * @Route("/", name="meter")
     */
    public function index()
    {

        $counters = $this->getDoctrine()->getRepository(Meters::class)->findAll();

        $readings = $this->getDoctrine()->getRepository(Reading::class)->findAll();

        return $this->render('meter/index.html.twig', [
            'controller_name' => 'MeterController',
            'counters' => $counters,
            'readings' => $readings,
        ]);
    }

    public function __construct()
    {
        return $this;
    }

    public function findAll()
    {
        $repository = $this->getDoctrine()->getRepository(Meters::class);

        $meters = $repository->findAll();
        return $meters;
    }


}
