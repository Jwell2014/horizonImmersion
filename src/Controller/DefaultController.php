<?php

namespace App\Controller;

use App\Entity\Category;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'app_default')]
    public function index(EntityManagerInterface $entityManagerInterface): Response
    {
        $categories = $entityManagerInterface
            ->getRepository(Category::class)
            ->findAll();

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'categories' => $categories,
        ]);


    }

    #[Route('/{id}', name: 'category_show', methods: ['GET'])]
    public function show(Category $category): Response
    {
        return $this->render('default/categoryShow.html.twig', [
            'category' => $category,
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
