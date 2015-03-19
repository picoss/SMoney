<?php

namespace Picoss\SMoney\Api;

use Picoss\SMoney\Entity\SubAccount;
use Picoss\SMoney\Entity\User;

class ApiUser extends ApiBase
{

    protected $apiVersion = 1;

    protected $entityClassName = 'Picoss\\SMoney\\Entity\\User';

    protected $subAccountClassName = 'Picoss\\SMoney\\Entity\\SubAccount';

    public function findAll()
    {
        return $this->getAll('users', $this->entityClassName);
    }

    public function findOneByAppUserId($id)
    {
        return $this->getOne('users/' . $id, $this->entityClassName);
    }

    public function create(User $user)
    {
        return parent::createObject('users/', $user);
    }

    public function update(User $user)
    {
        $url = 'users/' . $user->getAppuserid();
        return parent::updateObject($url, $user);
    }

    public function findUserSubAccounts(User $user)
    {
        $url = sprintf('users/%s/subaccounts/', $user->getAppuserid());
        return $this->getAll($url, $this->subAccountClassName);
    }

    public function findOneUserSubAccountById($user, $id)
    {
        $url = sprintf('users/%s/subaccounts/%s', $user->getAppuserid(), $id);
        return $this->getOne($url, $this->subAccountClassName);
    }

    public function createSubAccount($userId, SubAccount $subAccount)
    {
        $url = sprintf('users/%s/subaccounts/', $userId);
        return parent::createObject($url, $subAccount);
    }

    public function updateSubAccount($userId, SubAccount $subAccount)
    {
        $url = sprintf('users/%s/subaccounts/%s', $userId, $subAccount->getAppAccountId());
        return parent::updateObject($url, $subAccount);
    }

    public function deleteSubAccount($userId, SubAccount $subAccount)
    {
        $url = sprintf('users/%s/subaccounts/%s', $userId, $subAccount->getAppAccountId());
        return parent::updateObject($url, $subAccount);
    }
}