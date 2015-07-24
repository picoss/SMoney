<?php

namespace Picoss\SMoney\Entity;

class User extends EntityBase
{
    /**
     * Id
     *
     * @var string
     */
    protected $Id;

    /**
     * AppUserId
     *
     * @var string
     */
    protected $AppUserId;

    /**
     * Role
     *
     * @var string
     */
    protected $Role;

    /**
     * Type
     *
     * @var string
     */
    protected $Type;

    /**
     * Profile
     *
     * @var Profile
     */
    protected $Profile;

    /**
     * Amount
     *
     * @var string
     */
    protected $Amount;

    /**
     * SubAccounts
     *
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    protected $SubAccounts;

    /**
     * BankAccounts
     *
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    protected $BankAccounts;

    /**
     * Status
     *
     * @var string
     */
    protected $Status;

    /**
     * Company
     *
     * @var Company
     */
    protected $Company;

    /**
     * Entity relations
     *
     * @var array $subObjects
     */
    protected $subObjects = [
        'Profile' => 'Picoss\\SMoney\\Entity\\Profile',
        'SubAccounts' => 'Picoss\\SMoney\\Entity\\SubAccount',
        'BankAccounts' => 'Picoss\\SMoney\\Entity\\BankAccount',
        'Company' => 'Picoss\\SMoney\\Entity\\Company',
    ];

    /**
     * Createable fields
     *
     * @var array
     */
    protected $createableFields = [
        'AppUserId',
        'Profile',
        'Type',
        'Company',
    ];

    /**
     * Updateable fields
     *
     * @var array
     */
    protected $updateableFields = [
        'AppUserId',
        'Profile',
        'Type',
        'Company',
        'Status',
    ];

    /**
     * Get Id
     *
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Set AppUserId
     *
     * @var string $AppUserId
     * @return User
     */
    public function setAppUserId($AppUserId)
    {
        $this->AppUserId = $AppUserId;

        return $this;
    }

    /**
     * Get AppUserId
     *
     * @return string
     */
    public function getAppUserId()
    {
        return $this->AppUserId;
    }

    /**
     * Get Role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->Role;
    }

    /**
     * Set Type
     *
     * @var string $Type
     * @return User
     */
    public function setType($Type)
    {
        $this->Type = $Type;

        return $this;
    }

    /**
     * Get Type
     *
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Set Profile
     *
     * @var Profile $Profile
     * @return User
     */
    public function setProfile(Profile $Profile)
    {
        $this->Profile = $Profile;

        return $this;
    }

    /**
     * Get Profile
     *
     * @return Profile
     */
    public function getProfile()
    {
        return $this->Profile;
    }

    /**
     * Get Amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * Get SubAccounts
     *
     * @return string
     */
    public function getSubAccounts()
    {
        return $this->SubAccounts;
    }

    /**
     * Get BankAccounts
     *
     * @return string
     */
    public function getBankAccounts()
    {
        return $this->BankAccounts;
    }

    /**
     * Set Status
     *
     * @param integer $Status
     * @return User
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;

        return $this;
    }

    /**
     * Get Status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Set Company
     *
     * @var string $Company
     * @return User
     */
    public function setCompany($Company)
    {
        $this->Company = $Company;

        return $this;
    }

    /**
     * Get Company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->Company;
    }
}