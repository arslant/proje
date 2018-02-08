<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kayit
 *
 * @ORM\Table(name="kayit")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\KayitRepository")
 */
class Kayit
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
     * @ORM\Column(name="ad", type="string", length=255, nullable=true)
     */
    private $ad;

    /**
     * @var string
     *
     * @ORM\Column(name="soyad", type="string", length=255, nullable=true)
     */
    private $soyad;


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
     * Set ad
     *
     * @param string $ad
     *
     * @return Kayit
     */
    public function setAd($ad)
    {
        $this->ad = $ad;

        return $this;
    }

    /**
     * Get ad
     *
     * @return string
     */
    public function getAd()
    {
        return $this->ad;
    }

    /**
     * Set soyad
     *
     * @param string $soyad
     *
     * @return Kayit
     */
    public function setSoyad($soyad)
    {
        $this->soyad = $soyad;

        return $this;
    }

    /**
     * Get soyad
     *
     * @return string
     */
    public function getSoyad()
    {
        return $this->soyad;
    }
}

