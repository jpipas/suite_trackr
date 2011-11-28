<?php

namespace Entertainment\NetSuiteBundle\Command;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use Selenium\Driver\Client;
use	Selenium\Driver\Locator;
/**
 * NetSuite tool that allows you to capture custom form configurations.
 *
 * @author Jeff Pipas <jpipas@entertainment.com>
 */
class CaptureFormsNetSuiteCommand extends NetSuiteCommand {

	protected function configure() {
	  $this
	      ->setName('netsuite:capture-forms')
	      ->setDescription('Capture a custom form definition')
	      ->addArgument('internal_id', InputArgument::REQUIRED, 'What is the internal_id of the form you wish to capture?')
	  ;
	}
	
	protected function execute(InputInterface $input, OutputInterface $output){
		$output->writeln("<info>Logging into NetSuite...</info>");
		$client = new \Selenium\Client('localhost', '4444');
		$driver = new \Behat\Mink\Driver\SeleniumDriver(
		    'firefox', 'https://system.sandbox.netsuite.com', $client
		);
		$session = new \Behat\Mink\Session($driver);
		$session->start();
		$session->visit('https://system.sandbox.netsuite.com/downpage/US/netsuite.html');
		$page = $session->getPage();
		$page->findField('email')->setValue($this->getContainer()->getParameter('netsuite_username'));
		$page->findField('password')->setValue($this->getContainer()->getParameter('netsuite_password'));
		$session->executeScript("document.forms[0].elements['jsenabled'].value = 'T';document.forms[0].submit();");
		$driver->getBrowser()->waitForPageToLoad(6000);
		$session->visit("https://system.sandbox.netsuite.com/app/common/custom/custform.nl?id=150&nl=F&ft=TRANSACTION&tt=Opprtnty&ol=F&e=T");
		$driver->getBrowser()->captureEntirePageScreenshot("/Users/jeffpipas/Desktop/newScreenshot.png",null);
		$output->writeln("<comment>Current Url: ".$session->getCurrentUrl()."</comment>");
	  $session->stop();
	}
}