<?php

namespace Picoss\SMoney\Api;

use Picoss\SMoney\Entity\SubAccount;

class ApiSubAccount extends ApiBase
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
    protected $entityClassName = 'Picoss\\SMoney\\Entity\\SubAccount';

    /**
     * Find all user sub accounts
     *
     * @param string $appUserId
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function findAll($appUserId)
    {
        $url = sprintf('users/%s/subaccounts/', $appUserId);
        return $this->getAll($url, $this->entityClassName);
    }

    /**
     * Find user sub account by id
     *
     * @param string $appUserId
     * @param string $id
     * @return \Picoss\SMoney\Entity\SubAccount
     */
    public function findOneById($appUserId, $id)
    {
        $url = sprintf('users/%s/subaccounts/%s', $appUserId, $id);
        return $this->getOne($url, $this->entityClassName);
    }

    /**
     * Create new user sub account
     *
     * @param string $appUserId
     * @param SubAccount $subAccount
     * @return \Picoss\SMoney\Entity\SubAccount
     */
    public function create($appUserId, SubAccount $subAccount)
    {
        $url = sprintf('users/%s/subaccounts/', $appUserId);
        return $this->createObject($url, $subAccount);
    }

    /**
     * Update existing user sub account
     *
     * @param string $appUserId
     * @param SubAccount $subAccount
     * @return \Picoss\SMoney\Entity\SubAccount
     */
    public function update($appUserId, SubAccount $subAccount)
    {
        $url = sprintf('users/%s/subaccounts/%s', $appUserId, $subAccount->getAppAccountId());
        return $this->updateObject($url, $subAccount);
    }

    /**
     * Delete user sub account
     *
     * @param string $appUserId
     * @param SubAccount $subAccount
     * @return \Picoss\SMoney\Entity\SubAccount
     */
    public function delete($appUserId, SubAccount $subAccount)
    {
        $url = sprintf('users/%s/subaccounts/%s', $appUserId, $subAccount->getAppAccountId());
        return $this->deleteObject($url);
    }
}
