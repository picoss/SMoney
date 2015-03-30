<?php

namespace Picoss\SMoney\Api;

use Picoss\SMoney\Entity\Payment;

class ApiPayment extends ApiBase
{
    /**
     * Api version
     *
     * @var int $apiVersion
     */
    protected $apiVersion = 1;

    /**
     * Entity class name
     *
     * @var string $entityClassName
     */
    protected $entityClassName = 'Picoss\\SMoney\\Entity\\Payment';

    /**
     * Find all payments
     *
     * @param string $appUserId
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function findAll($appUserId)
    {
        $url = sprintf('users/%s/payments', $appUserId);
        return $this->getAll($url, $this->entityClassName);
    }

    /**
     * Find payment by id
     *
     * @param string $appUserId
     * @param int $id
     * @return \Picoss\SMoney\Entity\Payment
     */
    public function findOneById($appUserId, $id)
    {
        $url = sprintf('users/%s/payments/%s', $appUserId, $id);
        return $this->getOne($url, $this->entityClassName);
    }

    /**
     * Create new payment
     *
     * @param string $appUserId
     * @param Payment $Payment
     * @return \Picoss\SMoney\Entity\Payment
     */
    public function create($appUserId, Payment $Payment)
    {
        $url = sprintf('users/%s/payments', $appUserId);
        return $this->createObject($url, $Payment);
    }
}