<?php

namespace Entertainment\NetSuiteBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Entertainment\NetSuiteBundle\Entity\SuiteUser
 *
 * @ORM\Table(name="suite_user")
 * @ORM\Entity
 */
class SuiteUser extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
    }
}