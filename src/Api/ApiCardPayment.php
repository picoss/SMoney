<?php

namespace Picoss\SMoney\Api;

use Picoss\SMoney\Entity\CardPayment;

class ApiCardPayment extends ApiBase
{
    /**
     * Api version
     *
     * @var int $apiVersion
     */
    protected $apiVersion = 2;

    /**
     * Entity class name
     *
     * @var string $entityClassName
     */
    protected $entityClassName = 'Picoss\\SMoney\\Entity\\CardPayment';

    /**
     * Find all card payments
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function findAll()
    {
        return $this->getAll('payins/cardpayments', $this->entityClassName);
    }

    /**
     * Find card payment by order id
     *
     * @param int $orderId
     * @return \Picoss\SMoney\Entity\CardPayment
     */
    public function findOneByOrderId($orderId)
    {
        return $this->getOne('payins/cardpayments/' . $orderId, $this->entityClassName);
    }

    /**
     * Create new card payment
     *
     * @param string $appUserId
     * @param CardPayment $cardPayment
     * @return \Picoss\SMoney\Entity\CardPayment
     */
    public function create($appUserId, CardPayment $cardPayment)
    {
        $url = sprintf('users/%s/payins/cardpayments/', $appUserId);
        return $this->createObject($url, $cardPayment);
    }
}