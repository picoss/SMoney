<?php

namespace Picoss\SMoney;

use GuzzleHttp\Message\RequestInterface;
use GuzzleHttp\Message\ResponseInterface;

class SMoneyError
{
    /**
     * Code
     *
     * @var string
     */
    protected $Code;

    /**
     * ErrorMessage
     *
     * @var string
     */
    protected $ErrorMessage;

    /**
     * Title
     *
     * @var string
     */
    protected $Title;

    /**
     * Priority
     *
     * @var string
     */
    protected $Priority;

    /**
     * Request
     *
     * @var RequestInterface
     */
    protected $Request;

    /**
     * Response
     *
     * @var ResponseInterface
     */
    protected $Response;

    /**
     * Get Code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * Get ErrorMessage
     *
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->ErrorMessage;
    }

    /**
     * Get Title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * Get Priority
     *
     * @return string
     */
    public function getPriority()
    {
        return $this->Priority;
    }

    /**
     * Get Request
     *
     * @return RequestInterface
     */
    public function getRequest()
    {
        return $this->Request;
    }

    /**
     * Get Response
     *
     * @return ResponseInterface
     */
    public function getResponse()
    {
        return $this->Response;
    }
}
