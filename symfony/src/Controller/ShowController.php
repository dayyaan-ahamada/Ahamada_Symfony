<?php
//
namespace App\Controller;
//
//use App\Entity\Concert;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\Routing\Annotation\Route;
//
class ShowController extends AbstractController
{
//    /**
//     * @Route("/show", name="band_list")
//     */
//    public function index(): Response
//    {
//        $repository = $this->getDoctrine()->getRepository(Concert::class);
//        return $this->render('concert/index.html.twig', [
//            'controller_name' => 'ConcertController',
//            'concert_list' => $repository->findAll()
//        ]);
//    }
//
//    /**
//     * Affiche une liste de concerts
//     *
//     * @param string $name
//     * @return Response
//     *
//     * @Route("/show/{name}", name="list")
//     */
//    public function list(string $name): Response
//    {
//        $repository = $this->getDoctrine()->getRepository(Concert::class);
//
//        return $this->render('show/index.html.twig', [
//                'name' => $name,
//                'concerts' => $repository->findAll()
//            ]
//        );
//    }
}