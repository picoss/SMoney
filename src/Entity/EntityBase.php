<?php

namespace Picoss\SMoney\Entity;

abstract class EntityBase
{
    /**
     * Entity relations
     *
     * @var array $subObjects
     */
    protected $subObjects = [];

    /**
     * Createable fields
     *
     * @var array
     */
    protected $createableFields = [];

    /**
     * Updateable fields
     *
     * @var array
     */
    protected $updateableFields = [];

    /**
     * Get entity relations
     *
     * @return array
     */
    public function getSubObjects()
    {
        return $this->subObjects;
    }

    /**
     * Get creation fields
     *
     * @return array
     */
    public function getCreateableFields()
    {
        return $this->createableFields;
    }

    /**
     * Get uptadeable fields
     *
     * @return array
     */
    public function getUpdateableFields()
    {
        return $this->updateableFields;
    }
}