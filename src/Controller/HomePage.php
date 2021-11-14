<?php

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomePage extends AbstractControllers
{
    /**
     * @Route("/", name="home", methods={"GET"})
     */
    public function index(){
        return new Response(
            '<html><body>SALUT</html>'
        );
    }

}