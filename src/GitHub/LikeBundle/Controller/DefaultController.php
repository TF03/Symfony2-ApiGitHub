<?php

namespace GitHub\LikeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GitHubLikeBundle:Default:index.html.twig', array('name' => $name));
    }
}
