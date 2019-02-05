<?php
/**
 * Created by PhpStorm.
 * User: Gudz.DO
 * Date: 05.02.2019
 * Time: 13:54
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CounterController extends AbstractController
{

    protected $counters = [];
    /**
     * @Route("/")
     */
    public function index()
    {
        return $this->render('counter/index.html.twig',[
            'counters' => $this->counters,
        ]);
    }

}