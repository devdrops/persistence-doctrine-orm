<?php

namespace Blog\Entity;

use Doctrine\ORM\Manager\Entity;
use Doctrine\ORM\Manager\Table;
use Doctrine\ORM\Manager\Index;
use Doctrine\ORM\Manager\Id;
use Doctrine\ORM\Manager\GeneratedValue;
use Doctrine\ORM\Manager\Column;

/**
 * Blog Post entity
 *
 * @Entity
 * @Table(indexes={
 *    @Index(name="publication_date_idx", columns="publicationDate")
 * })
 */
class Post
{
    /**
     * @var int
     *
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    protected $id;
    /**
     * @var string
     *
     * @Column(type="string")
     */
    protected $title;
    /**
     * @var string
     *
     * @Column(type="string")
     */
    protected $body;
    /**
     * @var \DateTime
     *
     * @Column(type="datetime")
     */
    protected $publicationDate;

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
     * Set title
     *
     * @param string $title
     *
     * @return Post
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set body
     *
     * @param string $body
     *
     * @return Post
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set publicationDate
     *
     * @param \DateTime $publicationDate
     *
     * @return Post
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
}
