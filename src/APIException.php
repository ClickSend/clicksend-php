<?php
/*
 * ClickSend
 *
 * This file was automatically generated for ClickSend by APIMATIC v2.0 ( https://apimatic.io ) on 05/31/2016
 */

namespace ClickSend;

use Exception;

/**
 * Class for exceptions when there is a network error, status code error, etc.
 */
class APIException extends Exception {
    /**
     * HTTP status code
     * @var int
     */
    private $responseCode;

    /**
     * Response body
     * @var mixed
     */
    private $responseBody;
    
    /**
     * The HTTP response code from the API request
     * @param string $reason the reason for raising an exception
     * @param int $responseCode the HTTP response code from the API request
     */
    public function __construct($reason, $responseCode, $responseBody)
    {
        parent::__construct($reason, $responseCode, NULL);
        $this->responseCode = $responseCode;
        $this->responseBody = $responseBody;
    }

    /**
     * The HTTP response code from the API request
     * @return int
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * The HTTP response body from the API request
     * @return mixed
     */
    public function getResponseBody()
    {
        return $this->responseBody;
    }

    /**
     * The reason for raising an exception
     * @return string
     */
    public function getReason()
    {
        return $this->message;
    }
}