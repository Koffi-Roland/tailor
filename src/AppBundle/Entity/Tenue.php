<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tenue
 *
 * @ORM\Table(name="tenue")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TenueRepository")
 */
class Tenue
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_livraison", type="datetime")
     */
    private $dateLivraison;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_pagne", type="string", length=255)
     */
    private $photoPagne;

    /**
     * @var float
     *
     * @ORM\Column(name="dimension", type="float")
     */
    private $dimension;

    /**
     * @var string
     *
     * @ORM\Column(name="detail", type="string", length=255)
     */
    private $detail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_reel_livraison", type="datetime")
     */
    private $dateReelLivraison;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="datetime")
     */
    private $dateFin;


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
     * Set dateLivraison
     *
     * @param \DateTime $dateLivraison
     *
     * @return Tenue
     */
    public function setDateLivraison($dateLivraison)
    {
        $this->dateLivraison = $dateLivraison;

        return $this;
    }

    /**
     * Get dateLivraison
     *
     * @return \DateTime
     */
    public function getDateLivraison()
    {
        return $this->dateLivraison;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Tenue
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set photoPagne
     *
     * @param string $photoPagne
     *
     * @return Tenue
     */
    public function setPhotoPagne($photoPagne)
    {
        $this->photoPagne = $photoPagne;

        return $this;
    }

    /**
     * Get photoPagne
     *
     * @return string
     */
    public function getPhotoPagne()
    {
        return $this->photoPagne;
    }

    /**
     * Set dimension
     *
     * @param float $dimension
     *
     * @return Tenue
     */
    public function setDimension($dimension)
    {
        $this->dimension = $dimension;

        return $this;
    }

    /**
     * Get dimension
     *
     * @return float
     */
    public function getDimension()
    {
        return $this->dimension;
    }

    /**
     * Set detail
     *
     * @param string $detail
     *
     * @return Tenue
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;

        return $this;
    }

    /**
     * Get detail
     *
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Set dateReelLivraison
     *
     * @param \DateTime $dateReelLivraison
     *
     * @return Tenue
     */
    public function setDateReelLivraison($dateReelLivraison)
    {
        $this->dateReelLivraison = $dateReelLivraison;

        return $this;
    }

    /**
     * Get dateReelLivraison
     *
     * @return \DateTime
     */
    public function getDateReelLivraison()
    {
        return $this->dateReelLivraison;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Tenue
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }
}

