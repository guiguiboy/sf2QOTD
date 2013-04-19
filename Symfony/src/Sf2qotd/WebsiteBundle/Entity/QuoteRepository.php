<?php

namespace Sf2qotd\WebsiteBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * QuoteRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class QuoteRepository extends EntityRepository
{
	/**
	 * Returns the ten quotes with best +1 count
	 * 
	 * @return array
	 */
	public function getTopTen()
	{
		return $this->_em
			->createQuery('SELECT q FROM Sf2qotd\WebsiteBundle\Entity\Quote q ORDER BY q.vote_plus DESC')
			->setMaxResults(10)
			->getResult();
	}

	/**
	 * Returns the ten quotes with max -1 count
	 * 
	 * @return array
	 */
	public function getFlopTen()
	{
		return $this->_em
			->createQuery('SELECT q FROM Sf2qotd\WebsiteBundle\Entity\Quote q ORDER BY q.vote_minus DESC')
			->setMaxResults(10)
			->getResult();
	}
}
