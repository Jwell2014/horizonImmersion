<?php

namespace App\Controller;

use App\Entity\Chrono;
use App\Entity\Fichier;
use App\Form\ChronoType;
use App\Form\ImgSatFormType;
use App\Repository\ChronoRepository;
use App\Repository\DossierRepository;
use App\Repository\FichierRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/paramGlobaux')]
class ParamGlobaux extends AbstractController
{
    #[Route('/', name: 'app_chrono_index', methods: ['GET', 'POST'])]
    public function index(Request $request, FichierRepository $imgSatRepository, ChronoRepository $chronoRepository, DossierRepository $dossierRepository): Response
    {



        return $this->render('admin_interface/paramGlobaux/index.html.twig', [
            'chronos' => $chronoRepository->findAll(),
            'dossiers' => $dossierRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_chrono_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ChronoRepository $chronoRepository): Response
    {
        $chrono = new Chrono();
        $form = $this->createForm(ChronoType::class, $chrono);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $chronoRepository->add($chrono);
            return $this->redirectToRoute('app_chrono_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_interface/paramGlobaux/new.html.twig', [
            'paramGlobaux' => $chrono,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_chrono_show', methods: ['GET'])]
    public function show(Chrono $chrono): Response
    {
        return $this->render('admin_interface/paramGlobaux/show.html.twig', [
            'paramGlobaux' => $chrono,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_chrono_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Chrono $chrono, ChronoRepository $chronoRepository): Response
    {
        $form = $this->createForm(ChronoType::class, $chrono);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $chronoRepository->add($chrono);
            return $this->redirectToRoute('app_chrono_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_interface/paramGlobaux/edit.html.twig', [
            'paramGlobaux' => $chrono,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_chrono_delete', methods: ['POST'])]
    public function delete(Request $request, Chrono $chrono, ChronoRepository $chronoRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$chrono->getId(), $request->request->get('_token'))) {
            $chronoRepository->remove($chrono);
        }

        return $this->redirectToRoute('app_chrono_index', [], Response::HTTP_SEE_OTHER);
    }
}
