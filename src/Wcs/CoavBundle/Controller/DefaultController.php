<?php

namespace Wcs\CoavBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class DefaultController
 * @Route("/")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @method('GET')
     */
    public function indexAction()
    {
        return $this->render('WcsCoavBundle:Default:index.html.twig');
    }
}
