<?php

namespace Wcs\CoavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="`user`")
 * @ORM\Entity(repositoryClass="Wcs\CoavBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    public function __toString()
    {
        return $this->firstName . "-" . $this->lastName;
    }

    /**
    * @ORM\ManyToMany(targetEntity="Wcs\CoavBundle\Entity\Reservation", inversedBy="passengers")
    * @ORM\JoinColumn(nullable=false)
    */
    private $reservations;

    /**
     * @ORM\OneToMany(targetEntity="Wcs\CoavBundle\Entity\Review", mappedBy="reviewAuthor")
     */
    private $reviewsAuthor;

    /**
     * @ORM\OneToMany(targetEntity="Wcs\CoavBundle\Entity\Review", mappedBy="userRated")
     */
    private $usersRated;

    /**
     * @ORM\OneToMany(targetEntity="Wcs\CoavBundle\Entity\Flight", mappedBy="pilot")
     */
    private $pilots;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=32)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=32)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="phoneNumber", type="string", length=32, nullable=true)
     */
    private $phoneNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthDate", type="date", nullable=true)
     */
    private $birthDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creationDate", type="datetime", nullable=true)
     */
    private $creationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=16, nullable=true)
     */
    private $role;

    /**
     * @var int
     *
     * @ORM\Column(name="note", type="smallint", nullable=true)
     */
    private $note;

    /**
     * @var bool
     *
     * @ORM\Column(name="isACertifiedPilot", type="boolean", nullable=true)
     */
    private $isACertifiedPilot;

    /**
     * @var bool
     *
     * @ORM\Column(name="isActive", type="boolean", nullable=true)
     */
    private $isActive;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reservations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->reviewsAuthor = new \Doctrine\Common\Collections\ArrayCollection();
        $this->usersRated = new \Doctrine\Common\Collections\ArrayCollection();
        $this->pilots = new \Doctrine\Common\Collections\ArrayCollection();
        parent::__construct();
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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return User
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return User
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     *
     * @return User
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set note
     *
     * @param integer $note
     *
     * @return User
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set isACertifiedPilot
     *
     * @param boolean $isACertifiedPilot
     *
     * @return User
     */
    public function setIsACertifiedPilot($isACertifiedPilot)
    {
        $this->isACertifiedPilot = $isACertifiedPilot;

        return $this;
    }

    /**
     * Get isACertifiedPilot
     *
     * @return boolean
     */
    public function getIsACertifiedPilot()
    {
        return $this->isACertifiedPilot;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Add reservation
     *
     * @param \WCS\CoavBundle\Entity\Reservation $reservation
     *
     * @return User
     */
    public function addReservation(\WCS\CoavBundle\Entity\Reservation $reservation)
    {
        $this->reservations[] = $reservation;

        return $this;
    }

    /**
     * Remove reservation
     *
     * @param \WCS\CoavBundle\Entity\Reservation $reservation
     */
    public function removeReservation(\WCS\CoavBundle\Entity\Reservation $reservation)
    {
        $this->reservations->removeElement($reservation);
    }

    /**
     * Get reservations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReservations()
    {
        return $this->reservations;
    }

    /**
     * Add reviewsAuthor
     *
     * @param \Wcs\CoavBundle\Entity\Review $reviewsAuthor
     *
     * @return User
     */
    public function addReviewsAuthor(\Wcs\CoavBundle\Entity\Review $reviewsAuthor)
    {
        $this->reviewsAuthor[] = $reviewsAuthor;

        return $this;
    }

    /**
     * Remove reviewsAuthor
     *
     * @param \Wcs\CoavBundle\Entity\Review $reviewsAuthor
     */
    public function removeReviewsAuthor(\Wcs\CoavBundle\Entity\Review $reviewsAuthor)
    {
        $this->reviewsAuthor->removeElement($reviewsAuthor);
    }

    /**
     * Get reviewsAuthor
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReviewsAuthor()
    {
        return $this->reviewsAuthor;
    }

    /**
     * Add usersRated
     *
     * @param \Wcs\CoavBundle\Entity\Review $usersRated
     *
     * @return User
     */
    public function addUsersRated(\Wcs\CoavBundle\Entity\Review $usersRated)
    {
        $this->usersRated[] = $usersRated;

        return $this;
    }

    /**
     * Remove usersRated
     *
     * @param \Wcs\CoavBundle\Entity\Review $usersRated
     */
    public function removeUsersRated(\Wcs\CoavBundle\Entity\Review $usersRated)
    {
        $this->usersRated->removeElement($usersRated);
    }

    /**
     * Get usersRated
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsersRated()
    {
        return $this->usersRated;
    }

    /**
     * Add pilot
     *
     * @param \Wcs\CoavBundle\Entity\Flight $pilot
     *
     * @return User
     */
    public function addPilot(\Wcs\CoavBundle\Entity\Flight $pilot)
    {
        $this->pilots[] = $pilot;

        return $this;
    }

    /**
     * Remove pilot
     *
     * @param \Wcs\CoavBundle\Entity\Flight $pilot
     */
    public function removePilot(\Wcs\CoavBundle\Entity\Flight $pilot)
    {
        $this->pilots->removeElement($pilot);
    }

    /**
     * Get pilots
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPilots()
    {
        return $this->pilots;
    }
}
