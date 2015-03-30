<?php

namespace Picoss\SMoney\Entity;

use Doctrine\Instantiator\Exception\InvalidArgumentException;

class CardPayment extends EntityBase
{
    /**
     * Available cards
     */
    const CARD_CB = 'CB';
    const CARD_MASTERCARD = 'MASTERCARD';
    const CARD_MAESTRO = 'MAESTRO';
    const CARD_VISA = 'VISA';
    const CARD_VISA_ELECTRON = 'VISA_ELECTRON';

    /**
     * Id
     *
     * @var string $Id
     */
    protected $Id;

    /**
     * Order id
     *
     * @var string
     */
    protected $OrderId;

    /**
     * Available cards
     *
     * @var string
     */
    protected $AvailableCards;

    /**
     * Available cards list
     *
     * @var array
     */
    static $AvailableCardsList;

    /**
     * Beneficiary
     *
     * @var Beneficiary
     */
    protected $Beneficiary;

    /**
     * Amount
     *
     * @var int
     */
    protected $Amount;

    /**
     * Fee
     *
     * @var int
     */
    protected $Fee;

    /**
     * Status
     *
     * @var int
     */
    protected $Status;

    /**
     * Message
     *
     * @var string
     */
    protected $Message;

    /**
     * Is mine
     *
     * @var bool
     */
    protected $IsMine;

    /**
     * Url return
     *
     * @var string
     */
    protected $UrlReturn;

    /**
     * Url callback
     *
     * @var string
     */
    protected $UrlCallback;

    /**
     * Card
     *
     * @var string
     */
    protected $Card;

    /**
     * Payment date
     *
     * @var \DateTime
     */
    protected $PaymentDate;

    /**
     * Href
     *
     * @var string
     */
    protected $Href;

    /**
     * Error code
     *
     * @var int
     */
    protected $ErrorCode;

    /**
     * Extra results
     *
     * @var string
     */
    protected $ExtraResults;

    /**
     * Type
     *
     * @var int
     */
    protected $Type;

    /**
     * Payment schedule
     *
     * @var string
     */
    protected $PaymentSchedule;

    /**
     * Entity relations
     *
     * @var array $subObjects
     */
    protected $subObjects = [
        'Beneficiary' => 'Picoss\\SMoney\\Entity\\Beneficiary',
        'ExtraResults' => 'Picoss\\SMoney\\Entity\\ExtraResults',
    ];

    /**
     * Createable fields
     *
     * @var array
     */
    protected $createableFields = [
        'OrderId',
        'Amount',
        'AvailableCards',
        'Beneficiary',
        'Message',
        'IsMine',
        'UrlReturn',
        'UrlCallback',
        'Fee',
//        'Card',
//        'PaymentSchedule',
    ];

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
     * Set OrderId
     *
     * @var string $OrderId
     * @return CardPayment
     */
    public function setOrderId($OrderId)
    {
        $this->OrderId = $OrderId;

        return $this;
    }

    /**
     * Get OrderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->OrderId;
    }

    /**
     * Set AvailableCards
     *
     * @var string $AvailableCards
     * @return CardPayment
     */
    public function setAvailableCards(array $AvailableCards)
    {
        if (count($unavailable = array_diff($AvailableCards, self::getAvailableCardsList())) != 0) {
            throw new InvalidArgumentException('Invalid card type "' . implode(',', $unavailable) . '"');
        }
        $this->AvailableCards = implode(';', $AvailableCards);

        return $this;
    }

    /**
     * Get AvailableCards
     *
     * @return string
     */
    public function getAvailableCards()
    {
        return $this->AvailableCards;
    }

    static function getAvailableCardsList()
    {
        if (!self::$AvailableCardsList) {
            self::$AvailableCardsList = [
                self::CARD_CB,
                self::CARD_MASTERCARD,
                self::CARD_MAESTRO,
                self::CARD_VISA,
                self::CARD_VISA_ELECTRON,
            ];
        }
        return self::$AvailableCardsList;
    }

    /**
     * Set Beneficiary
     *
     * @var string $Beneficiary
     * @return CardPayment
     */
    public function setBeneficiary(Beneficiary $Beneficiary)
    {
        $this->Beneficiary = $Beneficiary;

        return $this;
    }

    /**
     * Get Beneficiary
     *
     * @return Beneficiary
     */
    public function getBeneficiary()
    {
        return $this->Beneficiary;
    }

    /**
     * Set Amount
     *
     * @var string $Amount
     * @return CardPayment
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;

        return $this;
    }

    /**
     * Get Amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * Set Fee
     *
     * @var string $Fee
     * @return CardPayment
     */
    public function setFee($Fee)
    {
        $this->Fee = $Fee;

        return $this;
    }

    /**
     * Get Fee
     *
     * @return string
     */
    public function getFee()
    {
        return $this->Fee;
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
     * Set Message
     *
     * @var string $Message
     * @return CardPayment
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;

        return $this;
    }

    /**
     * Get Message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * Set IsMine
     *
     * @var string $IsMine
     * @return CardPayment
     */
    public function setIsMine($IsMine)
    {
        $this->IsMine = $IsMine;

        return $this;
    }

    /**
     * Get IsMine
     *
     * @return string
     */
    public function getIsMine()
    {
        return $this->IsMine;
    }

    /**
     * Set UrlReturn
     *
     * @var string $UrlReturn
     * @return CardPayment
     */
    public function setUrlReturn($UrlReturn)
    {
        $this->UrlReturn = $UrlReturn;

        return $this;
    }

    /**
     * Get UrlReturn
     *
     * @return string
     */
    public function getUrlReturn()
    {
        return $this->UrlReturn;
    }

    /**
     * Set UrlCallback
     *
     * @var string $UrlCallback
     * @return CardPayment
     */
    public function setUrlCallback($UrlCallback)
    {
        $this->UrlCallback = $UrlCallback;

        return $this;
    }

    /**
     * Get UrlCallback
     *
     * @return string
     */
    public function getUrlCallback()
    {
        return $this->UrlCallback;
    }

    /**
     * Set Card
     *
     * @var string $Card
     * @return CardPayment
     */
    public function setCard($Card)
    {
        $this->Card = $Card;

        return $this;
    }

    /**
     * Get Card
     *
     * @return string
     */
    public function getCard()
    {
        return $this->Card;
    }

    /**
     * Get PaymentDate
     *
     * @return string
     */
    public function getPaymentDate()
    {
        return $this->PaymentDate;
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

    /**
     * Get ErrorCode
     *
     * @return string
     */
    public function getErrorCode()
    {
        return $this->ErrorCode;
    }

    /**
     * Get ExtraResults
     *
     * @return string
     */
    public function getExtraResults()
    {
        return $this->ExtraResults;
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
     * Set PaymentSchedule
     *
     * @var string $PaymentSchedule
     * @return CardPayment
     */
    public function setPaymentSchedule($PaymentSchedule)
    {
        $this->PaymentSchedule = $PaymentSchedule;

        return $this;
    }

    /**
     * Get PaymentSchedule
     *
     * @return string
     */
    public function getPaymentSchedule()
    {
        return $this->PaymentSchedule;
    }
}