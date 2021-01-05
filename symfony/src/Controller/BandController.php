<?php


namespace App\Controller;


use App\Entity\Band;
use App\Form\BandType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class BandController extends AbstractController
{
    /**
     * @return Response
     * @Route("band/", name="band_list")
     */
    public function bandsAll(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Band::class);
        $bands = $repository->findAll();
        return $this->render('band/list.html.twig', [
                'bands' => $bands
            ]
        );
    }

    /**
     * @param int $id
     * @return Response
     * @Route("band/{id}", name="band_show")
     */
    public function list(int $id): Response
    {
        $repository = $this->getDoctrine()->getRepository(Band::class);

        return $this->render('band/band.html.twig', [
                'band' => $repository->find($id)
            ]
        );
    }

    /**
     * @param Request $request
     * @return Response
     * @Route("/new", name="band_new", methods={"GET","POST"})
     * @isGranted("ROLE_ADMIN")
     */
    public function new(Request $request): Response
    {
        $band = new Band();
        $form = $this->createForm(BandType::class, $band);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($band);
            $entityManager->flush();

            return $this->redirectToRoute('band_list');
        }
        return $this->render('band/new.html.twig', [
            'band' => $band,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @param Request $request
     * @param Band $band
     * @return Response
     * @Route("/{id}/edit", name="band_edit", methods={"GET","POST"})
     * @isGranted("ROLE_ADMIN")
     */
    public function edit(Request $request, Band $band): Response
    {
        $form = $this->createForm(BandType::class, $band);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('band_list');
        }

        return $this->render('band/edit.html.twig', [
            'band' => $band,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @param Request $request
     * @param Band $band
     * @return Response
     * @Route("/{id}", name="band_delete", methods={"DELETE"})
     * @isGranted("ROLE_ADMIN")
     */
    public function delete(Request $request, Band $band): Response
    {
        if ($this->isCsrfTokenValid('delete'.$band->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($band);
            $entityManager->flush();
        }

        return $this->redirectToRoute('band_list');
    }
}