<?php

namespace Entertainment\NetSuiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entertainment\NetSuiteBundle\Entity\Form
 *
 * @ORM\Table(name="netsuite_form")
 * @ORM\Entity
 */
class NetSuiteForm
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
     * @var integer $scriptId
     *
     * @ORM\Column(name="script_id", type="integer", nullable=true)
     */
    private $scriptId;

    /**
     * @var integer $libraryId
     *
     * @ORM\Column(name="library_id", type="integer", nullable=true)
     */
    private $libraryId;

    /**
     * @var FormType
     *
     * @ORM\ManyToOne(targetEntity="FormType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="form_type_id", referencedColumnName="id")
     * })
     */
    private $formType;



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
     * Set scriptId
     *
     * @param integer $scriptId
     */
    public function setScriptId($scriptId)
    {
        $this->scriptId = $scriptId;
    }

    /**
     * Get scriptId
     *
     * @return integer 
     */
    public function getScriptId()
    {
        return $this->scriptId;
    }

    /**
     * Set libraryId
     *
     * @param integer $libraryId
     */
    public function setLibraryId($libraryId)
    {
        $this->libraryId = $libraryId;
    }

    /**
     * Get libraryId
     *
     * @return integer 
     */
    public function getLibraryId()
    {
        return $this->libraryId;
    }

    /**
     * Set formType
     *
     * @param Entertainment\NetSuiteBundle\Entity\FormType $formType
     */
    public function setFormType(\Entertainment\NetSuiteBundle\Entity\FormType $formType)
    {
        $this->formType = $formType;
    }

    /**
     * Get formType
     *
     * @return Entertainment\NetSuiteBundle\Entity\FormType 
     */
    public function getFormType()
    {
        return $this->formType;
    }
}