<?php

namespace Entertainment\NetSuiteBundle\Features\Context;

use Behat\BehatBundle\Context\BehatContext,
    Behat\BehatBundle\Context\MinkContext;
use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

class FeatureContext extends BehatContext
{
	/**
	* @Given /I have a user "([^"]*)"/
	*/
	public function iHaveAUser($username)
	{
		$user = new \Entertainment\NetSuiteBundle\Entity\SuiteUser();
		$user->setUsername($username);

		$this->getEntityManager()->persist($user);
		$this->getEntityManager()->flush();
	}
	

	/**
	* Returns the Doctrine entity manager.
	*
	* @return Doctrine\ORM\EntityManager
	*/
	protected function getEntityManager()
	{
		return $this->getContainer()->get('doctrine')->getEntityManager();
	}
}