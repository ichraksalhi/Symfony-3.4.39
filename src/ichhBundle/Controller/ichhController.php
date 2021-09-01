<?php

namespace ichhBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ichhController extends Controller
{
    public function indexAction()
    {
        return $this->render('@ichh/Default/index.html.twig');
    }
}
