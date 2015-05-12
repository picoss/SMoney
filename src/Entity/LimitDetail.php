<?php

namespace Picoss\SMoney\Entity;

class LimitDetail extends EntityBase
{
    /**
     * AnnualAllowance
     *
     * @var integer
     */
    protected $AnnualAllowance;

    /**
     * UsedAllowance
     *
     * @var integer
     */
    protected $UsedAllowance;

    /**
     * RenewalDate
     *
     * @var DateTime
     */
    protected $RenewalDate;

    /**
     * Get AnnualAllowance
     *
     * @return integer
     */
    public function getAnnualAllowance()
    {
        return $this->AnnualAllowance;
    }

    /**
     * Get UsedAllowance
     *
     * @return integer
     */
    public function getUsedAllowance()
    {
        return $this->UsedAllowance;
    }

    /**
     * Get RenewalDate
     *
     * @return DateTime
     */
    public function getRenewalDate()
    {
        return $this->RenewalDate;
    }
}