<?php

namespace Picoss\SMoney\Entity;

class AccountId extends EntityBase
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
     * DisplayName
     *
     * @var string
     */
    protected $DisplayName;

    /**
     * Href
     *
     * @var string
     */
    protected $Href;

    /**
     * Createable fields
     *
     * @var array
     */
    protected $createableFields = [
        'AppAccountId',
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
     * @return AccountId
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
     * Get DisplayName
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }

    /**
     * Get Href
     *
     * @return string
     */
    public function getHref()
    {
        return $this->Href;
    }
}
