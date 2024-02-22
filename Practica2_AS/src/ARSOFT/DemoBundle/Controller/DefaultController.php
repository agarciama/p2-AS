<?php

namespace ARSOFT\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ARSOFTDemoBundle:Default:index.html.twig', array('name' => $name));
    }
}
