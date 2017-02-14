<?php

namespace Dtf\General\SassBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SassBundle:Default:index.html.twig');
    }
}
