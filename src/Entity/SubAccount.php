<?php

namespace Picoss\SMoney\Entity;

class SubAccount extends EntityBase
{
    /**
     * Id
     *
     * @var string
     */
    protected $Id;

    /**
     * AppAccountId
     *
     * @var string
     */
    protected $AppAccountId;

    /**
     * Amount
     *
     * @var string
     */
    protected $Amount;

    /**
     * DisplayName
     *
     * @var string
     */
    protected $DisplayName;

    /**
     * IsDefault
     *
     * @var string
     */
    protected $IsDefault;

    /**
     * Createable fields
     *
     * @var array
     */
    protected $createableFields = [
        'AppAccountId',
        'DisplayName',
    ];

    /**
     * Updateable fields
     *
     * @var array
     */
    protected $updateableFields = [
        'DisplayName',
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
     * Set AppAccountId
     *
     * @var string $AppAccountId
     * @return SubAccount
     */
    public function setAppAccountId($AppAccountId)
    {
        $this->AppAccountId = $AppAccountId;

        return $this;
    }

    /**
     * Get AppAccountId
     *
     * @return string
     */
    public function getAppAccountId()
    {
        return $this->AppAccountId;
    }

    /**
     * Set Amount
     *
     * @var string $Amount
     * @return SubAccount
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;

        return $this;
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
     * Set DisplayName
     *
     * @var string $DisplayName
     * @return SubAccount
     */
    public function setDisplayName($DisplayName)
    {
        $this->DisplayName = $DisplayName;

        return $this;
    }

    /**
     * Get DisplayName
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }

    /**
     * Set IsDefault
     *
     * @var string $IsDefault
     * @return SubAccount
     */
    public function setIsDefault($IsDefault)
    {
        $this->IsDefault = $IsDefault;

        return $this;
    }

    /**
     * Get IsDefault
     *
     * @return string
     */
    public function getIsDefault()
    {
        return $this->IsDefault;
    }
}