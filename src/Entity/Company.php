<?php

namespace Picoss\SMoney\Entity;

class Company extends EntityBase
{
    /**
     * Name
     *
     * @var string
     */
    protected $Name;

    /**
     * Siret
     *
     * @var string
     */
    protected $Siret;

    /**
     * Set Name
     *
     * @var string $Name
     * @return Company
     */
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }

    /**
     * Get Name
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Set Siret
     *
     * @var string $Siret
     * @return Company
     */
    public function setSiret($Siret)
    {
        $this->Siret = $Siret;

        return $this;
    }

    /**
     * Get Siret
     *
     * @return string
     */
    public function getSiret()
    {
        return $this->Siret;
    }
}
