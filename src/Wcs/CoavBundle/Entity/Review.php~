<?php

namespace Wcs\CoavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Review
 *
 * @ORM\Table(name="review")
 * @ORM\Entity(repositoryClass="Wcs\CoavBundle\Repository\ReviewRepository")
 */
class Review
{
    /**
     * @ORM\OneToMany(targetEntity="Wcs\CoavBundle\Entity\User", mappedBy="reviews")
     */
    private $reviews;

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
     * @ORM\Column(name="text", type="text")
     */
    private $text;

    /**
     * @ORM\ManyToOne(targetEntity="Wcs\CoavBundle\Entity\User", inversedBy="usersRated")
     * @ORM\JoinColumn(nullable=false)
     */
    private $userRated;

    /**
     * @ORM\ManyToOne(targetEntity="Wcs\CoavBundle\Entity\User", inversedBy="reviewsAuthor")
     * @ORM\JoinColumn(nullable=false)
     */
    private $reviewAuthor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publicationDate", type="datetime")
     */
    private $publicationDate;

    /**
     * @var int
     *
     * @ORM\Column(name="note", type="smallint")
     */
    private $note;


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
     * Set text
     *
     * @param string $text
     *
     * @return Review
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set userRated
     *
     * @param string $userRated
     *
     * @return Review
     */
    public function setUserRated($userRated)
    {
        $this->userRated = $userRated;

        return $this;
    }

    /**
     * Get userRated
     *
     * @return string
     */
    public function getUserRated()
    {
        return $this->userRated;
    }

    /**
     * Set reviewAuthor
     *
     * @param string $reviewAuthor
     *
     * @return Review
     */
    public function setReviewAuthor($reviewAuthor)
    {
        $this->reviewAuthor = $reviewAuthor;

        return $this;
    }

    /**
     * Get reviewAuthor
     *
     * @return string
     */
    public function getReviewAuthor()
    {
        return $this->reviewAuthor;
    }

    /**
     * Set publicationDate
     *
     * @param \DateTime $publicationDate
     *
     * @return Review
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
     * Set note
     *
     * @param string $note
     *
     * @return Review
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reviews = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add review
     *
     * @param \Wcs\CoavBundle\Entity\User $review
     *
     * @return Review
     */
    public function addReview(\Wcs\CoavBundle\Entity\User $review)
    {
        $this->reviews[] = $review;

        return $this;
    }

    /**
     * Remove review
     *
     * @param \Wcs\CoavBundle\Entity\User $review
     */
    public function removeReview(\Wcs\CoavBundle\Entity\User $review)
    {
        $this->reviews->removeElement($review);
    }

    /**
     * Get reviews
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReviews()
    {
        return $this->reviews;
    }
}
