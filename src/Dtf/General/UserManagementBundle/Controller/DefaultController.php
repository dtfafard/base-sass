<?php

namespace Dtf\General\UserManagementBundle\Controller;

use Dtf\General\SaasBundle\Core\Controller\DtfController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends DtfController
{
    const DEFAULT_VIEW_FOLDER = 'UserManagementBundle:Default:';

    protected function getDefaultViewFolder()
    {
        return self::DEFAULT_VIEW_FOLDER;
    }

    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('index');
    }

    /**
     *
     * @return string
     */
    public function loginAction()
    {
        return $this->render('login');
    }
}
