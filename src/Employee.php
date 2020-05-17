<?php


class Employee
{
    protected $id;
    protected $firstName;
    protected $lastName;
    protected $dateOfBirth;
    protected $address;
    protected $job;
    public function __construct($id,$firstName,$lastName,$dateOfBirth,$address,$job)
    {
        $this->id=$id;
        $this->firstName=$firstName;
        $this->lastName=$lastName;
        $this->dateOfBirth=$dateOfBirth;
        $this->address=$address;
        $this->job=$job;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return mixed
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getJob()
    {
        return $this->job;
    }
}