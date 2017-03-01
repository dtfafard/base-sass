<?php

namespace Dtf\General\SaasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SaasBundle:Default:index.html.twig');
    }
}
