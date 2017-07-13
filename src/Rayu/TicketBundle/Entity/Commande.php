<?php

namespace Rayu\TicketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="Rayu\TicketBundle\Repository\CommandeRepository")
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
     * @var int
     *
     * @ORM\Column(name="nbr_ticket_normal", type="integer")
     */
    private $nbrTicketNormal = NULL;

    /**
     * @var int
     *
     * @ORM\Column(name="nbr_ticket_enfant", type="integer")
     */
    private $nbrTicketEnfant = NULL;

    /**
     * @var int
     *
     * @ORM\Column(name="nbr_ticket_senior", type="integer")
     */
    private $nbrTicketSenior = NULL;

    /**
     * @var int
     *
     * @ORM\Column(name="nbr_ticket_demi_tarif", type="integer")
     */
    private $nbrTicketDemiTarif = NULL;

    /**
     * @var int
     *
     * @ORM\Column(name="nbr_ticket_demi_journee", type="integer")
     */
    private $nbrTicketDemiJournee = NULL;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;

    /**
     * @var bool
     *
     * @ORM\Column(name="paye", type="boolean")
     */
    private $paye;

    /**
     * @var int
     *
     * @ORM\Column(name="ref_transaction", type="integer")
     */
    private $refTransaction;


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
     * Set nbrTicketNormal
     *
     * @param integer $nbrTicketNormal
     *
     * @return Commande
     */
    public function setNbrTicketNormal($nbrTicketNormal)
    {
        $this->nbrTicketNormal = $nbrTicketNormal;

        return $this;
    }

    /**
     * Get nbrTicketNormal
     *
     * @return int
     */
    public function getNbrTicketNormal()
    {
        return $this->nbrTicketNormal;
    }

    /**
     * Set nbrTicketEnfant
     *
     * @param integer $nbrTicketEnfant
     *
     * @return Commande
     */
    public function setNbrTicketEnfant($nbrTicketEnfant)
    {
        $this->nbrTicketEnfant = $nbrTicketEnfant;

        return $this;
    }

    /**
     * Get nbrTicketEnfant
     *
     * @return int
     */
    public function getNbrTicketEnfant()
    {
        return $this->nbrTicketEnfant;
    }

    /**
     * Set nbrTicketSenior
     *
     * @param integer $nbrTicketSenior
     *
     * @return Commande
     */
    public function setNbrTicketSenior($nbrTicketSenior)
    {
        $this->nbrTicketSenior = $nbrTicketSenior;

        return $this;
    }

    /**
     * Get nbrTicketSenior
     *
     * @return int
     */
    public function getNbrTicketSenior()
    {
        return $this->nbrTicketSenior;
    }

    /**
     * Set nbrTicketDemiTarif
     *
     * @param integer $nbrTicketDemiTarif
     *
     * @return Commande
     */
    public function setNbrTicketDemiTarif($nbrTicketDemiTarif)
    {
        $this->nbrTicketDemiTarif = $nbrTicketDemiTarif;

        return $this;
    }

    /**
     * Get nbrTicketDemiTarif
     *
     * @return int
     */
    public function getNbrTicketDemiTarif()
    {
        return $this->nbrTicketDemiTarif;
    }

    /**
     * Set nbrTicketDemiJournee
     *
     * @param integer $nbrTicketDemiJournee
     *
     * @return Commande
     */
    public function setNbrTicketDemiJournee($nbrTicketDemiJournee)
    {
        $this->nbrTicketDemiJournee = $nbrTicketDemiJournee;

        return $this;
    }

    /**
     * Get nbrTicketDemiJournee
     *
     * @return int
     */
    public function getNbrTicketDemiJournee()
    {
        return $this->nbrTicketDemiJournee;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return Commande
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set paye
     *
     * @param boolean $paye
     *
     * @return Commande
     */
    public function setPaye($paye)
    {
        $this->paye = $paye;

        return $this;
    }

    /**
     * Get paye
     *
     * @return bool
     */
    public function getPaye()
    {
        return $this->paye;
    }

    /**
     * Set refTransaction
     *
     * @param integer $refTransaction
     *
     * @return Commande
     */
    public function setRefTransaction($refTransaction)
    {
        $this->refTransaction = $refTransaction;

        return $this;
    }

    /**
     * Get refTransaction
     *
     * @return int
     */
    public function getRefTransaction()
    {
        return $this->refTransaction;
    }
}

