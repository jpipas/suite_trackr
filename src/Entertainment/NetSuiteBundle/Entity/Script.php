<?php

namespace Entertainment\NetSuiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entertainment\NetSuiteBundle\Entity\Script
 *
 * @ORM\Table(name="suitescript")
 * @ORM\Entity
 */
class SuiteScript
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer $nsId
     *
     * @ORM\Column(name="ns_id", type="integer", nullable=false)
     */
    private $nsId;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var ScriptType
     *
     * @ORM\ManyToOne(targetEntity="ScriptType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="script_type_id", referencedColumnName="id")
     * })
     */
    private $scriptType;



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
     * Set nsId
     *
     * @param integer $nsId
     */
    public function setNsId($nsId)
    {
        $this->nsId = $nsId;
    }

    /**
     * Get nsId
     *
     * @return integer 
     */
    public function getNsId()
    {
        return $this->nsId;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set scriptType
     *
     * @param Entertainment\NetSuiteBundle\Entity\ScriptType $scriptType
     */
    public function setScriptType(\Entertainment\NetSuiteBundle\Entity\ScriptType $scriptType)
    {
        $this->scriptType = $scriptType;
    }

    /**
     * Get scriptType
     *
     * @return Entertainment\NetSuiteBundle\Entity\ScriptType 
     */
    public function getScriptType()
    {
        return $this->scriptType;
    }
}