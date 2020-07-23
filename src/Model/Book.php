<?php

namespace Lib\Model;

class Book
{
    private $id;
    private $book_name;
    private $author;
    private $status;
    private $image;
    private $category_id;
    function __construct($book_name, $author, $status, $image, $category_id)
    {
        $this->book_name = $book_name;
        $this->author = $author;
        $this->status = $status;
        $this->image = $image;
        $this->category_id = $category_id;
    }


    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

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
     * Get the value of book_name
     */
    public function getBookName()
    {
        return $this->book_name;
    }

    /**
     * Set the value of book_name
     *
     * @return  self
     */
    public function setBookName($book_name)
    {
        $this->book_name = $book_name;

        return $this;
    }

    /**
     * Get the value of author
     */
    public function getAuthor()
    {
        return $this->author;
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
     * Get the value of status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of category_id
     */
    public function getCategory_id()
    {
        return $this->category_id;
    }

    /**
     * Set the value of category_id
     *
     * @return  self
     */
    public function setCategory_id($category_id)
    {
        $this->category_id = $category_id;

        return $this;
    }
}
