<?php

namespace Picoss\SMoney\Entity;

abstract class EntityBase
{

    /**
     * Is entity persistable
     *
     * @var bool $persistable
     */
    protected $persistable = true;

    protected $subObjects = [];

    protected $updateableFields = [];

    public function getSubObjects()
    {
        return $this->subObjects;
    }

    public function getUpdateableFields()
    {
        return $this->updateableFields;
    }

    /**
     * Is entity is new ?
     *
     * @return bool|null
     */
    public function isNew()
    {
        if ($this->isPersistable()) {
            return $this->Id != null;
        }
        return null;
    }

    /**
     * Is entity persistable
     *
     * @return bool
     */
    public function isPersistable()
    {
        return $this->persistable;
    }
}