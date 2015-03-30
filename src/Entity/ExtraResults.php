<?php

namespace Picoss\SMoney\Entity;

class ExtraResults extends EntityBase
{
    /**
     * BankAuthResult
     *
     * @var string
     */
    protected $BankAuthResult;

    /**
     * RiskControlResult
     *
     * @var string
     */
    protected $RiskControlResult;

    /**
     * ThreedsResult
     *
     * @var string
     */
    protected $ThreedsResult;

    /**
     * WarrantyResult
     *
     * @var string
     */
    protected $WarrantyResult;

    /**
     * Get BankAuthResult
     *
     * @return string
     */
    public function getBankAuthResult()
    {
        return $this->BankAuthResult;
    }

    /**
     * Get RiskControlResult
     *
     * @return string
     */
    public function getRiskControlResult()
    {
        return $this->RiskControlResult;
    }

    /**
     * Get ThreedsResult
     *
     * @return string
     */
    public function getThreedsResult()
    {
        return $this->ThreedsResult;
    }

    /**
     * Get WarrantyResult
     *
     * @return string
     */
    public function getWarrantyResult()
    {
        return $this->WarrantyResult;
    }
}