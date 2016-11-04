<?php

namespace Mabs\AdminLTEBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/mabs")
     */
    public function indexAction()
    {
        return $this->render('MabsAdminLTEBundle:Default:index.html.twig');
    }
}
