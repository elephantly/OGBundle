<?php

namespace Elephantly\OGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $crawler = $this->get('elephantly.og.crawler');
        \Doctrine\Common\Util\Debug::dump($crawler->getHead('http://opengraphprotocol.org'));exit;
        return $this->render('ElephantlyOGBundle:Default:index.html.twig');
    }
}
