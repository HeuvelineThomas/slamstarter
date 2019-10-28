<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProjectsController extends AbstractController
{
    /**
     * @Route("/projects", name="projects")
     */
    public function index()
    {
        $projects = ['Project 1','Project 2','Project 3'];
        return $this->render('projects/index.html.twig', [
            'projects'=>$projects
        ]);
    }
}
