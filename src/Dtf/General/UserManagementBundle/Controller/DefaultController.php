<?php

namespace Dtf\General\UserManagementBundle\Controller;

use Dtf\General\SaasBundle\Core\Controller\DtfController;
use Dtf\General\UserManagementBundle\Form\Login;

use Symfony\Component\Form\Extension\Core\Type\{PasswordType, TextType, SubmitType};
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
        // create a task and give it some dummy data for this example
        $login = new Login();

        $form = $this->createFormBuilder($login)
            ->add('username', TextType::class)
            ->add('password', PasswordType::class)
            ->add('save', SubmitType::class, array('label' => 'Sign In'))
            ->getForm();

        return $this->render('login', [
            'form' => $form->createView(),
        ]);
    }
}
