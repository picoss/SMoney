<?php

namespace Picoss\SMoney\Entity;

class Profile extends EntityBase
{
    /**
     * Profile gender
     */
    const GENDER_MALE = 0;
    const GENDER_FEMALE = 1;

    /**
     * User Civility
     *
     * @var int
     */
    protected $Civility;

    /**
     * User Firstname
     *
     * @var string
     */
    protected $FirstName;

    /**
     * User Lastname
     *
     * @var string
     */
    protected $LastName;

    /**
     * User Birthdate
     *
     * @var DateTime
     */
    protected $Birthdate;

    /**
     * User Address
     *
     * @var Address
     */
    protected $Address;

    /**
     * User PhoneNumber
     *
     * @var string
     */
    protected $PhoneNumber;

    /**
     * User Email
     *
     * @var string
     */
    protected $Email;

    /**
     * User Alias
     *
     * @var string
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
     * Createable fields
     *
     * @var array
     */
    protected $createableFields = [
        'Civility',
        'FirstName',
        'LastName',
        'Birthdate',
        'Address',
        'PhoneNumber',
        'Email',
        'Alias',
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

    /**
     * Set Civility
     *
     * @var string $Civility
     * @return Profile
     */
    public function setCivility($Civility)
    {
        $this->Civility = $Civility;

        return $this;
    }

    /**
     * Get Civility
     *
     * @return string
     */
    public function getCivility()
    {
        return $this->Civility;
    }

    /**
     * Set FirstName
     *
     * @var string $FirstName
     * @return Profile
     */
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;

        return $this;
    }

    /**
     * Get FirstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * Set LastName
     *
     * @var string $LastName
     * @return Profile
     */
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;

        return $this;
    }

    /**
     * Get LastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * Set Birthdate
     *
     * @var string $Birthdate
     * @return Profile
     */
    public function setBirthdate(\DateTime $Birthdate = null)
    {
        $this->Birthdate = $Birthdate ? $Birthdate : null;

        return $this;
    }

    /**
     * Get Birthdate
     *
     * @return \DateTime
     */
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

    /**
     * Set Address
     *
     * @var Address $Address
     * @return Profile
     */
    public function setAddress(Address $Address)
    {
        $this->Address = $Address;

        return $this;
    }

    /**
     * Get Address
     *
     * @return Address
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * Set PhoneNumber
     *
     * @var string $PhoneNumber
     * @return Profile
     */
    public function setPhoneNumber($PhoneNumber)
    {
        $this->PhoneNumber = $PhoneNumber;

        return $this;
    }

    /**
     * Get PhoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }

    /**
     * Set Email
     *
     * @var string $Email
     * @return Profile
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;

        return $this;
    }

    /**
     * Get Email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Set Alias
     *
     * @var string $Alias
     * @return Profile
     */
    public function setAlias($Alias)
    {
        $this->Alias = $Alias;

        return $this;
    }

    /**
     * Get Alias
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->Alias;
    }
}
