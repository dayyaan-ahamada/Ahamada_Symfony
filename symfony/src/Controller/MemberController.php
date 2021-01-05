<?php

namespace App\Controller;

use App\Entity\Member;
use App\Form\MemberType;
use App\Repository\MemberRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("/member")
 */
class MemberController extends AbstractController
{
    /**
     * @param MemberRepository $memberRepository
     * @return Response
     * @Route("/", name="member_index", methods={"GET"})
     *
     */
    public function index(MemberRepository $memberRepository): Response
    {
        return $this->render('member/index.html.twig', [
            'members' => $memberRepository->findAll(),
        ]);
    }

    /**
     * @param Request $request
     * @return Response
     * @Route("/new", name="member_new", methods={"GET","POST"})
     * @isGranted("ROLE_ADMIN")
     */
    public function new(Request $request): Response
    {
        $member = new Member();
        $form = $this->createForm(MemberType::class, $member);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($member);
            $entityManager->flush();

            return $this->redirectToRoute('member_index');
        }

        return $this->render('member/new.html.twig', [
            'member' => $member,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @param Member $member
     * @return Response
     * @Route("/{id}", name="member_show", methods={"GET"})
     *
     */
    public function show(Member $member): Response
    {
        $repository = $this->getDoctrine()->getRepository(Member::class);
        return $this->render('member/show.html.twig', [
            'member' => $repository->find($member),
        ]);
    }

    /**
     * @param Request $request
     * @param Member $member
     * @return Response
     * @Route("/{id}/edit", name="member_edit", methods={"GET","POST"})
     * @isGranted("ROLE_ADMIN")
     */
    public function edit(Request $request, Member $member): Response
    {
        $form = $this->createForm(MemberType::class, $member);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('member_index');
        }

        return $this->render('member/edit.html.twig', [
            'member' => $member,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @param Request $request
     * @param Member $member
     * @return Response
     * @Route("/{id}", name="member_delete", methods={"DELETE"})
     * @isGranted("ROLE_ADMIN")
     */
    public function delete(Request $request, Member $member): Response
    {
        if ($this->isCsrfTokenValid('delete'.$member->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($member);
            $entityManager->flush();
        }

        return $this->redirectToRoute('member_index');
    }
}
