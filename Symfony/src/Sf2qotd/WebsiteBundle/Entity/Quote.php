<?php

namespace Sf2qotd\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sf2qotd\WebsiteBundle\Entity\Quote
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sf2qotd\WebsiteBundle\Entity\QuoteRepository")
 */
class Quote
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $body
     *
     * @ORM\Column(name="body", type="text")
     */
    private $body;

    /**
     * @var integer $vote_plus
     *
     * @ORM\Column(name="vote_plus", type="integer")
     */
    private $vote_plus;

    /**
     * @var integer $vote_minus
     *
     * @ORM\Column(name="vote_minus", type="integer")
     */
    private $vote_minus;

    /**
     * @var \DateTime $date
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return Quote
     */
    public function setBody($body)
    {
        $this->body = $body;
    
        return $this;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set vote_plus
     *
     * @param integer $votePlus
     * @return Quote
     */
    public function setVotePlus($votePlus)
    {
        $this->vote_plus = $votePlus;
    
        return $this;
    }

    /**
     * Get vote_plus
     *
     * @return integer 
     */
    public function getVotePlus()
    {
        return $this->vote_plus;
    }

    /**
     * Set vote_minus
     *
     * @param integer $voteMinus
     * @return Quote
     */
    public function setVoteMinus($voteMinus)
    {
        $this->vote_minus = $voteMinus;
    
        return $this;
    }

    /**
     * Get vote_minus
     *
     * @return integer 
     */
    public function getVoteMinus()
    {
        return $this->vote_minus;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Quote
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
}
