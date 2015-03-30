<?php

namespace Picoss\SMoney\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class KYC extends EntityBase
{
    /**
     * Id
     *
     * @var string
     */
    protected $Id;

    /**
     * RequestDate
     *
     * @var string
     */
    protected $RequestDate;

    /**
     * Status
     *
     * @var string
     */
    protected $Status;

    /**
     * VoucherCopies
     *
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    protected $VoucherCopies;

    /**
     * Files
     *
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    protected $Files;

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
     * Entity relations
     *
     * @var array $subObjects
     */
    protected $subObjects = [
        'VoucherCopies' => 'Picoss\\SMoney\\Entity\\VoucherCopy',
    ];

    /**
     * Create new KYC entity instance
     */
    public function __construct()
    {
        $this->Files = new ArrayCollection();
    }

    /**
     * Get Id
     *
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Get RequestDate
     *
     * @return string
     */
    public function getRequestDate()
    {
        return $this->RequestDate;
    }

    /**
     * Get Status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Get VoucherCopies
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getVoucherCopies()
    {
        return $this->VoucherCopies;
    }

    /**
     * Add file
     *
     * @param \SplFileInfo $file
     * @return KYC
     */
    public function addFile(\SplFileInfo $file)
    {
        $this->Files[] = $file;

        return $this;
    }

    /**
     * Remove file
     *
     * @param \SplFileInfo $file
     * @return KYC
     */
    public function removeFile(\SplFileInfo $file)
    {
        $this->Files->removeElement($file);

        return $this;
    }

    /**
     * Get files
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFiles()
    {
        return $this->Files;
    }
}