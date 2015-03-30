<?php

namespace Picoss\SMoney\Entity;

class Address extends EntityBase
{
    /**
     * Street
     *
     * @var string
     */
    protected $Street;

    /**
     * Zip code
     *
     * @var string
     */
    protected $ZipCode;

    /**
     * City
     *
     * @var string
     */
    protected $City;

    /**
     * Country
     *
     * @var string
     */
    protected $Country;

    /**
     * Createable fields
     *
     * @var array
     */
    protected $createableFields = [
        'Street',
        'ZipCode',
        'City',
        'Country',
    ];

    /**
     * Updateable fields
     *
     * @var array
     */
    protected $updateableFields = [
        'Street',
        'ZipCode',
        'City',
        'Country',
    ];

    /**
     * Set Street
     *
     * @var string $Street
     * @return Tmp
     */
    public function setStreet($Street)
    {
        $this->Street = $Street;

        return $this;
    }

    /**
     * Get Street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->Street;
    }

    /**
     * Set ZipCode
     *
     * @var string $ZipCode
     * @return Tmp
     */
    public function setZipCode($ZipCode)
    {
        $this->ZipCode = $ZipCode;

        return $this;
    }

    /**
     * Get ZipCode
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->ZipCode;
    }

    /**
     * Set City
     *
     * @var string $City
     * @return Tmp
     */
    public function setCity($City)
    {
        $this->City = $City;

        return $this;
    }

    /**
     * Get City
     *
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * Set Country
     *
     * @var string $Country
     * @return Tmp
     */
    public function setCountry($Country)
    {
        $this->Country = $Country;

        return $this;
    }

    /**
     * Get Country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }
}