<?php

namespace Dtf\General\UserManagementBundle\Controller;

use Dtf\General\SaasBundle\Core\Controller\DtfController;
use Dtf\General\UserManagementBundle\Entity\Form\{Login, SignUp, ResetPassword};
use Symfony\Component\Form\Extension\Core\Type\{
    PasswordType,
    TextType,
    SubmitType
};
use Symfony\Component\HttpFoundation\Request;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * User Management Default Controller
 */
class DefaultController extends DtfController
{
    const DEFAULT_VIEW_FOLDER = 'UserManagementBundle:Default:';

    /**
     *
     * @return string
     */
    protected function getDefaultViewFolder()
    {
        return self::DEFAULT_VIEW_FOLDER;
    }

    /**
     * 
     */
    public function indexAction()
    {
        return $this->render('index');
    }

    /**
     *
     * @param Request $request
     * @return string
     */
    public function loginAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $login = new Login();

        $form = $this->createFormBuilder($login)
            ->add('username', TextType::class)
            ->add('password', PasswordType::class)
            ->add('save', SubmitType::class, ['label' => 'Sign In'])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $login = $form->getData();

            /**
             * @todo    Code to authenticate and login the user
             */
            return $this->redirectToRoute('sass_homepage');
        }

        return $this->render('login', [
            'form' => $form->createView(),
        ]);
    }

    /**
     *
     * @param Request $request
     */
    public function resetPasswordAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $resetPassword = new ResetPassword();

        $form = $this->createFormBuilder($resetPassword)
            ->add('password', PasswordType::class, ['label' => 'Current Password'])
            ->add('new_password', PasswordType::class)
            ->add('repeat_new_password', PasswordType::class)
            ->add('save', SubmitType::class, ['label' => 'Reset'])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $resetPassword = $form->getData();

            /**
             * @todo    Code to reset the user's password
             */
            return $this->redirectToRoute('sass_homepage');
        }

        return $this->render('reset_password', [
            'form' => $form->createView(),
        ]);
    }
    
    /**
     * 
     * @param Request $request
     */
    public function signUpAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $login = new SignUp();

        $form = $this->createFormBuilder($login)
            ->add('username', TextType::class)
            ->add('email', TextType::class)
            ->add('password', PasswordType::class)
            ->add('save', SubmitType::class, ['label' => 'Sign Up'])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $login = $form->getData();

            /**
             * @todo    Code to reset the user's password
             */
            return $this->redirectToRoute('sass_homepage');
        }

        return $this->render('login', [
            'form' => $form->createView(),
        ]);
    }
}