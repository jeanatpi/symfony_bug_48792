<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BugController extends AbstractController
{
    /**
     * @Route("/home", name="home", methods={"GET"})
     */
    public function index(): Response
    {
        return new Response("Hello!!");
    }
}