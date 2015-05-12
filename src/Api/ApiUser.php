<?php

namespace Picoss\SMoney\Api;

use GuzzleHttp\Post\PostFile;
use Picoss\SMoney\Entity\KYC;
use Picoss\SMoney\Entity\Limit;
use Picoss\SMoney\Entity\User;

class ApiUser extends ApiBase
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
    protected $entityClassName = 'Picoss\\SMoney\\Entity\\User';

    /**
     * KYC entity class name
     * @var string
     */
    protected $KYCEntityClassName = 'Picoss\\SMoney\\Entity\\KYC';

    /**
     * Limit entity class name
     * @var string
     */
    protected $limitClassName = 'Picoss\\SMoney\\Entity\\Limit';

    /**
     * Find all users
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function findAll()
    {
        return $this->getAll('users', $this->entityClassName);
    }

    /**
     * Find user by appuserid
     *
     * @param int $appUserId
     * @return \Picoss\SMoney\Entity\User
     */
    public function findOneByAppUserId($appUserId)
    {
        return $this->getOne('users/' . $appUserId, $this->entityClassName);
    }

    /**
     * Create new user
     *
     * @param User $user
     * @return \Picoss\SMoney\Entity\User
     */
    public function create(User $user)
    {
        return $this->createObject('users/', $user);
    }

    /**
     * Update existing user
     *
     * @param User $user
     * @return \Picoss\SMoney\Entity\User
     */
    public function update(User $user)
    {
        $url = 'users/' . $user->getAppuserid();

        return $this->updateObject($url, $user);
    }

    /**
     * Create or update user
     *
     * @param User $user
     * @return User
     */
    public function save(User $user)
    {
        if ($user->getId() != null) {
            return $this->update($user);
        }
        return $this->create($user);
    }

    /**
     * Get user KYC demands
     *
     * @param string $appUserId
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function findAllKYC($appUserId)
    {
        $url = sprintf('users/%s/kyc/', $appUserId);

        return $this->getAll($url, $this->KYCEntityClassName);
    }

    /**
     * Create new KYC demand
     *
     * @param $appUserId
     * @param KYC $kyc
     * @return \Picoss\SMoney\Entity\KYC
     * @throws \Exception
     */
    public function createKYC($appUserId, KYC $kyc)
    {
        $url = sprintf('users/%s/kyc/', $appUserId);

        $headers = [
            'Accept' => sprintf('application/vnd.s-money.v%s+%s', $this->getApiVersion(), $this->getOutputFormat()),
            'Content-Type' => 'multipart/form-data',
        ];

        $body = [];
        $count = 0;
        foreach ($kyc->getFiles() as $file) {
            $postFile = new PostFile('file' . $count, fopen($file->getRealPath(), 'r'), $file->getFilename());
            $body['file' . $count] = $postFile;
            $count++;
        }

        $response = $this->root->getHttpClient()->post($url, $body, $headers);

        return $this->castResponseToEntity($response->json(['object' => true]), get_class($kyc));
    }

    /**
     * Get user global in and money out limits
     *
     * @param $appUserId
     * @return \Picoss\SMoney\Entity\Limit
     */
    public function getLimits($appUserId)
    {
        return $this->getOne(sprintf('users/%s/limits', $appUserId), $this->limitClassName);
    }
}