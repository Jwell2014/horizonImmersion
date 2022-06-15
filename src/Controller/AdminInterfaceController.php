<?php

namespace App\Controller;

use App\Repository\ChronoRepository;
use App\Repository\EnigmeUnRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\Handler\HandlersLocator;
use Symfony\Component\Messenger\MessageBus;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Messenger\Middleware\HandleMessageMiddleware;
use Symfony\Component\Messenger\Stamp\HandledStamp;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class AdminInterfaceController extends AbstractController
{
    #[isGranted("ROLE_ADMIN")]
    #[Route('/admin', name: 'app_admin_interface')]
    public function index(ChronoRepository $chronoRepository): Response
    {



        return $this->render('admin_interface/index.html.twig', [
            'controller_name' => 'AdminInterfaceController',
            'chronos' => $chronoRepository->findAll()
            ]);
    }


}