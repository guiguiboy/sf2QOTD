<?php

namespace Sf2qotd\WebsiteBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Session\Session;

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
    
    /**
     * @Route("/vote_plus/{id}", name="_website_vote_plus")
     */    
    public function votePlus($id)
    {
    	$session       = $this->getRequest()->getSession();
    	$votedQuoteIds = $session->get('votedQuoteIds');
    	if (isset($votedQuoteIds['plus'][$id])) {
	    	$jsonData = json_encode(array('status' => "NOK", "type" => "vote_plus", "message" => "Vote déjà enregistré"));
    	} else {
    		
    		$votedQuoteIds['plus'][$id] = true;
    		$session->set('votedQuoteIds', $votedQuoteIds);

	    	$quote = $this->get('doctrine')
	    		->getRepository('Sf2qotdWebsiteBundle:Quote')
	    		->find($id);
	    	$quote->setVotePlus($quote->getVotePlus() + 1);
	    	$this->get('doctrine')->getEntityManager()->persist($quote);
	    	$this->get('doctrine')->getEntityManager()->flush();
	    	
	    	$jsonData = json_encode(array('status' => "OK", "type" => "vote_plus", "value" => $quote->getVotePlus()));
    	}

    	$headers = array(
			'Content-Type' => 'application/json'
		);
		$response = new Response($jsonData, 200, $headers);
		return $response;
    }
    
    /**
     * @Route("/vote_minus/{id}", name="_website_vote_minus")
     */    
    public function voteMinus($id)
    {
    	$session       = $this->getRequest()->getSession();
    	$votedQuoteIds = $session->get('votedQuoteIds');

    	if (isset($votedQuoteIds['minus'][$id])) {
	    	$jsonData = json_encode(array('status' => "NOK", "type" => "vote_minus", "message" => "Vote déjà enregistré"));
    	} else {
    		$votedQuoteIds['minus'][$id] = true;
    		$session->set('votedQuoteIds', $votedQuoteIds);
    		
	    	$quote = $this->get('doctrine')
	    		->getRepository('Sf2qotdWebsiteBundle:Quote')
	    		->find($id);
	    	$quote->setVoteMinus($quote->getVoteMinus() + 1);
	    	$this->get('doctrine')->getEntityManager()->persist($quote);
	    	$this->get('doctrine')->getEntityManager()->flush();
	    	
	    	$jsonData = json_encode(array('status' => "OK", "type" => "vote_minus", "value" => $quote->getVoteMinus()));
    	}    	
    	
    	$headers = array(
			'Content-Type' => 'application/json'
		);
		$response = new Response($jsonData, 200, $headers);
		return $response;
    }
}