<?php

namespace Elephantly\OGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Elephantly\OGBundle\Entity\OGObject;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $crawler = $this->get('elephantly.og.crawler');
        $ogs = $crawler->getHead('http://opengraphprotocol.org');
        $og = new OGObject();
        $og->setTitle($ogs['title']);
        $og->setType($ogs['type']);
        $og->setUrl($ogs['url']);
        $og->setImage($ogs['image']);
        $og->setDescription($ogs['description']);
        $em = $this->getDoctrine()->getManager();

        $em->persist($og);
        $em->flush();

        return $this->render('ElephantlyOGBundle:Default:index.html.twig');
    }
}
