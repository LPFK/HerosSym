<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Services\HeroService;

class HeroController extends AbstractController
{
    
    public function index(HeroService $heroService): Response
    {
        $listeHeros = $heroService->getList();
        return $this->render('hero/index.html.twig', [
            'controller_name' => 'HeroController',
            'listeHeros'=>$listeHeros
        ]);
    }
}
