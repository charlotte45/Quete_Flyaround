<?php

namespace Wcs\CoavBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WcsCoavBundle:Default:index.html.twig');
    }
}
