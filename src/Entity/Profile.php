<?php

namespace Picoss\SMoney\Entity;

class Profile extends EntityBase
{

    const GENDER_MALE = 0;
    const GENDER_FEMALE = 1;

    protected $persistable = false;

    /**
     * User civility
     *
     * @var int $Civility
     */
    protected $Civility;

    /**
     * User firstname
     *
     * @var string $FirstName
     */
    protected $FirstName;

    /**
     * User lastname
     *
     * @var string $LastName
     */
    protected $LastName;

    /**
     * User birth date
     *
     * @var DateTime $Birthdate
     */
    protected $Birthdate;

    /**
     * User address
     *
     * @var Address $Address
     */
    protected $Address;

    /**
     * User phonenumber
     *
     * @var string $PhoneNumber
     */
    protected $PhoneNumber;

    /**
     * User email
     *
     * @var string $Email
     */
    protected $Email;

    /**
     * User alias
     *
     * @var string $Alias
     */
    protected $Alias;

    /**
     * Entity relations
     *
     * @var array $subObjects
     */
    protected $subObjects = [
        'Address' => 'Picoss\\SMoney\\Entity\\Address',
    ];

    /**
     * Updateable fields
     *
     * @var array
     */
    protected $updateableFields = [
        'Civility',
        'FirstName',
        'LastName',
        'Birthdate',
        'Address',
        'PhoneNumber',
        'Email',
        'Alias',
    ];

    public function setCivility($civility)
    {
        $this->Civility = $civility;

        return $this;
    }

    public function getCivility()
    {
        return $this->Civility;
    }

    public function setFirstname($firstname)
    {
        $this->FirstName = $firstname;

        return $this;
    }

    public function getFirstname()
    {
        return $this->FirstName;
    }

    public function setLastname($lastname)
    {
        $this->LastName = $lastname;

        return $this;
    }

    public function getLastname()
    {
        return $this->LastName;
    }

    public function setBirthdate(\DateTime $birthdate)
    {
        $this->Birthdate = $birthdate;

        return $this;
    }

    public function getBirthdate()
    {
        if (is_string($this->Birthdate)) {
            try {
                $this->setBirthdate(new \DateTime($this->Birthdate));
            }
            catch (\Exception $e) {}
        }
        return $this->Birthdate;
    }

    public function setAddress(Address $address)
    {
        $this->Address = $address;

        return $this;
    }

    public function getAddress()
    {
        return $this->Address;
    }

    public function setPhonenumber($phonenumber)
    {
        $this->PhoneNumber = $phonenumber;

        return $this;
    }

    public function getPhonenumber()
    {
        return $this->PhoneNumber;
    }

    public function setEmail($email)
    {
        $this->Email = $email;

        return $this;
    }

    public function getEmail()
    {
        return $this->Email;
    }

    public function setAlias($alias)
    {
        $this->Alias = $alias;

        return $this;
    }

    public function getAlias()
    {
        return $this->Alias;
    }
}