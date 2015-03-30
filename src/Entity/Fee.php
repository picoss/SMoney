<?php

namespace Picoss\SMoney\Entity;

class Fee extends EntityBase
{
    /**
     * Amount
     *
     * @var string
     */
    protected $Amount;

    /**
     * VAT
     *
     * @var string
     */
    protected $VAT;

    /**
     * AmountWithVAT
     *
     * @var string
     */
    protected $AmountWithVAT;

    /**
     * Status
     *
     * @var string
     */
    protected $Status;

    /**
     * Createable fields
     *
     * @var array
     */
    protected $createableFields = [
        'AmountWithVAT',
        'VAT',
    ];

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
     * Set VAT
     *
     * @var string $VAT
     * @return Fee
     */
    public function setVAT($VAT)
    {
        $this->VAT = $VAT;

        return $this;
    }

    /**
     * Get VAT
     *
     * @return string
     */
    public function getVAT()
    {
        return $this->VAT;
    }

    /**
     * Set AmountWithVAT
     *
     * @var string $AmountWithVAT
     * @return Fee
     */
    public function setAmountWithVAT($AmountWithVAT)
    {
        $this->AmountWithVAT = $AmountWithVAT;

        return $this;
    }

    /**
     * Get AmountWithVAT
     *
     * @return string
     */
    public function getAmountWithVAT()
    {
        return $this->AmountWithVAT;
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
}