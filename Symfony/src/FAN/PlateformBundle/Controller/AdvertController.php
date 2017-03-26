<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace FAN\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    public function indexAction()
    {
      $content = $this->get('templating')->render('FANPlatformBundle:Advert:index.html.twig');
     
     return new Response($content);
   }
}
