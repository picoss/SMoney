<?php

namespace Picoss\SMoney\Entity;

class VoucherCopy extends EntityBase
{
    /**
     * Name
     *
     * @var string
     */
    protected $Name;

    /**
     * Type
     *
     * @var string
     */
    protected $Type;

    /**
     * Size
     *
     * @var string
     */
    protected $Size;

    /**
     * Href
     *
     * @var string
     */
    protected $Href;

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
     * Get Type
     *
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Get Size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->Size;
    }

    /**
     * Get Href
     *
     * @return string
     */
    public function getHref()
    {
        return $this->Href;
    }
}