<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePage
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