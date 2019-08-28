<?php

declare(strict_types=1);

abstract class Book
{
    protected   $id,
        $name,
        $author,
        $content,
        $release_date,
        $available,
        $catagory_id,
        $image_id;

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Set the value of release_date
     *
     * @return  self
     */
    public function setRelease_date($release_date)
    {
        $this->release_date = $release_date;

        return $this;
    }

    /**
     * Set the value of available
     *
     * @return  self
     */
    public function setAvailable($available)
    {
        $this->available = $available;

        return $this;
    }

    /**
     * Set the value of catagory_id
     *
     * @return  self
     */
    public function setCatagory_id($catagory_id)
    {
        $this->catagory_id = $catagory_id;

        return $this;
    }

    /**
     * Set the value of image_id
     *
     * @return  self
     */
    public function setImage_id($image_id)
    {
        $this->image_id = $image_id;

        return $this;
    }

    /**
     * Get the value of catagory_id
     */
    public function getCatagory_id()
    {
        return $this->catagory_id;
    }
    /**
     * Get the value of image_id
     */
    public function getImage_id()
    {
        return $this->image_id;
    }
    /**
     * Get the value of available
     */
    public function getAvailable()
    {
        return $this->available;
    }
    /**
     * Get the value of release_date
     */
    public function getRelease_date()
    {
        return $this->release_date;
    }

    /**
     * Get the value of content
     */
    public function getContent()
    {
        return $this->content;
    }
    /**
     * Get the value of author
     */
    public function getAuthor()
    {
        return $this->author;
    }
    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }
}
