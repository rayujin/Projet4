<?php

namespace Rayu\TicketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table(name="ticket")
 * @ORM\Entity(repositoryClass="Rayu\TicketBundle\Repository\TicketRepository")
 */
class Ticket
{
    // ATTRIBUTS //

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
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var bool
     *
     * @ORM\Column(name="journee", type="boolean")
     */
    private $journee = NULL;

    /**
     * @var bool
     *
     * @ORM\Column(name="demi_journee", type="boolean")
     */
    private $demiJournee = NULL;

    /**
     * @var int
     *
     * @ORM\Column(name="tarif", type="integer")
     */
    private $tarif = NULL;

    /**
     * @var bool
     *
     * @ORM\Column(name="demi_tarif", type="boolean")
     */
    private $demiTarif = NULL;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_de_naissance", type="date")
     */
    private $dateDeNaissance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_de_reservation", type="date")
     */
    private $dateDeReservation;

    /**
     *@var string
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;
  
    // FONCTIONS //








    // GETTER ET SETTER //

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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Ticket
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Ticket
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set journee
     *
     * @param boolean $journee
     *
     * @return Ticket
     */
    public function setJournee($journee)
    {
        $this->journee = $journee;

        return $this;
    }

    /**
     * Get journee
     *
     * @return bool
     */
    public function getJournee()
    {
        return $this->journee;
    }

    /**
     * Set demiJournee
     *
     * @param boolean $demiJournee
     *
     * @return Ticket
     */
    public function setDemiJournee($demiJournee)
    {
        $this->demiJournee = $demiJournee;

        return $this;
    }

    /**
     * Get demiJournee
     *
     * @return bool
     */
    public function getDemiJournee()
    {
        return $this->demiJournee;
    }

    /**
     * Set tarif
     *
     * @param integer $tarif
     *
     * @return Ticket
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;

        return $this;
    }

    /**
     * Get tarif
     *
     * @return int
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * Set demiTarif
     *
     * @param boolean $demiTarif
     *
     * @return Ticket
     */
    public function setDemiTarif($demiTarif)
    {
        $this->demiTarif = $demiTarif;

        return $this;
    }

    /**
     * Get demiTarif
     *
     * @return bool
     */
    public function getDemiTarif()
    {
        return $this->demiTarif;
    }

    /**
     * Set dateDeNaissance
     *
     * @param \DateTime $dateDeNaissance
     *
     * @return Ticket
     */
    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }

    /**
     * Get dateDeNaissance
     *
     * @return \DateTime
     */
    public function getDateDeNaissance()
    {
        return $this->dateDeNaissance;
    }

    /**
     * Set dateDeReservation
     *
     * @param \DateTime $dateDeReservation
     *
     * @return Ticket
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

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Ticket
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }
}
