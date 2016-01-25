<?php

namespace Picoss\SMoney\Entity;

class Payment extends EntityBase
{
    /**
     * Id
     *
     * @var string
     */
    protected $Id;

    /**
     * OrderId
     *
     * @var string
     */
    protected $OrderId;

    /**
     * Beneficiary
     *
     * @var Beneficiary
     */
    protected $Beneficiary;

    /**
     * Sender
     *
     * @var Sender
     */
    protected $Sender;

    /**
     * Amount
     *
     * @var string
     */
    protected $Amount;

    /**
     * Message
     *
     * @var string
     */
    protected $Message;

    /**
     * Fee
     *
     * @var string
     */
    protected $Fee;

    /**
     * PaymentDate
     *
     * @var string
     */
    protected $PaymentDate;

    /**
     * Entity relations
     *
     * @var array $subObjects
     */
    protected $subObjects = [
        'Beneficiary' => 'Picoss\\SMoney\\Entity\\Beneficiary',
        'Sender' => 'Picoss\\SMoney\\Entity\\Sender',
        'Fee' => 'Picoss\\SMoney\\Entity\\Fee',
    ];

    /**
     * Createable fields
     *
     * @var array
     */
    protected $createableFields = [
        'OrderId',
        'Beneficiary',
        'Sender',
        'Amount',
        'Message',
        'Fee',
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
     * Set OrderId
     *
     * @var string $OrderId
     * @return Payment
     */
    public function setOrderId($OrderId)
    {
        $this->OrderId = $OrderId;

        return $this;
    }

    /**
     * Get OrderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->OrderId;
    }

    /**
     * Set Beneficiary
     *
     * @var Beneficiary $Beneficiary
     * @return Payment
     */
    public function setBeneficiary(Beneficiary $Beneficiary)
    {
        $this->Beneficiary = $Beneficiary;

        return $this;
    }

    /**
     * Get Beneficiary
     *
     * @return Beneficiary
     */
    public function getBeneficiary()
    {
        return $this->Beneficiary;
    }

    /**
     * Set Sender
     *
     * @var Sender $Sender
     * @return Payment
     */
    public function setSender(Sender $Sender)
    {
        $this->Sender = $Sender;

        return $this;
    }

    /**
     * Get Sender
     *
     * @return Sender
     */
    public function getSender()
    {
        return $this->Sender;
    }

    /**
     * Set Amount
     *
     * @var string $Amount
     * @return Payment
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
     * Set Message
     *
     * @var string $Message
     * @return Payment
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
     * Set Fee
     *
     * @var string $Fee
     * @return Payment
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
     * Get PaymentDate
     *
     * @return string
     */
    public function getPaymentDate()
    {
        return $this->PaymentDate;
    }
}