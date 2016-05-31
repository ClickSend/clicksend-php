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
class SubaccountController {

    /**
     * @var SubaccountController The reference to *Singleton* instance of this class
     */
    private static $instance;
    
    /**
     * Returns the *Singleton* instance of this class.
     * @return SubaccountController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Get all subaccounts
     * @return string response from the API call*/
    public function getSubaccounts () 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/subaccounts';

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
     * Create new subaccount
     * @param  array         $apiUsername          Required parameter: Your new api username.
     * @param  string        $password             Required parameter: Your new password
     * @param  string        $email                Required parameter: Your new email.
     * @param  string        $phoneNumber          Required parameter: Your phone number in E.164 format.
     * @param  string        $firstName            Required parameter: Your firstname
     * @param  string        $lastName             Required parameter: Your lastname
     * @param  bool|null     $accessUsers          Optional parameter: Your access users flag value, must be 1 or 0.
     * @param  bool|null     $accessBilling        Optional parameter: Your access billing flag value, must be 1 or 0.
     * @param  bool|null     $accessReporting      Optional parameter: Your access reporting flag value, must be 1 or 0.
     * @param  bool|null     $accessContacts       Optional parameter: Your access contacts flag value, must be 1 or 0.
     * @param  bool|null     $accessSettings       Optional parameter: Your access settings flag value, must be 1 or 0.
     * @return string response from the API call*/
    public function createSubaccount (
                $apiUsername,
                $password,
                $email,
                $phoneNumber,
                $firstName,
                $lastName,
                $accessUsers = true,
                $accessBilling = true,
                $accessReporting = true,
                $accessContacts = false,
                $accessSettings = true) 
    { 
        //check that all required arguments are provided
        if(!isset($apiUsername, $password, $email, $phoneNumber, $firstName, $lastName))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/subaccounts';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'api_username'     => $apiUsername,
            'password'         => $password,
            'email'            => $email,
            'phone_number'     => $phoneNumber,
            'first_name'       => $firstName,
            'last_name'        => $lastName,
            'access_users'     => (null != $accessUsers) ? var_export($accessUsers, true) : true,
            'access_billing'   => (null != $accessBilling) ? var_export($accessBilling, true) : true,
            'access_reporting' => (null != $accessReporting) ? var_export($accessReporting, true) : true,
            'access_contacts'  => (null != $accessContacts) ? var_export($accessContacts, true) : false,
            'access_settings'  => (null != $accessSettings) ? var_export($accessSettings, true) : true,
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
     * Get specific subaccount
     * @param  int     $subaccountId      Required parameter: Example: 
     * @return string response from the API call*/
    public function getSubaccount (
                $subaccountId) 
    { 
        //check that all required arguments are provided
        if(!isset($subaccountId))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/subaccounts/{subaccount_id}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'subaccount_id' => $subaccountId,
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
     * Delete a subaccount
     * @param  int     $subaccountId      Required parameter: Example: 
     * @return string response from the API call*/
    public function deleteSubaccount (
                $subaccountId) 
    { 
        //check that all required arguments are provided
        if(!isset($subaccountId))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/subaccounts/{subaccount_id}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'subaccount_id' => $subaccountId,
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
        $response = Request::delete($_queryUrl, $_headers);

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
     * Regenerate an API Key
     * @param  int     $subaccountId      Required parameter: Example: 
     * @return string response from the API call*/
    public function regenerateApiKey (
                $subaccountId) 
    { 
        //check that all required arguments are provided
        if(!isset($subaccountId))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/subaccounts/{subaccount_id}/regen-api-key';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'subaccount_id' => $subaccountId,
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
     * Update subaccount
     * @param  int             $subaccountId         Required parameter: Example: 
     * @param  string|null     $password             Optional parameter: Example: 
     * @param  string|null     $email                Optional parameter: Example: 
     * @param  string|null     $phoneNumber          Optional parameter: Example: 
     * @param  string|null     $firstName            Optional parameter: Example: 
     * @param  string|null     $lastName             Optional parameter: Example: 
     * @param  bool|null       $accessUsers          Optional parameter: Example: true
     * @param  bool|null       $accessBilling        Optional parameter: Example: true
     * @param  bool|null       $accessReporting      Optional parameter: Example: true
     * @param  bool|null       $accessContacts       Optional parameter: Example: false
     * @param  bool|null       $accessSettings       Optional parameter: Example: true
     * @return string response from the API call*/
    public function updateSubaccount (
                $subaccountId,
                $password = NULL,
                $email = NULL,
                $phoneNumber = NULL,
                $firstName = NULL,
                $lastName = NULL,
                $accessUsers = true,
                $accessBilling = true,
                $accessReporting = true,
                $accessContacts = false,
                $accessSettings = true) 
    { 
        //check that all required arguments are provided
        if(!isset($subaccountId))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/subaccounts/{subaccount_id}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'subaccount_id'    => $subaccountId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'password'         => $password,
            'email'            => $email,
            'phone_number'     => $phoneNumber,
            'first_name'       => $firstName,
            'last_name'        => $lastName,
            'access_users'     => (null != $accessUsers) ? var_export($accessUsers, true) : true,
            'access_billing'   => (null != $accessBilling) ? var_export($accessBilling, true) : true,
            'access_reporting' => (null != $accessReporting) ? var_export($accessReporting, true) : true,
            'access_contacts'  => (null != $accessContacts) ? var_export($accessContacts, true) : false,
            'access_settings'  => (null != $accessSettings) ? var_export($accessSettings, true) : true,
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