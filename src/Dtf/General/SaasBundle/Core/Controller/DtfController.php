<?php

namespace Dtf\General\SaasBundle\Core\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Base class for Dtf bundles will contain basic functions to simplify coding
 *
 * DtfController
 *
 * @author psyk3hoe
 */
abstract class DtfController extends Controller
{
    /**
     * Returns the default view folder to simplify rendering
     *
     * @return string
     */
    abstract protected function getDefaultViewFolder();

    /**
     * Returns the default view folder to simplify rendering
     *
     * @return string
     */
    protected function getDefaultViewFileExtension()
    {
        return '.html.twig';
    }

    /**
     * @inheritDoc
     */
    protected function render($view, array $parameters = array(), Response $response = null)
    {
        return parent::render($this->getDefaultViewFolder() . $view . $this->getDefaultViewFileExtension(), $parameters, $response);
    }
}