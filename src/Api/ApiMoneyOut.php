<?php

namespace Picoss\SMoney\Api;

use Picoss\SMoney\Entity\MoneyOut;

class ApiMoneyOut extends ApiBase
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
    protected $entityClassName = 'Picoss\\SMoney\\Entity\\MoneyOut';

    /**
     * Find all money outs
     *
     * @param string $appUserId
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function findAll($appUserId)
    {
        $url = sprintf('users/%s/moneyouts', $appUserId);

        return $this->getAll($url, $this->entityClassName);
    }

    /**
     * Find money out by id
     *
     * @param string $appUserId
     * @param int $id
     * @return \Picoss\SMoney\Entity\MoneyOut
     */
    public function findOneById($appUserId, $id)
    {
        $url = sprintf('users/%s/moneyouts/%s', $appUserId, $id);

        return $this->getOne($url, $this->entityClassName);
    }

    /**
     * Create new money out
     *
     * @param string $appUserId
     * @param MoneyOut $MoneyOut
     * @return \Picoss\SMoney\Entity\MoneyOut
     */
    public function create($appUserId, MoneyOut $MoneyOut)
    {
        $url = sprintf($this->getCreateUrlPattern($MoneyOut), $appUserId);

        return $this->createObject($url, $MoneyOut);
    }

    /**
     * Get API url based on money out type (recurring/oneshot)
     *
     * @param MoneyOut $MoneyOut
     * @return string
     */
    private function getCreateUrlPattern(MoneyOut $MoneyOut)
    {
        $pattern = '';
        switch ($MoneyOut->getType()) {
            case MoneyOut::TYPE_RECURRING:
                $pattern = 'users/%s/moneyouts/recurring';
                break;
            case MoneyOut::TYPE_ONESHOT:
                $pattern = 'users/%s/moneyouts/oneshot';
                break;
        }

        return $pattern;
    }
}