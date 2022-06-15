<?php

namespace App\Controller;

use App\Entity\Session;
use App\Entity\User;
use App\Form\SessionsType;
use App\Repository\ChronoRepository;
use App\Repository\SessionsRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/sessions')]
class SessionController extends BaseController
{
    #[Route('/', name: 'app_sessions_index', methods: ['GET'])]
    public function index(SessionsRepository $sessionsRepository, UserRepository $ur, ChronoRepository $chronoRepository): Response
    {
        return $this->render('admin_interface/sessions/index.html.twig', [
            'sessions' => $sessionsRepository->findAll(),
            'users'=>$ur->findAll(),
            'chronos' => $chronoRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_sessions_new', methods: ['GET', 'POST'])]
    public function new(Request $request, SessionsRepository $sessionsRepository,): Response
    {
        $session = new Session();

        $form = $this->createForm(SessionsType::class, $session);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $sessionsRepository->add($session);


            return $this->redirectToRoute('app_sessions_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_interface/sessions/new.html.twig', [
            'session' => $session,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_sessions_show', methods: ['GET'])]
    public function show(Session $session): Response
    {
        return $this->render('admin_interface/sessions/show.html.twig', [
            'session' => $session,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_sessions_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Session $session, SessionsRepository $sessionsRepository): Response
    {
        $form = $this->createForm(SessionsType::class, $session);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $sessionsRepository->add($session);
            return $this->redirectToRoute('app_sessions_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_interface/sessions/edit.html.twig', [
            'session' => $session,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_sessions_delete', methods: ['POST'])]
    public function delete(Request $request, Session $session, SessionsRepository $sessionsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$session->getId(), $request->request->get('_token'))) {
            $sessionsRepository->remove($session);
        }

        return $this->redirectToRoute('app_sessions_index', [], Response::HTTP_SEE_OTHER);
    }
}
