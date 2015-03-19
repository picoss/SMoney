<?php

namespace Picoss\SMoney\Entity;

class Address extends EntityBase
{

    protected $persistable = false;

    /**
     * Street
     *
     * @var string $Street
     */
    protected $Street;

    /**
     * Zip code
     *
     * @var string $ZipCode
     */
    protected $ZipCode;

    /**
     * City
     *
     * @var string $City
     */
    protected $City;

    /**
     * Country
     *
     * @var string $Country
     */
    protected $Country;

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

    public function setStreet($street)
    {
        $this->Street = $street;

        return $this;
    }

    public function getStreet()
    {
        return $this->Street;
    }

    public function setZipcode($zipcode)
    {
        $this->ZipCode = $zipcode;

        return $this;
    }

    public function getZipcode()
    {
        return $this->ZipCode;
    }

    public function setCity($city)
    {
        $this->City = $city;

        return $this;
    }

    public function getCity()
    {
        return $this->City;
    }

    public function setCountry($country)
    {
        $this->Country = $country;

        return $this;
    }

    public function getCountry()
    {
        return $this->Country;
    }
}