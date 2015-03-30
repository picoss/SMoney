<?php

namespace Picoss\SMoney\Entity;

class BankAccount extends EntityBase
{
    /**
     * Id
     *
     * @var string
     */
    protected $Id;

    /**
     * Display name
     *
     * @var string
     */
    protected $DisplayName;

    /**
     * Bic
     *
     * @var string
     */
    protected $Bic;

    /**
     * Iban
     *
     * @var string
     */
    protected $Iban;

    /**
     * Is mine
     *
     * @var bool
     */
    protected $IsMine;

    /**
     * Createable fields
     *
     * @var array
     */
    protected $createableFields = [
        'Id',
        'DisplayName',
        'Bic',
        'Iban',
        'IsMine',
    ];

    /**
     * Updateable fields
     *
     * @var array
     */
    protected $updateableFields = [
        'Id',
        'DisplayName',
    ];

    /**
     * Set Id
     *
     * @var string $Id
     * @return BankAccount
     */
    public function setId($Id)
    {
        $this->Id = $Id;

        return $this;
    }

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
     * Set DisplayName
     *
     * @var string $DisplayName
     * @return BankAccount
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
     * Set Bic
     *
     * @var string $Bic
     * @return BankAccount
     */
    public function setBic($Bic)
    {
        $this->Bic = $Bic;

        return $this;
    }

    /**
     * Get Bic
     *
     * @return string
     */
    public function getBic()
    {
        return $this->Bic;
    }

    /**
     * Set Iban
     *
     * @var string $Iban
     * @return BankAccount
     */
    public function setIban($Iban)
    {
        $this->Iban = $Iban;

        return $this;
    }

    /**
     * Get Iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->Iban;
    }

    /**
     * Set IsMine
     *
     * @var string $IsMine
     * @return BankAccount
     */
    public function setIsMine($IsMine)
    {
        $this->IsMine = $IsMine;

        return $this;
    }

    /**
     * Get IsMine
     *
     * @return string
     */
    public function getIsMine()
    {
        return $this->IsMine;
    }
}