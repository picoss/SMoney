<?php

namespace Picoss\SMoney\Entity;

class Limit extends EntityBase
{
    /**
     * GlobalIn
     *
     * @var LimitDetail
     */
    protected $GlobalIn;

    /**
     * MoneyOut
     *
     * @var LimitDetail
     */
    protected $MoneyOut;

    /**
     * Entity relations
     *
     * @var array $subObjects
     */
    protected $subObjects = [
        'GlobalIn' => 'Picoss\\SMoney\\Entity\\LimitDetail',
        'MoneyOut' => 'Picoss\\SMoney\\Entity\\LimitDetail',
    ];

    /**
     * Get GlobalIn
     *
     * @return LimitDetail
     */
    public function getGlobalIn()
    {
        return $this->GlobalIn;
    }

    /**
     * Get MoneyOut
     *
     * @return LimitDetail
     */
    public function getMoneyOut()
    {
        return $this->MoneyOut;
    }
}