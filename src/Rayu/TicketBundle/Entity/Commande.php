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
     * @var \DateTime
     *
     * @ORM\Column(name="date_de_reservation", type="date")
     */
    private $dateDeReservation;



    //FUNCTIONS //

    public function nbrDeTicket()
    {
        return $nbrDeTickets = ['nbrDeTicketNormal' => $nbrDeTicketNormal , 
                               'nbrDeTicketEnfant' => $nbrDeTicketEnfant ,
                               'nbrDeTicketSenior' => $nbrDeTicketSenior ,
                               'nbrDeTicketDemiTarif' => $nbrDeTicketDemiTarif ,
                               'nbrDeTicketDemiJournee' => $nbrDeTicketDemiJournee];
    }







    //GETTERS AND SETTERS //

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

    /**
     * Set dateDeReservation
     *
     * @param \DateTime $dateDeReservation
     *
     * @return Commande
     */
    public function setDateDeReservation($dateDeReservation)
    {
        $this->dateDeReservation = $dateDeReservation;

        return $this;
    }

    /**
     * Get dateDeReservation
     *
     * @return \DateTime
     */
    public function getDateDeReservation()
    {
        return $this->dateDeReservation;
    }
}
