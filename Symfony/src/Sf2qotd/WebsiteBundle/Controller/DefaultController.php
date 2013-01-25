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
    		
        return array(
        	'quotes' => $quotes,
        	'category'   => 'Les dernières contributions'
        );
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
     * @Route("/top-ten", name="_website_top_ten")
     * @Template("Sf2qotdWebsiteBundle:Default:index.html.twig")
     */
    public function topTenAction()
    {
    	$quotes = $this->get('doctrine')
    		->getRepository('Sf2qotdWebsiteBundle:Quote')
    		->getTopTen();
    		
    	return array(
    		'quotes' => $quotes,
    		'category'   => 'Top 10'
    	);
    }
    
    /**
     * @Route("/flop-ten", name="_website_flop_ten")
     * @Template("Sf2qotdWebsiteBundle:Default:index.html.twig")
     */
    public function flopTenAction()
    {
    	$quotes = $this->get('doctrine')
    		->getRepository('Sf2qotdWebsiteBundle:Quote')
    		->getFlopTen();
    		
    	return array(
    		'quotes' => $quotes,
    		'category'   => 'Flop 10'
    	);
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
