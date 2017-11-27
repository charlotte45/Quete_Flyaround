<?php

namespace Wcs\CoavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="Wcs\CoavBundle\Repository\ReservationRepository")
 */
class Reservation
{
    public function __toString()
    {
        return $this->nbReservedSeats . "-" . $this->passengers . "-" . $this->flight . "-" . $this->wasDone;
    }

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
     * @ORM\Column(name="nbReservedSeats", type="smallint")
     */
    private $nbReservedSeats;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publicationDate", type="datetime")
     */
    private $publicationDate;

    /**
    * @ORM\ManyToMany(targetEntity="Wcs\CoavBundle\Entity\User", mappedBy="reservations")
    * @ORM\JoinColumn(nullable=false)
    */
    private $passengers;

    /**
     * @ORM\ManyToOne(targetEntity="Wcs\CoavBundle\Entity\Flight", inversedBy="flights")
     * @ORM\JoinColumn(nullable=false)
     */
    private $flight;

    /**
     * @var bool
     *
     * @ORM\Column(name="wasDone", type="boolean")
     */
    private $wasDone;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->passengers = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set nbReservedSeats
     *
     * @param integer $nbReservedSeats
     *
     * @return Reservation
     */
    public function setNbReservedSeats($nbReservedSeats)
    {
        $this->nbReservedSeats = $nbReservedSeats;

        return $this;
    }

    /**
     * Get nbReservedSeats
     *
     * @return integer
     */
    public function getNbReservedSeats()
    {
        return $this->nbReservedSeats;
    }

    /**
     * Set publicationDate
     *
     * @param \DateTime $publicationDate
     *
     * @return Reservation
     */
    public function setPublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;

        return $this;
    }

    /**
     * Get publicationDate
     *
     * @return \DateTime
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * Set wasDone
     *
     * @param boolean $wasDone
     *
     * @return Reservation
     */
    public function setWasDone($wasDone)
    {
        $this->wasDone = $wasDone;

        return $this;
    }

    /**
     * Get wasDone
     *
     * @return boolean
     */
    public function getWasDone()
    {
        return $this->wasDone;
    }

    /**
     * Add passenger
     *
     * @param \WCS\CoavBundle\Entity\User $passenger
     *
     * @return Reservation
     */
    public function addPassenger(\Wcs\CoavBundle\Entity\User $passenger)
    {
        $this->passengers[] = $passenger;

        return $this;
    }

    /**
     * Remove passenger
     *
     * @param \WCS\CoavBundle\Entity\User $passenger
     */
    public function removePassenger(\Wcs\CoavBundle\Entity\User $passenger)
    {
        $this->passengers->removeElement($passenger);
    }

    /**
     * Get passengers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPassengers()
    {
        return $this->passengers;
    }

    /**
     * Set flight
     *
     * @param \Wcs\CoavBundle\Entity\Flight $flight
     *
     * @return Reservation
     */
    public function setFlight(\Wcs\CoavBundle\Entity\Flight $flight)
    {
        $this->flight = $flight;

        return $this;
    }

    /**
     * Get flight
     *
     * @return \Wcs\CoavBundle\Entity\Flight
     */
    public function getFlight()
    {
        return $this->flight;
    }

    /**
     * Get passenger
     * @return string
     */
    public function getPassenger()
    {
        return $this->passengers;
    }

    /**
     * @param string $passenger
     * @return Reservation
     */
    public function setPassenger($passenger)
    {
        $this->passengers = $passenger;
        return $this;
    }


}
