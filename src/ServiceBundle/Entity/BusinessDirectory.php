<?php

namespace ServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BusinessDirectory
 *
 * @ORM\Table(name="business_directory")
 * @ORM\Entity(repositoryClass="ServiceBundle\Repository\BusinessDirectoryRepository")
 */
class BusinessDirectory
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="companyName", type="string", length=150)
     */
    private $companyName;

    /**
     * @var string
     *
     * @ORM\Column(name="companyAddress", type="text")
     */
    private $companyAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="string", length=200)
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="string", length=200)
     */
    private $latitude;

    /**
     * Many business Directory have One Sector.
     * @ORM\ManyToOne(targetEntity="Sector", inversedBy="businessDirectorys")
     * @ORM\JoinColumn(name="sector_id", referencedColumnName="id")
     */
    private $sector;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set companyName
     *
     * @param string $companyName
     *
     * @return BusinessDirectory
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set companyAddress
     *
     * @param string $companyAddress
     *
     * @return BusinessDirectory
     */
    public function setCompanyAddress($companyAddress)
    {
        $this->companyAddress = $companyAddress;

        return $this;
    }

    /**
     * Get companyAddress
     *
     * @return string
     */
    public function getCompanyAddress()
    {
        return $this->companyAddress;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     *
     * @return BusinessDirectory
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     *
     * @return BusinessDirectory
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set sector
     *
     * @param \ServiceBundle\Entity\Sector $sector
     *
     * @return BusinessDirectory
     */
    public function setSector(\ServiceBundle\Entity\Sector $sector = null)
    {
        $this->sector = $sector;

        return $this;
    }

    /**
     * Get sector
     *
     * @return \ServiceBundle\Entity\Sector
     */
    public function getSector()
    {
        return $this->sector;
    }
}