<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommandeRepository")
 */
class Commande
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
     * @ORM\Column(name="date_commande", type="datetime")
     */
    private $dateCommande;

    /**
     * @var bool
     *
     * @ORM\Column(name="etat_payement", type="boolean")
     */
    private $etatPayement;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float")
     */
    private $montant;

    /**
     * @var bool
     *
     * @ORM\Column(name="etat_commande", type="boolean")
     */
    private $etatCommande;


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
     * Set dateCommande
     *
     * @param \DateTime $dateCommande
     *
     * @return Commande
     */
    public function setDateCommande($dateCommande)
    {
        $this->dateCommande = $dateCommande;

        return $this;
    }

    /**
     * Get dateCommande
     *
     * @return \DateTime
     */
    public function getDateCommande()
    {
        return $this->dateCommande;
    }

    /**
     * Set etatPayement
     *
     * @param boolean $etatPayement
     *
     * @return Commande
     */
    public function setEtatPayement($etatPayement)
    {
        $this->etatPayement = $etatPayement;

        return $this;
    }

    /**
     * Get etatPayement
     *
     * @return bool
     */
    public function getEtatPayement()
    {
        return $this->etatPayement;
    }

    /**
     * Set montant
     *
     * @param float $montant
     *
     * @return Commande
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set etatCommande
     *
     * @param boolean $etatCommande
     *
     * @return Commande
     */
    public function setEtatCommande($etatCommande)
    {
        $this->etatCommande = $etatCommande;

        return $this;
    }

    /**
     * Get etatCommande
     *
     * @return bool
     */
    public function getEtatCommande()
    {
        return $this->etatCommande;
    }
}

