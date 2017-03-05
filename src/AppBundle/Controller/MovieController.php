<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Movie;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class MovieController extends Controller
{
    /**
     * @Route("/movies/new", name="movies_new", )
     */
    public function newAction()
    {
        $movie = new Movie();
        return $this->render('movie/new.html.twig', array('quote'=>'qwe'));
    }

    /**
     * @Route("/movies", name="movies_list")
     */
    public function listAction(){
        return new Response('TODO');
    }
}
