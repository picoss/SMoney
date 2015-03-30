<?php

namespace Picoss\SMoney\Entity;

class MoneyOut extends EntityBase
{
    /**
     * Money out types
     */
    const TYPE_ONESHOT = 'oneshot';
    const TYPE_RECURRING = 'recurring';

    /**
     * Type
     *
     * @var string
     */
    protected $Type;

    /**
     * Id
     *
     * @var string
     */
    protected $Id;

    /**
     * Amount
     *
     * @var string
     */
    protected $Amount;

    /**
     * AccountId
     *
     * @var string
     */
    protected $AccountId;

    /**
     * BankAccount
     *
     * @var string
     */
    protected $BankAccount;

    /**
     * Fee
     *
     * @var string
     */
    protected $Fee;

    /**
     * Message
     *
     * @var string
     */
    protected $Message;

    /**
     * OperationDate
     *
     * @var string
     */
    protected $OperationDate;

    /**
     * Entity relations
     *
     * @var array $subObjects
     */
    protected $subObjects = [
        'AccountId' => 'Picoss\\SMoney\\Entity\\AccountId',
        'BankAccount' => 'Picoss\\SMoney\\Entity\\BankAccount',
        'Fee' => 'Picoss\\SMoney\\Entity\\Fee',
    ];

    /**
     * Createable fields
     *
     * @var array
     */
    protected $createableFields = [
        'Amount',
        'AccountId',
        'BankAccount',
        'Message',
        'Fee',
    ];

    /**
     * Set Type
     *
     * @var string $Type
     * @return MoneyOut
     */
    public function setType($Type)
    {
        $validTypes = [self::TYPE_ONESHOT, self::TYPE_RECURRING];
        if (!in_array($Type, $validTypes)) {
            throw new \InvalidArgumentException(sprintf('Money out type "%s" not supported. Must be one of: "%s"', $Type, implode(',', $validTypes)));
        }
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
     * Get Id
     *
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Set Amount
     *
     * @var string $Amount
     * @return MoneyOut
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
     * Set AccountId
     *
     * @var string $AccountId
     * @return MoneyOut
     */
    public function setAccountId($AccountId)
    {
        $this->AccountId = $AccountId;

        return $this;
    }

    /**
     * Get AccountId
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->AccountId;
    }

    /**
     * Set BankAccount
     *
     * @var string $BankAccount
     * @return MoneyOut
     */
    public function setBankAccount($BankAccount)
    {
        $this->BankAccount = $BankAccount;

        return $this;
    }

    /**
     * Get BankAccount
     *
     * @return string
     */
    public function getBankAccount()
    {
        return $this->BankAccount;
    }

    /**
     * Set Fee
     *
     * @var string $Fee
     * @return MoneyOut
     */
    public function setFee($Fee)
    {
        $this->Fee = $Fee;

        return $this;
    }

    /**
     * Get Fee
     *
     * @return string
     */
    public function getFee()
    {
        return $this->Fee;
    }

    /**
     * Set Message
     *
     * @var string $Message
     * @return MoneyOut
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;

        return $this;
    }

    /**
     * Get Message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * Set OperationDate
     *
     * @var string $OperationDate
     * @return MoneyOut
     */
    public function setOperationDate($OperationDate)
    {
        $this->OperationDate = $OperationDate;

        return $this;
    }

    /**
     * Get OperationDate
     *
     * @return string
     */
    public function getOperationDate()
    {
        return $this->OperationDate;
    }

}
