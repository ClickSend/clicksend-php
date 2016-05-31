<?php
/*
 * ClickSend
 *
 * This file was automatically generated for ClickSend by APIMATIC v2.0 ( https://apimatic.io ) on 05/31/2016
 */

namespace ClickSend\Controllers;

use ClickSend\APIException;
use ClickSend\APIHelper;
use ClickSend\Configuration;
use ClickSend\Models;
use Unirest\Request;
use \apimatic\jsonmapper\JsonMapper;

/**
 * @todo Add a general description for this controller.
 */
class AccountController {

    /**
     * @var AccountController The reference to *Singleton* instance of this class
     */
    private static $instance;
    
    /**
     * Returns the *Singleton* instance of this class.
     * @return AccountController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Get account details
     * @return string response from the API call*/
    public function getAccount () 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/account';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'ClickSendSDK'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$username, Configuration::$key);

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new APIException('BAD_REQUEST', 400, $response->body);
        }

        else if ($response->code == 401) {
            throw new APIException('UNAUTHORIZED', 401, $response->body);
        }

        else if ($response->code == 403) {
            throw new APIException('FORBIDDEN', 403, $response->body);
        }

        else if ($response->code == 404) {
            throw new APIException('NOT_FOUND', 404, $response->body);
        }

        else if ($response->code == 405) {
            throw new APIException('METHOD_NOT_FOUND', 405, $response->body);
        }

        else if ($response->code == 429) {
            throw new APIException('TOO_MANY_REQUESTS', 429, $response->body);
        }

        else if ($response->code == 500) {
            throw new APIException('INTERNAL_SERVER_ERROR', 500, $response->body);
        }

        else if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        
    /**
     * Create An Account
     * @param  string     $username            Required parameter: Your username
     * @param  string     $password            Required parameter: Your password
     * @param  string     $userPhone           Required parameter: Your phone number in E.164 format.
     * @param  string     $userEmail           Required parameter: Your email
     * @param  string     $userFirstName       Required parameter: Your firstname
     * @param  string     $userLastName        Required parameter: Your lastname
     * @param  string     $accountName         Required parameter: Your delivery to value.
     * @param  string     $country             Required parameter: Your country
     * @return string response from the API call*/
    public function createAccount (
                $username,
                $password,
                $userPhone,
                $userEmail,
                $userFirstName,
                $userLastName,
                $accountName,
                $country) 
    { 
        //check that all required arguments are provided
        if(!isset($username, $password, $userPhone, $userEmail, $userFirstName, $userLastName, $accountName, $country))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/account';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'username'        => $username,
            'password'        => $password,
            'user_phone'      => $userPhone,
            'user_email'      => $userEmail,
            'user_first_name' => $userFirstName,
            'user_last_name'  => $userLastName,
            'account_name'    => $accountName,
            'country'         => $country,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'ClickSendSDK'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$username, Configuration::$key);

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers);

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new APIException('BAD_REQUEST', 400, $response->body);
        }

        else if ($response->code == 401) {
            throw new APIException('UNAUTHORIZED', 401, $response->body);
        }

        else if ($response->code == 403) {
            throw new APIException('FORBIDDEN', 403, $response->body);
        }

        else if ($response->code == 404) {
            throw new APIException('NOT_FOUND', 404, $response->body);
        }

        else if ($response->code == 405) {
            throw new APIException('METHOD_NOT_FOUND', 405, $response->body);
        }

        else if ($response->code == 429) {
            throw new APIException('TOO_MANY_REQUESTS', 429, $response->body);
        }

        else if ($response->code == 500) {
            throw new APIException('INTERNAL_SERVER_ERROR', 500, $response->body);
        }

        else if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        
    /**
     * Send account activation token
     * @param  string     $userPhone      Required parameter: Your phone number
     * @param  string     $type           Required parameter: Activation type
     * @param  string     $country        Required parameter: Your country
     * @return string response from the API call*/
    public function activationToken (
                $userPhone,
                $type,
                $country) 
    { 
        //check that all required arguments are provided
        if(!isset($userPhone, $type, $country))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/account-verify/send';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'user_phone' => $userPhone,
            'type'       => $type,
            'country'    => $country,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'ClickSendSDK'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$username, Configuration::$key);

        //and invoke the API call request to fetch the response
        $response = Request::put($_queryUrl, $_headers);

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new APIException('BAD_REQUEST', 400, $response->body);
        }

        else if ($response->code == 401) {
            throw new APIException('UNAUTHORIZED', 401, $response->body);
        }

        else if ($response->code == 403) {
            throw new APIException('FORBIDDEN', 403, $response->body);
        }

        else if ($response->code == 404) {
            throw new APIException('NOT_FOUND', 404, $response->body);
        }

        else if ($response->code == 405) {
            throw new APIException('METHOD_NOT_FOUND', 405, $response->body);
        }

        else if ($response->code == 429) {
            throw new APIException('TOO_MANY_REQUESTS', 429, $response->body);
        }

        else if ($response->code == 500) {
            throw new APIException('INTERNAL_SERVER_ERROR', 500, $response->body);
        }

        else if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        
    /**
     * Verify new account
     * @param  string     $activationToken      Required parameter: Example: 
     * @return string response from the API call*/
    public function verifyAccount (
                $activationToken) 
    { 
        //check that all required arguments are provided
        if(!isset($activationToken))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/account-verify/verify/{activation_token}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'activation_token' => $activationToken,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'     => 'ClickSendSDK'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$username, Configuration::$key);

        //and invoke the API call request to fetch the response
        $response = Request::put($_queryUrl, $_headers);

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new APIException('BAD_REQUEST', 400, $response->body);
        }

        else if ($response->code == 401) {
            throw new APIException('UNAUTHORIZED', 401, $response->body);
        }

        else if ($response->code == 403) {
            throw new APIException('FORBIDDEN', 403, $response->body);
        }

        else if ($response->code == 404) {
            throw new APIException('NOT_FOUND', 404, $response->body);
        }

        else if ($response->code == 405) {
            throw new APIException('METHOD_NOT_FOUND', 405, $response->body);
        }

        else if ($response->code == 429) {
            throw new APIException('TOO_MANY_REQUESTS', 429, $response->body);
        }

        else if ($response->code == 500) {
            throw new APIException('INTERNAL_SERVER_ERROR', 500, $response->body);
        }

        else if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        
    /**
     * Forgot username
     * @param  string|null     $email            Optional parameter: Example: 
     * @param  string|null     $phoneNumber      Optional parameter: Example: 
     * @param  string|null     $country          Optional parameter: Example: 
     * @return string response from the API call*/
    public function forgotUsername (
                $email = NULL,
                $phoneNumber = NULL,
                $country = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/forgot-username';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'email'        => $email,
            'phone_number' => $phoneNumber,
            'country'      => $country,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'ClickSendSDK'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$username, Configuration::$key);

        //and invoke the API call request to fetch the response
        $response = Request::put($_queryUrl, $_headers);

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new APIException('BAD_REQUEST', 400, $response->body);
        }

        else if ($response->code == 401) {
            throw new APIException('UNAUTHORIZED', 401, $response->body);
        }

        else if ($response->code == 403) {
            throw new APIException('FORBIDDEN', 403, $response->body);
        }

        else if ($response->code == 404) {
            throw new APIException('NOT_FOUND', 404, $response->body);
        }

        else if ($response->code == 405) {
            throw new APIException('METHOD_NOT_FOUND', 405, $response->body);
        }

        else if ($response->code == 429) {
            throw new APIException('TOO_MANY_REQUESTS', 429, $response->body);
        }

        else if ($response->code == 500) {
            throw new APIException('INTERNAL_SERVER_ERROR', 500, $response->body);
        }

        else if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        
    /**
     * Forgot password
     * @param  string     $username     Required parameter: Example: 
     * @return string response from the API call*/
    public function forgotPassword (
                $username) 
    { 
        //check that all required arguments are provided
        if(!isset($username))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/forgot-password';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'username' => $username,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'ClickSendSDK'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$username, Configuration::$key);

        //and invoke the API call request to fetch the response
        $response = Request::put($_queryUrl, $_headers);

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new APIException('BAD_REQUEST', 400, $response->body);
        }

        else if ($response->code == 401) {
            throw new APIException('UNAUTHORIZED', 401, $response->body);
        }

        else if ($response->code == 403) {
            throw new APIException('FORBIDDEN', 403, $response->body);
        }

        else if ($response->code == 404) {
            throw new APIException('NOT_FOUND', 404, $response->body);
        }

        else if ($response->code == 405) {
            throw new APIException('METHOD_NOT_FOUND', 405, $response->body);
        }

        else if ($response->code == 429) {
            throw new APIException('TOO_MANY_REQUESTS', 429, $response->body);
        }

        else if ($response->code == 500) {
            throw new APIException('INTERNAL_SERVER_ERROR', 500, $response->body);
        }

        else if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        
    /**
     * Verify forgot password
     * @param  int        $subaccountId         Required parameter: Your subaccount id.
     * @param  string     $activationToken      Required parameter: Your email activation token.
     * @param  string     $password             Required parameter: Your new password.
     * @return string response from the API call*/
    public function verifyForgotPassword (
                $subaccountId,
                $activationToken,
                $password) 
    { 
        //check that all required arguments are provided
        if(!isset($subaccountId, $activationToken, $password))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/forgot-password/verify';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'subaccount_id'    => $subaccountId,
            'activation_token' => $activationToken,
            'password'         => $password,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'     => 'ClickSendSDK'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$username, Configuration::$key);

        //and invoke the API call request to fetch the response
        $response = Request::put($_queryUrl, $_headers);

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new APIException('BAD_REQUEST', 400, $response->body);
        }

        else if ($response->code == 401) {
            throw new APIException('UNAUTHORIZED', 401, $response->body);
        }

        else if ($response->code == 403) {
            throw new APIException('FORBIDDEN', 403, $response->body);
        }

        else if ($response->code == 404) {
            throw new APIException('NOT_FOUND', 404, $response->body);
        }

        else if ($response->code == 405) {
            throw new APIException('METHOD_NOT_FOUND', 405, $response->body);
        }

        else if ($response->code == 429) {
            throw new APIException('TOO_MANY_REQUESTS', 429, $response->body);
        }

        else if ($response->code == 500) {
            throw new APIException('INTERNAL_SERVER_ERROR', 500, $response->body);
        }

        else if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        

    /**
     * Get a new JsonMapper instance for mapping objects
     * @return \apimatic\jsonmapper\JsonMapper JsonMapper instance
     */
    protected function getJsonMapper()
    {
        $mapper = new JsonMapper();
        return $mapper;
    }
}