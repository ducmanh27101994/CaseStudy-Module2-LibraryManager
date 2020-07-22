<?php

namespace Lib\Model;

class Book
{
    private $id;
    private $name;
    private $author;
    private $status;
    function __construct($name, $author, $status)
    {
        $this->name = $name;
        $this->author = $author;
        $this->status = $status;
    }
}
