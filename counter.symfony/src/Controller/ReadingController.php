<?php

namespace App\Controller;

use App\Entity\Reading;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ReadingController extends AbstractController
{
    /**
     * @Route("/reading", name="reading")
     */
    public function index()
    {
        $request = Request::createFromGlobals();
        $em = $this->getDoctrine()->getManager();

        $reading = new Reading();
        $reading->setMeterId($request->request->get('meterId'));
        $reading->setDate(new \DateTime($request->request->get('date')));
        $reading->setReading($request->request->get('count'));

        // скажите Doctrine, что вы (в итоге) хотите сохранить Товар (пока без запросов)
        $em->persist($reading);

        // на самом деле выполнить запросы (т.е. запрос INSERT)
        $em->flush();

        //return new Response('Saved new reading with id '.$reading->getId());
        return $this->redirect('/');
    }

    /**
     * @Route("/reading/edit/{id}")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository(Product::class)->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        $product->setName('New product name!');
        $em->flush();

        return $this->redirectToRoute('product_show', [
            'id' => $product->getId()
        ]);
    }

    /**
     * @Route("/reading/delete/{id}")
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $reading = $em->getRepository(Reading::class)->find($id);

        if (!$reading) {
            throw $this->createNotFoundException(
                'No reading found for id '.$id
            );
        }

        $em->remove($reading);
        $em->flush();

        return $this->redirect('/');
    }
}
