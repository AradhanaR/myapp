<?php

namespace Acme\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeStoreBundle:Login:index.html.twig', array(
                // ...
            ));    
    }

    public function authenticateAction()
    {
        return $this->render('AcmeStoreBundle:Login:authenticate.html.twig', array(
                // ...
            ));    
    }

}
