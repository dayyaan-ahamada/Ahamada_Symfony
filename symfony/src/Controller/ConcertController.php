<?php

namespace App\Controller;

use App\Entity\Concert;
use App\Form\ConcertType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class ConcertController extends AbstractController
{

    /**
     * Affiche tous les concerts
     *
     * @return Response
     *
     * @Route("/", name="homepage")
     *
     */
    public function index(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Concert::class);
        return $this->render('show/index.html.twig', [
            'concerts' => $repository->findAll(),
        ]);
    }
    /**
     * Affiche les concerts à venir d'un groupe
     *
     * @param int $id
     * @return Response
     *
     * @Route("concert/{id}", name="show_list")
     *
     */
    public function list(int $id): Response
    {
        $repository = $this->getDoctrine()->getRepository(Concert::class);
        return $this->render('show/show.html.twig', [
                'concert' => $repository->find($id)
            ]
        );
    }

    /**
     * @param Request $request
     * @return Response
     * @Route("/new", name="concert_new", methods={"GET","POST"})
     * @isGranted("ROLE_ADMIN")
     *
     */
    public function createConcert(Request $request): Response
    {
        $show = new Concert();

        $form = $this->createForm(concertType::class, $show);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $show = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($show);
            $entityManager->flush();

            return $this->redirectToRoute('homepage');
        }
        return $this->render('show/new.html.twig', [
                'form' => $form->createView()
            ]
        );
    }

    /**
     * @param Request $request
     * @param Concert $concert
     * @return Response
     * @Route("/{id}/edit", name="concert_edit", methods={"GET","POST"})
     * @isGranted("ROLE_ADMIN")
     */
    public function edit(Request $request, Concert $concert): Response
    {
        $form = $this->createForm(ConcertType::class, $concert);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('homepage');
        }

        return $this->render('show/edit.html.twig', [
            'concert' => $concert,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @param Request $request
     * @param Concert $concert
     * @return Response
     * @Route("/{id}", name="concert_delete", methods={"DELETE"})
     * @isGranted("ROLE_ADMIN")
     */
    public function delete(Request $request, Concert $concert): Response
    {
        if ($this->isCsrfTokenValid('delete'.$concert->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($concert);
            $entityManager->flush();
        }

        return $this->redirectToRoute('homepage');
    }
}