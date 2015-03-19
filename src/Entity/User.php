<?php

namespace Picoss\SMoney\Entity;

class User extends EntityBase
{

    /**
     * User id
     *
     * @var int $Id
     */
    protected $Id;

    /**
     * User app id
     *
     * @var string $AppUserId
     */
    protected $AppUserId;

    /**
     * User role
     *
     * @var int $Role
     */
    protected $Role;

    /**
     * User profile
     *
     * @var Profile $Profile
     */
    protected $Profile;

    /**
     * User total amount
     *
     * @var int $Amount
     */
    protected $Amount;

    /**
     * Use sub accounts
     *
     * @var ArrayCollection $SubAccounts
     */
    protected $SubAccounts;

    protected $BankAccounts;

    protected $CBCards;

    /**
     * User status
     *
     * @var int $status
     */
    protected $Status;

    /**
     * User company
     *
     * @var string $Company
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
    ];

    /**
     * Updateable fields
     *
     * @var array
     */
    protected $updateableFields = [
        'AppUserId',
        'Profile',
    ];

    public function setId($id)
    {
        $this->Id = $id;

        return $this;
    }

    public function getId()
    {
        return $this->Id;
    }

    public function setAppuserid($appuserid)
    {
        $this->AppUserId = $appuserid;

        return $this;
    }

    public function getAppuserid()
    {
        return $this->AppUserId;
    }

    public function getRole()
    {
        return $this->Role;
    }

    public function setProfile(Profile $profile)
    {
        $this->Profile = $profile;

        return $this;
    }

    public function getProfile()
    {
        return $this->Profile;
    }

    public function getAmount()
    {
        return $this->Amount;
    }

    public function getSubaccounts()
    {
        return $this->SubAccounts;
    }

    public function getBankaccount()
    {
        return $this->BankAccounts;
    }

    public function getCbcards()
    {
        return $this->CBCards;
    }

    public function getStatus()
    {
        return $this->Status;
    }
}