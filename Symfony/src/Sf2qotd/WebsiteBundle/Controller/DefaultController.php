<?php

namespace Sf2qotd\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template()
     */
    public function indexAction()
    {
    	$quotes = $this->get('doctrine')
    		->getRepository('Sf2qotdWebsiteBundle:Quote')
    		->findAll();
    		
        return array('quotes' => $quotes);
    }

    /**
     * @Route("/show/{id}", name="_website_show")
     * @Template()
     */
    public function showAction($id)
    {
    	$quote = $this->get('doctrine')
    		->getRepository('Sf2qotdWebsiteBundle:Quote')
    		->find($id);
    		
        return array('quote' => $quote);
    }

    /**
     * @Route("/random", name="_website_random")
     * @Template("Sf2qotdWebsiteBundle:Default:show.html.twig")
     */
    public function randomAction()
    {
    	$quotes = $this->get('doctrine')
    		->getRepository('Sf2qotdWebsiteBundle:Quote')
    		->findAll();
    	$count = count($quotes);
    	$rand  = rand(0, $count - 1);
    		
        return array('quote' => $quotes[$rand]);
    }
}
