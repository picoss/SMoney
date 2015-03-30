<?php

namespace Picoss\SMoney\Api;

use Picoss\SMoney\Entity\BankAccount;

class ApiBankAccount extends ApiBase
{
    /**
     * Api version
     *
     * @var int
     */
    protected $apiVersion = 1;

    /**
     * Entity class name
     *
     * @var string
     */
    protected $entityClassName = 'Picoss\\SMoney\\Entity\\BankAccount';

    /**
     * Find all user bank accounts
     *
     * @param string $appUserId
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function findAll($appUserId)
    {
        $url = sprintf('users/%s/bankaccounts/', $appUserId);
        return $this->getAll($url, $this->entityClassName);
    }

    /**
     * Find user bank account by id
     *
     * @param string $appUserId
     * @param string $id
     * @return \Picoss\SMoney\Entity\BankAccount
     */
    public function findOneById($appUserId, $id)
    {
        $url = sprintf('users/%s/bankaccounts/%s', $appUserId, $id);
        return $this->getOne($url, $this->entityClassName);
    }

    /**
     * Create new user bank account
     *
     * @param string $appUserId
     * @param BankAccount $bankAccount
     * @return \Picoss\SMoney\Entity\BankAccount
     */
    public function create($appUserId, BankAccount $bankAccount)
    {
        $url = sprintf('users/%s/bankaccounts/', $appUserId);
        return $this->createObject($url, $bankAccount);
    }

    /**
     * Update existing user bank account
     *
     * @param string $appUserId
     * @param BankAccount $bankAccount
     * @return \Picoss\SMoney\Entity\BankAccount
     */
    public function update($appUserId, BankAccount $bankAccount)
    {
        $url = sprintf('users/%s/bankaccounts/%s', $appUserId, $bankAccount->getId());
        return $this->updateObject($url, $bankAccount);
    }

    /**
     * Delete user bank account
     *
     * @param string $appUserId
     * @param string $id
     */
    public function delete($appUserId, $id)
    {
        $url = sprintf('users/%s/bankaccounts/%s', $appUserId, $id);
        return $this->deleteObject($url);
    }
}