<?php

namespace App\Controller;

use App\Entity\Reading;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

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

        $em->persist($reading);

        $em->flush();

        return $this->redirect('/');
    }


    /**
     * @Route("/reading/{id}", name="reading_show")
     */
    public function showAction($id, Request $request)
    {

        $reading = $this->getDoctrine()
            ->getRepository(Reading::class)
            ->find($id);

        if (!$reading) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        $form = $this->createFormBuilder($reading)
            ->add('date', DateType::class)
            ->add('reading', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Сохранить'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $task = $form->getData();

             $em = $this->getDoctrine()->getManager();
             $em->persist($task);
             $em->flush();

            return $this->redirect('/');
        }

        return $this->render('/reading/show.html.twig', ['form' => $form->createView(), 'reading' => $reading]);
    }

    /**
     * @Route("/reading/edit/{id}")
     */
    public function updateAction($id)
    {
        $request = Request::createFromGlobals();
        $em = $this->getDoctrine()->getManager();
        $reading = $em->getRepository(Reading::class)->find($id);

        if (!$reading) {
            throw $this->createNotFoundException(
                'No reading found for id '.$id
            );
        }

        $reading->setMeterId($request->request->get('meterId'));
        $reading->setDate(new \DateTime($request->request->get('date')));
        $reading->setReading($request->request->get('count'));

        $em->flush();

        return $this->redirectToRoute('reading_show', [
            'id' => $reading->getId()
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
