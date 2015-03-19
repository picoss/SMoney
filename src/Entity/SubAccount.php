<?php

namespace Picoss\SMoney\Entity;

class SubAccount extends EntityBase
{

    /**
     * Id
     *
     * @var string $Id
     */
    protected $Id;

    /**
     * App account id
     *
     * @var string $AppAccountId
     */
    protected $AppAccountId;

    /**
     * City
     *
     * @var string $Amount
     */
    protected $Amount;

    /**
     * Country
     *
     * @var string $DisplayName
     */
    protected $DisplayName;

    /**
     * Is default sub account
     *
     * @var bool $IsDefault
     */
    protected $IsDefault;

    /**
     * Updateable fields
     *
     * @var array
     */
    protected $updateableFields = [
        'AppAccountId',
        'DisplayName',
    ];

    public function __construct()
    {

    }

    public function getId()
    {
        return $this->Id;
    }

    public function setAppAccountId($appAccountId)
    {
        $this->AppAccountId = $appAccountId;

        return $this;
    }

    public function getAppAccountId()
    {
        return $this->AppAccountId;
    }

    public function getAmount()
    {
        return $this->Amount;
    }

    public function setDisplayName($displayName)
    {
        $this->DisplayName = $displayName;

        return $this;
    }

    public function getDisplayName()
    {
        return $this->DisplayName;
    }

    public function setIsDefault($isDefault)
    {
        $this->IsDefault = $isDefault;

        return $this;
    }

    public function getIsDefault()
    {
        return $this->IsDefault;
    }
}