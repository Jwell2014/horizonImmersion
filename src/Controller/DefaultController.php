<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Document;
use App\Form\AgentsType;
use App\Form\RaptType;
use App\Repository\EnigmeUnRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/home', name: 'app_default')]
    public function index(EntityManagerInterface $entityManagerInterface, EnigmeUnRepository $enigmeUnRepository): Response
    {


        $categories = $entityManagerInterface
            ->getRepository(Category::class)
            ->findAll();
        $documents = $entityManagerInterface
            ->getRepository(Document::class)
            ->findAll();


        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
//            'categories' => $categories,
            'documents' => $documents,
            'enigmes1' => $enigmeUnRepository->findAll(),
            'answers'=> $enigmeUnRepository->findAllAnswers()

        ]);


    }

    #[Route('/default/{id}', name: 'voir', methods: ['GET'])]
    public function show(Document $document): Response
    {

        return $this->render('default/categoryShow.html.twig', [
            'document' => $document,
        ]);
    }

    #[Route('/chat', name: 'chat')]
    public function chat(): Response
    {
        return $this->render('default/chat.html.twig', [

        ]);
    }

    #[Route('/tableau', name: 'tableau')]
    public function tableau(): Response
    {
        return $this->render('default/tableau.html.twig', [

        ]);
    }
}
