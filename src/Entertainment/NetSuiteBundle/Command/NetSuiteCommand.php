<?php
namespace Entertainment\NetSuiteBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Doctrine\ORM\Tools\EntityGenerator;


/**
*  Base class for NetSuite console commands to extend from.
*  @author Jeff Pipas <jpipas@gmail.com>
*/
abstract class NetSuiteCommand extends ContainerAwareCommand {
 
  protected function getEntityGenerator()
  {
      $entityGenerator = new EntityGenerator();
      $entityGenerator->setGenerateAnnotations(false);
      $entityGenerator->setGenerateStubMethods(true);
      $entityGenerator->setRegenerateEntityIfExists(false);
      $entityGenerator->setUpdateEntityIfExists(true);
      $entityGenerator->setNumSpaces(4);
      $entityGenerator->setAnnotationPrefix('ORM\\');

      return $entityGenerator;
  }

  protected function getEntityManager($name)
  {
      return $this->getContainer()->get('doctrine')->getEntityManager($name);
  }

  /**
   * Get a doctrine dbal connection by symfony name.
   *
   * @param string $name
   * @return Doctrine\DBAL\Connection
   */
  protected function getDoctrineConnection($name)
  {
      return $this->getContainer()->get('doctrine')->getConnection($name);
  }
   
}