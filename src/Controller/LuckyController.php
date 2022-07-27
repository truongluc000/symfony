<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    #[Route('/lucky', name: 'app_lucky')]
    public function index(): Response
    {
        return $this->render('lucky/index.html.twig', [
            'controller_name' => 'LuckyController',
        ]);
    }
    public function number(): Response
    {
        $number = random_int(0, 100);
        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }
    public function edit(int $id, string $slug): Response
    {
        $number = random_int(0, 100);
        return $this->render('lucky/edit.html.twig', [
            'number' => $number,
            'id' => $id,
            'slug' => $slug,
        ]);
    }
}
