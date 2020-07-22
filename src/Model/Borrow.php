<?php


namespace Lib\Model;


class Borrow
{
    protected $id;
    protected $borrow_date;
    protected $return_date;
    protected $status;
    protected $student_id;

    function __construct($borrow_date,$return_date,$status,$student_id)
    {
        $this->borrow_date=$borrow_date;
        $this->return_date=$return_date;
        $this->status=$status;
        $this->student_id=$student_id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getBorrowDate()
    {
        return $this->borrow_date;
    }

    /**
     * @param mixed $borrow_date
     */
    public function setBorrowDate($borrow_date)
    {
        $this->borrow_date = $borrow_date;
    }

    /**
     * @return mixed
     */
    public function getReturnDate()
    {
        return $this->return_date;
    }

    /**
     * @param mixed $return_date
     */
    public function setReturnDate($return_date)
    {
        $this->return_date = $return_date;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getStudentId()
    {
        return $this->student_id;
    }

    /**
     * @param mixed $student_id
     */
    public function setStudentId($student_id)
    {
        $this->student_id = $student_id;
    }


}